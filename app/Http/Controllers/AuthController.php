<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function username()
    {
    return 'username';
    }

    public function postlogin(Request $request)
    {
       if(Auth::attempt($request->only('username', 'password'))){
        $userId = Auth::id();
        $useraccess = DB::table('users')->where('id', $userId)->pluck('access');
        $useraccess = trim($useraccess, '[]');
        $access = (int)$useraccess;
        if($access == 2){
            return redirect('/counselor_homepage');
        }elseif($access == 1){
            return redirect('/admin_homepage');
        }else{
            return redirect('/clientlandingpage');
        }
       }
         return redirect('/login');
    }

    public function logout()
    {
            Auth::logout();
            return redirect('/index');
    }

    public function create(Request $request)
    {
        $request = new \App\Models\User;
        $request -> username = request('username');
        $request -> email = request('email');
        $request -> password = bcrypt(request('password'));
        $request -> access = 3;
        $request -> save(); 

        $username = request('username');
        $userid = \App\Models\User::select('id')->where('username', $username)->first();
        $userid = trim($userid, '[{"id":}]');
        $userid = intval($userid);
        echo $userid;

        $request = new \App\Models\Client;
        $request -> id = $userid;
        $request-> username = request('username');
        $request-> name = request('name');
        $request -> email = request('email');
        $request -> address = request('address');
        $request -> phonenumber = request('phonenumber');
        $request -> univname = request('univname');
        $request -> save(); 

        //   \App\Models\User::create($request->only('username', 'email', Hash::'password', 'access'));
       return redirect('/login');
    }

    public function admincreate(Request $request)
    {
        $request = new \App\Models\User;
        $request -> username = request('username');
        $request -> email = request('email');
        $request -> password = bcrypt(request('password'));
        $request -> access = request('access');
        $request -> save(); 

        $username = request('username');
        $userid = \App\Models\User::select('id')->where('username', $username)->first();
        $userid = trim($userid, '[{"id":}]');
        $userid = intval($userid);
    
        if($request->access == 1){
            $request = new \App\Models\Admin;
            $request -> id = $userid;
            $request -> username = request('username');
            $request -> name = request('name');
            $request -> email = request('email');
            $request -> phonenumber = request('phonenumber');
            $request -> save(); 
            }else{
            $request = new \App\Models\Counselor;
            $request -> id = $userid;
            $request -> username = request('username');
            $request -> name = request('name');
            $request -> email = request('email');
            $request -> specialization = "-";
            $request -> availdays = "-";
            $request -> phonenumber = request('phonenumber');
            $request -> save(); 
            }
        
        //   \App\Models\User::create($request->only('username', 'email', Hash::'password', 'access'));
        return redirect('/admin_homepage');
    }

    public function getadmin()
    {

    $admin_list_admin = \App\Models\Admin::all();
    return view('admin_list_admin', ['admin_list_admin' => $admin_list_admin]);

    }
    
    public function getcounselor()
    {
        
    $admin_list_counselor = \App\Models\Counselor::all();
    return view('admin_list_counselor', ['admin_list_counselor' => $admin_list_counselor]);

    }

    public function userdelete($id){
        $user =  \App\Models\User::find($id);
        $user->delete();

        return redirect('/admin_homepage');
    }

    public function searchbyid()
    {
        $id = request('userid');
        $admin_user_search = \App\Models\Client::all()->where('id', $id);
        return view('admin_user_search', ['admin_user_search' => $admin_user_search]);
    }

    public function searchbyusername()
    {
        $username = request('username');
        $admin_user_search = \App\Models\Client::where('username', 'LIKE', '%'.$username.'%')->get();
        return view('admin_user_search', ['admin_user_search' => $admin_user_search]);
    }
    

    public function admindelete($id){
        $user =  \App\Models\User::find($id);
        $user->delete();

        $user =  \App\Models\Admin::find($id);
        $user->delete();

        return redirect('/admin_homepage');
    }

    public function counselordelete($id){
        $user =  \App\Models\User::find($id);
        $user->delete();

        $user =  \App\Models\Counselor::find($id);
        $user->delete();

        return redirect('/admin_homepage');
    }

    public function counselorindex()
    {

    $userId = Auth::id();
    $counselor_userprofile = \App\Models\Counselor::all()->where('id', $userId);
    return view('counselor_userprofile', ['counselor_userprofile' => $counselor_userprofile]);
    }
    
}
