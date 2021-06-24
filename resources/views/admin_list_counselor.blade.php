<html>

<head>
  <title>You-Counsel</title>
  <!-- LOGO -->
  <link rel="icon" href="photos/LogoBiru-01.png" type="image/x-icon">
  <!-- LOGO -->

  <!-- STYLING -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    <?php include 'CSS/youcounsel.css';
    ?>
    #previous {
      border: 1px solid;
      padding: 10px;
      box-shadow: 5px 10px 18px #888888;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- STYLING -->
</head>

<body>


  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <a class="navbar-brand" href="admin_homepage"><img src="PHOTOS/LogoPutih-01.png" width="60" height="60"
        class="d-inline-block align-top" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        
      </ul>
      <span class="navbar-text" style="color:white;">
          <a href="/adminprofile"><button type="button" class="btn btn-sm btn-outline-light">Profile</button></a>
          <a href="/logout"><button type="button" class="btn btn-sm btn-outline-light">Logout</button></a>
      </span>
    </div>
  </nav>
  <!-- NAVBAR -->

  <!-- CONTENT -->
  <div class="center" style="width:70%; height:700px;  background-color:white;">
    <img src="PHOTOS/list.jpg" alt="journal2" class="iconjournal">
    <h3 class="center" style="color:0788D9; margin-top:10px;">Counselor List</h3>
    <div class="" style="float:left; margin-top:-200px; margin-left:20px; position:static;">
    <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">
                <a href="admin_homepage" style="text-decoration: none; color:#0BA9D0;" >
                    <button type="submit" style="width:70px; height:35px; font-size:15px" class="btn btn-outline-info btn-sm btn-block tblbackhome">Back</button>
            </div>
            </div>
    <div class="" style="float:right; margin-top:-200px; margin-right:20px; position:static;">
    <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">
                <a href="/adminlist" style="text-decoration: none; color:#0BA9D0;" >
                    <button type="submit" style="width:200px; height:35px; font-size:15px" class="btn btn-outline-info btn-sm btn-block tblbackhome">Admin List</button>
                </a>
            </div>
            </div> 
    <!-- Isi Konten -->
  
    <table class="table table-bordered ml-auto mr-auto" style="position:static;width:95%; margin-top:20px;">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col" style="text-align:center; width:5%; color: #069FD7;">No</th>
                            <th scope="col" style="text-align:center; width:auto; color: #069FD7;">ID</th>
                            <th scope="col" style="text-align:center; width:auto; color: #069FD7;">Username</th>
                            <th scope="col" style="text-align:center; width:auto; color: #069FD7;">Name</th>
                            <th scope="col" style="text-align:center; width:auto; color: #069FD7;">Email</th>
                            <th scope="col" style="text-align:center; width:auto; color: #069FD7;">Phone Number</th>
                            <th scope="col" style="text-align:center; width:auto; color: #069FD7;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($admin_list_counselor as $client)
                            <tr>
                            <td scope="row" style="text-align:center;"> {{ $no++ }} </td>
                            <td scope="row" style="text-align:center;">{{$client->id}} </td>
                            <td>{{$client->username}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->phonenumber}}</td>
                            <td style="text-align:center;">
                            <a href="{{$client->id}}/counselordelete" button type="button" class="btn btn-danger" style="width:70px;">Delete</button>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                     </table>

  <!-- SOCMED -->
  <div class="" align="center" style="letter-spacing: 15px;">
      <a href="https://twitter.com/" class="fa fa-twitter fa-3x" style="color: white;"></a>
      <a href="https://facebook.com/" class="fa fa-facebook fa-3x" style="color: white;"></a>
      <a href="https://instagram.com/" class="fa fa-instagram fa-3x" style="color: white;"></a>
      <a href="https://accounts.google.com/" class="fa fa-google fa-3x" style="color: white;"></a>
    </div>
  
  <!-- SOCMED -->

<br>
</body>

</html>