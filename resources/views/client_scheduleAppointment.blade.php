<html>

<head>
  <title>You-Counsel | MyJournal</title>
  <!-- LOGO -->
  <link rel="icon" href="photos/LogoBiru-01.png" type="image/x-icon">
  <!-- LOGO -->

 <!-- STYLING -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <style>
    <?php include 'CSS/youcounsel.css' ?>

    .box{
    margin:0 auto; 
    margin-top: -5%;
    width:70%;
    height:70%;
    padding:20px;
    border:2px solid #0BA9D0;}

    </style>
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
        Hello, <a href="/" style="color:white; font-size:15px;"><u>James</u></a>!
        <button type="button" class="btn btn-sm btn-outline-light">Logout</button>
      </span>
    </div>
  </nav>
  <!-- NAVBAR -->

  <!-- CONTENT -->
  <div class="center" style="width:70%; height:770px;  background-color:white;">
    <img src="PHOTOS/appointment.jpg" alt="journal2" class="iconjournal">
    <h3 class="center" style="margin-top:10px; color:#0BA9D0;font-family: 'Be Vietnam';">Schedule an Appointment</h3>  
    
    <!-- Isi Konten -->
            <!-- FORM -->
        <div class = "box">
            
            <form action="">
            <table border="0" style="margin-left:75px;margin-top:-25px;">
              
            <tr><td style="font-size: 24px; color:#0BA9D0;font-family: 'Be Vietnam';">Date</td> 
            <td><input type="date" name="date" style = "width:400px;border: 2px solid rgba(0, 0, 0, 0.2);border-radius:7px;height:39px;font-size: 18px;font-family: 'Be Vietnam';"/><td></tr>
            <tr><td style="height:30px;"></tr></td>

            <tr><td style="font-size: 24px; color:#0BA9D0;font-family: 'Be Vietnam';">Type of Counseling</td> 
            <td><select name="type" style = "width:400px;border: 2px solid rgba(0, 0, 0, 0.2);border-radius:7px;height:39px;font-size: 18px;font-family: 'Be Vietnam';">
            <option value="Personal Development"> Personal Development</option>
            <option value="Carrer"> Carrer</option>
            </select></td></tr>
            <tr><td style="height:30px;"></tr></td>

            <tr><td style="font-size: 24px; color:#0BA9D0;font-family: 'Be Vietnam';">Counselor</td> 
            <td><select name="counselor" style = "width:400px;border: 2px solid rgba(0, 0, 0, 0.2);border-radius:7px;height:39px;font-size: 18px;font-family: 'Be Vietnam';">
            <option value="ulala"> Dr. Ulala, S.Psi.</option>
            <option value="budi"> Dr. Budi, S.Psi.</option>
            </select></td></tr>
            <tr><td style="height:30px;"></tr></td>

            <tr><td style="font-size: 24px; color:#0BA9D0;font-family: 'Be Vietnam';">Method</td> 
            <td><select name="method" style = "width:400px;border: 2px solid rgba(0, 0, 0, 0.2);border-radius:7px;height:39px;font-size: 18px;font-family: 'Be Vietnam';">
            <option value="vidcall"> Video Call</option>
            <option value="call"> On Call</option>
            </select></td></tr>
            <tr><td style="height:30px;"></tr></td>

            <tr><td style="font-size: 24px; color:#0BA9D0;font-family: 'Be Vietnam';">Do you mind to tell us about it? </td></tr>
            <td><textarea type="text" name="tell" cols="40" style="height:90px;"  
            placeholder="Write your story briefly...." ></textarea></td></tr>
            <tr><td style="height:25px;"></tr></td>

            <tr><td><button style="width: 100px;height: 38px;background-color:#17BFBF;color:white;border-radius:7px;border: #17BFBF">Send</button></td></tr>
      
            </form>
      
        </div>

  </div>
  
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