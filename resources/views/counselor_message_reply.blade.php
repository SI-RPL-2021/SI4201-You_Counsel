<html>

<head>
    <title>You-Counsel</title>
    <!-- LOGO -->
    <link rel="icon" href="/photos/LogoBiru-01.png" type="image/x-icon">
    <!-- LOGO -->

    <!-- STYLING -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
    <link rel="stylesheet" href="{{ URL::asset('CSS/youcounsel.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <style>

        <?php 
      //  $publicpath = public_path();
      //  include publicpath('CSS/youcounsel.css');
        ?>

    </style>
    <!-- STYLING -->
</head>

<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="counselor_homepage"><img src="/PHOTOS/LogoPutih-01.png" width="60" height="60"
                class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

            </ul>
            <span class="navbar-text" style="color:white;">
                Hello, <a href="/counselor_userprofile" style="color:white; font-size:15px;"><u>Steph</u></a>!
                <a href="/"><button type="button" class="btn btn-sm btn-outline-light">Logout</button></a>
            </span>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!-- CONTENT -->
    <div class="content">
        <div class="center" style="width:70%; height:600px;  background-color:white;">
            <img src="/PHOTOS/inboxicon.png" alt="journal2" class="iconjournal">

            <h3 class="center" style="color:0788D9; margin-top:10px; color:#0BA9D0;font-family: 'Be Vietnam';">Messages
            </h3>
            <div class="" style="float:left; margin-top:-200px; margin-left:20px; position:static;">
                <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">
                </div>
            </div>

            <!-- Isi Konten -->


            <center>
                <div>
                    <p style="color:#0BA9D0; font-family: 'Be Vietnam';font-size: 40px; margin-top:-80px;">Message Reply
                    </p>
                </div>
            </center>
            <br>

            <center>
                <div align="left" style="width:60%;">
                    <form style="font-size:18px; color:#0BA9D0;" method="POST" action="/sendreply">
                    {{csrf_field()}}
                        <input type="hidden" name="messageid" value="{{$counselor_message_reply->id}}">
                        <div class="form-group row">
                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-9 ml-5">
                                <input type="text" class="form-control" id="inputDate" name="tanggal" value="{{$counselor_message_reply->created_at}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Messages" class="col-sm-2 col-form-label">Messages</label>
                            <div class="col-sm-9 ml-5">
                                <input type="text" class="form-control" id="exampleFormControlTextarea1" name="message" value="{{$counselor_message_reply->messages}}" disabled></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputStudentID" class="col-sm-2 col-form-label">Client ID</label>
                            <div class="col-sm-9 ml-5">
                                <input type="text" class="form-control" id="clientid" name="clientid"  value="{{$counselor_message_reply->clientid}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="replies" rows="4" placeholder="Write down your thoughts...."></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-info" >Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </center>
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