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
    width:80%;
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
    <img src="PHOTOS/search.jpg" alt="journal2" class="iconjournal">
    <h3 class="center" style="margin-top:10px; color:#0BA9D0;font-family: 'Be Vietnam';">User Management</h3>  
    
    <!-- Isi Konten -->
            <!-- FORM -->
        <div class = "box">
          <p style="color:#0BA9D0;font-family: 'Be Vietnam'; text-shadow:1px 1px 3px #566573 ; font-size:40px;">Appointment Reply</p>
            
            <form action="">
            <table border="0" style="margin-top:-50px;margin-left:25px">
              
              <tr><td><label style="color:#0BA9D0;font-family: 'Be Vietnam'; " for="schedule_id">Schedule ID</label></td></tr>
              <tr><td><input style = "width:966px;border: 2px solid rgba(0, 0, 0, 0.2);border-radius:7px;height:32px;" type="scheduleID"></td><tr>

              <tr><td><label style="color:#0BA9D0;font-family: 'Be Vietnam';" for="student_id">Student ID</label></td></tr>
              <tr><td><input style = "width:966px;border: 2px solid rgba(0, 0, 0, 0.2);border-radius:7px;height:32px;" type="studentID"></td><tr>
              
              <tr><td><label style="color:#0BA9D0;font-family: 'Be Vietnam';" for="date">Date</label></td></tr>
              <tr><td><input style = "width:966px;border: 2px solid rgba(0, 0, 0, 0.2);border-radius:7px;height:32px;" type="date"></td><tr>

              <tr><td>
              <label for="choose"></label>
                  <select name="choose" style = "width:966px;border:2px solid rgba(0, 0, 0, 0.2);border-radius:7px; margin-top:15px; margin-left:-5px;height:32px;" id="choose">
                    <option value="approve">Approve</option>
                    <option value="disapprove">Disapprove</option>
              </select>
              </td></tr>

              <tr><td>
              <textarea id="desc" name="desc" style = "width:966px;border: 2px solid rgba(0, 0, 0, 0.2);border-radius:7px;height:94px; margin-top:15px;"></textarea>
              </td></tr>

              <tr style= "height:20px;"><td></td></tr>   
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

</html><?php /**PATH C:\xampp\htdocs\SI4201-You_Counsel\resources\views/counselor_appointment_reply.blade.php ENDPATH**/ ?>