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
    <a class="navbar-brand" href="clientlandingpage"><img src="PHOTOS/LogoPutih-01.png" width="60" height="60"
        class="d-inline-block align-top" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white; font-size:15px;"><u>Inbox</u></a>
        </li>
      </ul>
      <span class="navbar-text" style="color:white;">
        Hello, <a href="/logout" style="color:white; font-size:15px;"><u>James</u></a>!
        <button type="button" class="btn btn-sm btn-outline-light">Logout</button>
      </span>
    </div>
  </nav>
  <!-- NAVBAR -->

  <!-- CONTENT -->
  <div class="center" style="width:70%; height:700px;  background-color:white;">
    <img src="PHOTOS/inboxicon.png" alt="journal2" class="iconjournal">
    <h3 class="center" style="color:0788D9; margin-top:10px;">Client Profile</h3>
    <div class="" style="float:left; margin-top:-200px; margin-left:20px; position:static;">
    <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">
                <a href="/clientlandingpage" style="text-decoration: none; color:#0BA9D0;" >
                    <button type="submit" style="width:70px; height:35px; font-size:15px" class="btn btn-outline-info btn-sm btn-block tblbackhome">Back</button>
                </a>

                
            </div>
            </div>
    <table>
    @foreach($clientprofile as $client)
    <tr>
      <th> ID </th>
      <td>{{$client->id}}</td>
    </tr>
    <tr>
      <th> Username </th>
      <td>{{$client->username}}</td>
    </tr>
    <tr>
      <th> Name </th>
      <td>{{$client->name}}</td>
    </tr>
    <tr>
      <th> Email </th>
      <td>{{$client->email}}</td>
    </tr>
    <tr>
      <th> Address </th>
      <td>{{$client->address}}</td>
    </tr>
    <tr>
      <th> Phone Number </th>
      <td>{{$client->phonenumber}}</td>
    </tr>
    <tr>
      <th> Univname </th>
      <td>{{$client->univname}}</td>
    </tr>
    </table>
    @endforeach 
    <!-- Isi Konten -->

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