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
        <?php include 'CSS/youcounsel.css'?>
        .box
        {
        margin-top:-70px;
        padding-top:30px;
        padding-right:30px;
        padding-left:30px;
        width:80%;
        height:70%;
        border:2px
        solid
        #0BA9D0;
        }

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
                    <a class="nav-link" href="/inbox" style="color:white; font-size:15px;"><u>Inbox</u></a>
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
    <div class="center" style="width:70%; height:750px;  background-color:white;">
        <img src="PHOTOS/appointment.jpg" alt="journal2" class="iconjournal">
        <h3 class="center" style="margin-top:10px; color:#0BA9D0;font-family: 'Be Vietnam';">Schedule an Appointment
        </h3>

        <!-- Isi Konten -->
        <!-- FORM -->
        <center>
            <div class="box">
                <form method="POST" action="/appointmentreq" style="color:#0BA9D0;font-family: 'Be Vietnam';" align="left">
                {{csrf_field()}}
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Date</label>
                        <div class="col-sm-8 ml-auto">
                            <input class="form-control" id="colFormLabel" type="date" name="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Type of
                            Counseling</label>
                        <div class="col-sm-8 ml-auto">
                            <select class="form-control" name="type">
                                <option>Personal Development</option>
                                <option>Career</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Counselor</label>
                        <div class="col-sm-8 ml-auto">
                            <select class="form-control" name="counselorid">
                                <option value='789'>B. F. Skinner</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Method</label>
                        <div class="col-sm-8 ml-auto">
                            <select class="form-control" name="method">
                                <option>Video Call</option>
                                <option>Voice Call</option>
                                <option>Offline</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg">Do you mind to
                            tell us
                            about it?</label>
                        <div class="col-sm-8 ml-auto">
                            <textarea class="form-control" id="exampleFormControlTextarea1" row="3"
                                placeholder="Write your story briefly...." name="reason"></textarea>
                        </div>
                    </div>
                    <div class="wrap">
                        <button class="tblsend">Send</button>
                    </div>
                </form>
            </div>
        </center>
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