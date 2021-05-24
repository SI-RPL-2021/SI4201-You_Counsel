<html>
<head>
    <title>You-Counsel</title>
    <!-- LOGO -->
    <link rel = "icon" href="photos/LogoBiru-01.png" type = "image/x-icon">
    <!-- LOGO -->

    <!-- STYLING -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    <?php include 'CSS/youcounsel.css'; ?>
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
        <a class="navbar-brand" href="clientlandingpage"><img src="PHOTOS/LogoPutih-01.png" width="60" height="60" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="inbox.php" style="color:white; font-size:15px;"><u>Inbox</u></a>
            </li>
            </ul>
            <span class="navbar-text" style="color:white;">
            Hello, <a href="/profile" style="color:white; font-size:15px;"><u>James</u></a>!
            <a href="/index"><button type="button" class="btn btn-sm btn-outline-light">Logout</button></a>
            </span>
        </div>
        </nav>
    <!-- NAVBAR -->

    <!-- TITLE -->
        <div class="content center" style="margin-top:10px; width:100%;">
        <h3 style="color:#7D7E80; text-align: center; font-size: 30px; color:white;"><b>Hi, James!</b> How can we help you today? </h2>
    </div>
    <!-- TITLE -->

    <!-- CONTENT -->
    <div class="" align="center">
    <table class="center" style="width:1200px; margin-top:50px; margin-left:180px;">
        <tr>
            <td style="width:400px;">
            <div class="card " style="width: 300px; height:400px">
                <img class="card-img-top" src="PHOTOS/journal2.jpg">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center; color:#0788D9;">My Journal</h4>
                    <p class="card-text" style="font-size:15px;text-align: center;">Help us to understand you each and every day.</p>
                    <br>
                    <center><a href="client_myjournal.php" style="text-decoration: none;"><button type="submit" class="btn btn-outline-primary btn-sm btn-block">Open My Journal</button></a></center>
                    <br>
                    <center><a href="client_journalhistory.php" style="text-decoration: none;"><button type="submit" class="btn btn-outline-primary btn-sm btn-block">Journal History</button></a></center>
            </div>
            </div>
            </td>
            <td>
            <div class="card " style="width: 300px; height:400px">
                <img class="card-img-top" src="PHOTOS/appointment.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center; color:#0788D9;">Schedule an Appointment</h4>
                    <p class="card-text" style="font-size:15px;text-align: center;">Connect with us and feel free to talk about anything to us!</p>
                    <br>
                    <center><a href="schedulephp" style="text-decoration: none;"><button type="submit" class="btn btn-outline-primary btn-sm btn-block">Create Schedule</button></a></center>
                    <br>
                    <center><a href="/" style="text-decoration: none;"><button type="submit" class="btn btn-outline-primary btn-sm btn-block">Schedule History</button></a></center>
            </div>
            </div>
            </td>
            <td>
            <div class="card " style="width: 300px; height:400px">
                <img class="card-img-top" src="PHOTOS/message.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center; color:#0788D9;">Leave us a Message</h4>
                    <p class="card-text" style="font-size:15px;text-align: center">Send us your thoughts because every mind should be free!</p>
                    <br>
                    <center><a href="client_leavemessage.php" style="text-decoration: none;"><button type="submit" class="btn btn-outline-primary btn-sm btn-block">Send Message</button></a></center>
                    <br>
                    <center><a href="/" style="text-decoration: none;"><button type="submit" class="btn btn-outline-primary btn-sm btn-block">Message History</button></a></center>
            </div>
            </div>
            </td>
        </tr>
    </table>
    </div>
    <!-- CONTENT -->

    <!-- SOCMED -->
    <div class="" align="center" style="letter-spacing: 15px;">
      <a href="https://twitter.com/" class="fa fa-twitter fa-3x" style="color: white;"></a>
      <a href="https://facebook.com/" class="fa fa-facebook fa-3x" style="color: white;"></a>
      <a href="https://instagram.com/" class="fa fa-instagram fa-3x" style="color: white;"></a>
      <a href="https://accounts.google.com/" class="fa fa-google fa-3x" style="color: white;"></a>
    </div>
     <!-- SOCMED -->


</body>
</html>
