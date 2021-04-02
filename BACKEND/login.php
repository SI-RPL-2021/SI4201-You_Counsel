<?php 
require 'conn.php'; 
session_start();


$loginusername = $_POST['username'];
$loginsandi = $_POST['password'];

echo $loginusername;

$data = mysqli_query($conn,"SELECT * FROM clients WHERE username='$loginusername'");
while($d = mysqli_fetch_array($data)){
    $id = $d['clientsid'];
    $username = $d['username'];
    $nama = $d['name'];
    $email = $d['email'];
    $alamat = $d['address'];
    $notelp = $d['phonenumber'];
    $password = $d['password'];
    $univ = $d['univname'];
    $access = $d['access'];
    
}

if($loginsandi == $password){
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $login = "reg-sc";
    $_SESSION['login'] = $login;
   header("location:../clientlandingpage.php");
}else{
   header("location:../login1.php");
    $login = "f";
   $_SESSION['login'] = $login;
}



?>