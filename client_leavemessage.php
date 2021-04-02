<html>

<head>
  <title>You-Counsel</title>
  <!-- LOGO -->
  <link rel="icon" href="photos/LogoBiru-01.png" type="image/x-icon">
  <!-- LOGO -->

  <!-- STYLING -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    <?php include 'youcounsel.css';
    ?>
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
        Hello, <a href="/" style="color:white; font-size:15px;"><u>James</u></a>!
        <button type="button" class="btn btn-sm btn-outline-light">Logout</button>
      </span>
    </div>
  </nav>
  <!-- NAVBAR -->

  <!-- CONTENT -->
  <div class="content">
    <div class="center" style="width:70%; height:700px;  background-color:white;">
      <img src="PHOTOS/inboxicon.png" alt="journal2" class="iconjournal">

      <h3 class="center" style="color:0788D9; margin-top:10px; color:#0BA9D0;font-family: 'Be Vietnam';">Leave Us a
        Message</h3>
      <button type="submit" class="btn btn-outline-info btn-sm btn-block tblhistory">History</button>

      <!-- Isi Konten -->
      <div class="tglwaktu" style="margin-top:-90px; margin-left:20px;">
        <input type="text" readonly class="form-control-plaintext"
          style="font-family: 'Be Vietnam';font-size: 20px;" id="date"
          value="<?php echo date('D, d M Y');?>">
        <input type="text" readonly class="form-control-plaintext"
          style="font-family: 'Be Vietnam';font-size: 20px;" id="time"
          value="<?php date_default_timezone_set("Asia/Jakarta");echo date("h:i");?>">
      </div>

      <center>
        <div style="width:90%; margin-top:40px;">
          <p style="color:#0BA9D0; font-family: 'Be Vietnam';font-size: 50px;margin-top:-20px;">Send us your thoughts
            because every mind should be free!</p>
        </div>
      </center>

      <center>
        <div class="form-check" style="width:85%;">
          <textarea class="form-control" id="message" name="message" style="border-color: #0BA9D0;height:17%"
            placeholder="Write down your thoughts...."></textarea>
        </div>
      </center>

      <div class="wrap">
        <button class="tblsend">Send</button>
      </div>
    </div>



    <!-- SOCMED -->
    <div class="" align="center">
      <a href="https://twitter.com/" class="fa fa-twitter fa-3x" style="color: white;"></a>&ensp;&ensp;
      <a href="https://facebook.com/" class="fa fa-facebook fa-3x" style="color: white;"></a>&ensp;&ensp;
      <a href="https://instagram.com/" class="fa fa-instagram fa-3x" style="color: white;"></a>&ensp;&ensp;
      <a href="https://accounts.google.com/" class="fa fa-google fa-3x" style="color: white;"></a>&ensp;&ensp;
    </div>

    <!-- SOCMED -->

    <br>
</body>

</html>