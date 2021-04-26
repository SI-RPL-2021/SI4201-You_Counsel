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
  <div class="center" style="width:70%; height:700px;  background-color:white;">
    <img src="PHOTOS/journal2.jpg" alt="journal2" class="iconjournal">
    <h3 class="center" style="color:0788D9; margin-top:10px; color:#0BA9D0;font-family: 'Be Vietnam';">My Journal</h3>  
    
    <!-- Isi Konten -->
    <input type="text" readonly class="form-control-plaintext" style="font-family: 'Be Vietnam';font-size: 20px; margin-top:-80px;margin-left:10px;" id="date" value="<?php echo date('D, d M Y');?>">
            <input type="text" readonly class="form-control-plaintext" style="font-family: 'Be Vietnam';font-size: 20px;margin-left:10px;" id="time" value= "<?php date_default_timezone_set("Asia/Jakarta");echo date("h:i");?>">
            
            <center><div style="width:90%;">
            <p style="color:#0BA9D0; font-family: 'Be Vietnam';font-size: 50px;margin-top:30px;margin-bottom:8%;">How Are You Feeling Today?</p>
            </div></center>
            
            <a href = "client_myjournal_happy.php" style="font-size:100px;margin-right:10%">
            &#128522;</a>
            
            <a href = "client_myjournal_sad.php" style="font-size:100px;margin-right:10%">
            &#128577;</a>
            
            <a href = "client_myjournal_flat.php" style="font-size:100px;">
            &#128528;</a>

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