<html>

<head>
    <title>You-Counsel</title>
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
        <a class="navbar-brand" href="/counselor_homepage"><img src="PHOTOS/LogoPutih-01.png" width="60" height="60"
                class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

            </ul>
            <span class="navbar-text" style="color:white;">
                <a href="/counselorprofile"><button type="button" class="btn btn-sm btn-outline-light">Profile</button></a>
                <a href="/logout"><button type="button" class="btn btn-sm btn-outline-light">Logout</button></a>
            </span>
        </div>
    </nav>
    <!-- NAVBAR -->

    

    <!-- CONTENT -->
    <div class="content">
        <div class="center" style="width:70%; height:800px;  background-color:white;">
            <img src="PHOTOS/inboxicon.png" alt="journal2" class="iconjournal">
            <center> <h4 style="margin-left:-0px;margin-top:10px;color:#0BA9D0;font-family: 'Be Vietnam'; font-size:20px;">User Management </h4> <center>

            <center> <h4 style="margin-left:-0px;margin-top:30px;color:#0BA9D0;font-family: 'Be Vietnam'; font-size:30px;">Change Schedules </h4> <center>

            <!-- Isi Konten -->
            <center>

                <div style="margin-top:px;width:70%;" align="left">
                    <h4 style="margin-left:-50px;margin-bottom:30px;color:#0BA9D0;font-family: 'Be Vietnam'; font-size:20px;">Specialization
                    </h4>
                    <form action="updatecounselordetails" method="POST" style="color:#0BA9D0;font-family: 'Be Vietnam';">
                    {{csrf_field()}}
                        <input type="checkbox" name="check1a[]" value="Minat/Bakat,">&nbsp;Minat/Bakat&nbsp;
                        <input type="checkbox" name="check2a[]" value="Karir,">&nbsp;Karir&nbsp;
                        <input type="checkbox" name="check3a[]" value="Pribadi,">&nbsp;Pribadi&nbsp;
                        <input type="checkbox" name="check4a[]" value="Kelompok">&nbsp;Kelompok&nbsp;

                    <br>
                    <br>
                    <h4 style="margin-left:-50px;margin-bottom:30px;color:#0BA9D0;font-family: 'Be Vietnam'; font-size:20px;">Available Days
                    </h4>
                        <input type="checkbox" name="check1b[]" value="Mon,">&nbsp;Monday&nbsp;
                        <input type="checkbox" name="check2b[]" value="Tue,">&nbsp;Tuesday&nbsp;
                        <input type="checkbox" name="check3b[]" value="Wed,">&nbsp;Wednesday&nbsp;
                        <input type="checkbox" name="check4b[]" value="Thur,">&nbsp;Thursday&nbsp;
                        <input type="checkbox" name="check5b[]" value="Fri,">&nbsp;Friday&nbsp;
                        
                        
                </div>  
                         

                        <center><button type="submit" class="btn btn-outline-info" style="margin-top:30px;">Save Changes</button><center>

            </center>
            </form>
        </div>
    </div>

    <!-- SOCMED -->
    <div class="" align="center" style="letter-spacing: 15px;">
        <a href="https://twitter.com/" class="fa fa-twitter fa-3x" style="color: white;"></a>
        <a href="https://facebook.com/" class="fa fa-facebook fa-3x" style="color: white;"></a>
        <a href="https://instagram.com/" class="fa fa-instagram fa-3x" style="color: white;"></a>
        <a href="https://accounts.google.com/" class="fa fa-google fa-3x" style="color: white;"></a>
    </div>
    <br>
</body>

</html>