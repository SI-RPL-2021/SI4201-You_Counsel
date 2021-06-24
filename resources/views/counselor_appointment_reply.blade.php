<html>

<head>
    <title>You-Counsel</title>
    <!-- LOGO -->
    <link rel="icon" href="/photos/LogoBiru-01.png" type="image/x-icon">
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
        .h3
        {
        font-family: Be Vietnam;
        text-align: center;
        color:#0788D9;
        font-size: 30px;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        margin-top:-20px;
        }
    </style>
    <!-- STYLING -->
</head>

<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="/counselor_homepage"><img src="/PHOTOS/LogoPutih-01.png" width="60" height="60"
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
                <a href="/counselorprofile"><button type="button" class="btn btn-sm btn-outline-light">Profile</button></a>
                <a href="/logout"><button type="button" class="btn btn-sm btn-outline-light">Logout</button></a>
            </span>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!-- CONTENT -->
    <div class="center" style="width:70%; height:750px;  background-color:white;">
        <img src="/PHOTOS/appointment.jpg" alt="journal2" class="iconjournal">
        <h3 class="center" style="margin-top:10px; color:#0788D9;font-family: 'Be Vietnam';font-size: 20px;">Appointment Requests
        </h3>


        <div class="" style="float:left; margin-top:-200px; margin-left:20px; position:static;">
                <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">
                    <a href="/appointmentlist" style="text-decoration: none; color:#0BA9D0;">
                        <button type="submit" style="width:70px; height:35px; font-size:15px"
                            class="btn btn-outline-info btn-sm btn-block tblbackhome">Back</button>
                    </a>
                </div>
            </div>


        <!-- Isi Konten -->
        <!-- FORM -->
        <center>
            <div class="box">
            <div class="h3" >Appointment Reply</div>
                <form method="POST" action="/appointmentans" style="color:#0BA9D0;font-family: 'Be Vietnam';" align="left">
                {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-md">Schedule ID</label>
                            <input class="form-control" id="exampleFormControlTextarea1"
                               name="scheduleid" value="{{$counselor_appointment_reply->id}}" ></input>
                    </div> 
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-md">Client ID</label>
                            <input class="form-control" id="exampleFormControlTextarea1"
                                placeholder="12098765" name="clientid" value="{{$counselor_appointment_reply->clientid}}" ></input>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-md">Date</label>
                            <input class="form-control" name="requesteddate" id="colFormLabel" type="text" value="{{$counselor_appointment_reply->requesteddate}}" ></input>
                    </div>
                    <div class="form-group row">
                     <label for="approval" class="col-sm-4 col-form-label col-form-label-md">Approval</label>
                      <select class="form-control" name="approval">
                                <option>Approve</option>
                                <option>Disapprove</option>
                            </select>                        
                    </div>
                    <div class="form-group row">
                            <textarea class="form-control" id="exampleFormControlTextarea1" row="5"
                                placeholder="Describe" name="message"></textarea>
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