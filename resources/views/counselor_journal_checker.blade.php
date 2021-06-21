<html>

<head>
    <title>You-Counsel | Journal History</title>
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
        <?php include 'CSS/youcounsel.css'?>

    </style>
    <!-- STYLING -->
</head>

<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="counselor_homepage"><img src="PHOTOS/LogoPutih-01.png" width="60" height="60"
                class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

            </ul>
            <span class="navbar-text" style="color:white;">
                Hello, <a href="/counselor_userprofile" style="color:white; font-size:15px;"><u>James</u></a>!
                <a href="/"><button type="button" class="btn btn-sm btn-outline-light">Logout</button></a>
            </span>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!-- CONTENT -->
    <div class="center" style="width:40%; height:380px;  background-color:white;">
        <img src="PHOTOS/journal2.jpg" alt="journal2" class="iconjournal">
        <h3 class="center" style="color:0788D9; margin-top:10px;">Journal Checker</h3>

        <center>
            <div>
                <p style="color:#0BA9D0; font-family: 'Be Vietnam';font-size: 20px; margin-top:-80px;">Input Client's Username
                </p>
            </div>
        </center>

        <form method="get" action="journalchecker">
            <div class="form-group col-sm-8 ml-auto mr-auto">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="inputUsername" name="username"
                    placeholder="Client's Username">
            </div>
            <br>
            <button type="submit" class="btn btn-outline-info">Submit</button>
        </form>

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

    <br>
</body>

</html>