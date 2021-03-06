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

    <h3 class="center font-weight-lighter" style="margin-top:10px; color:white;font-family: 'Be Vietnam';">Counselor Profile
    </h3>

    <!-- CONTENT -->
    <div class="content">
        <div class="center" style="width:70%; height:1100px;  background-color:white;">
            <img src="PHOTOS/inboxicon.png" alt="journal2" class="iconjournal">

            <!-- Isi Konten -->

            <center>
                <div style="margin-top:50px;width:70%;" align="left">
                    <h4 style="margin-left:-100px;margin-bottom:30px;color:#848484;font-family: 'Be Vietnam';">Edit
                        Information
                    </h4>
                    <form class="font-weight-bold" style="color:#0BA9D0; font-size:15px;" method="POST" action="updatecounselor">
                    {{csrf_field()}}
                    @foreach($counselor_userprofile as $client)
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputDisplayName" style="text-shadow: 3px 3px 4px #bfbfbf;">Counselor ID</label>
                                <input type="text" class="form-control" id="inputcounselorid" value="{{$client->id}}" name="id" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputFullName" style="text-shadow: 3px 3px 4px #bfbfbf;">Name</label>
                                <input type="text" class="form-control" id="inputFullName" value="{{$client->name}}" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail" style="text-shadow: 3px 3px 4px #bfbfbf;">Email Address</label>
                                <input type="email" class="form-control" id="inputEmail" value="{{$client->email}}"  name="email" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phonenumber" style="text-shadow: 3px 3px 4px #bfbfbf;">Phone Number</label>
                                <input type="text" class="form-control" id="inputPhone" value="{{$client->phonenumber}}"  name="phonenumber" placeholder="Phone Number">
                            </div>
                        </div>
                        <center><button type="submit" class="btn btn-outline-info" style="margin-top:30px;">Save Changes</button><center>
                    </form>
                </div>
                <div style="margin-top:50px;width:70%;" align="left">
                        <h4 style="margin-left:-100px;margin-bottom:30px;color:#848484;font-family: 'Be Vietnam';">
                        @endforeach
                            Change Password
                        </h4>
                    <form class="font-weight-bold" style="color:#0BA9D0; font-size:15px;" method="POST" action="updatecounselorpassword">
                    {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNewPassword" style="text-shadow: 3px 3px 4px #bfbfbf;">New Password</label>
                                <input type="password" class="form-control" id="inputNewPassword" name="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputConfirmNewPassword" style="text-shadow: 3px 3px 4px #bfbfbf;">Confirm New Password</label>
                                <input type="password" class="form-control" id="inputConfirmNewPassword" name="password2">
                            </div>
                        </div>

                        <center><button type="submit" class="btn btn-outline-info" style="margin-top:30px;">Change Password</button><center>
                    </form>
                </div>

                <div style="margin-top:50px;width:70%;" align="left">
                    <h4 style="margin-left:-100px;margin-bottom:30px;color:#848484;font-family: 'Be Vietnam';">Specialization
                    </h4>
                    @foreach($counselor_userprofile as $client)
                    <form class="font-weight-bold" style="color:#0BA9D0; font-size:15px;">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="inputspecialization" style="border:5;background-color:#E1E1E1;text-shadow: 3px 3px 4px #bfbfbf;" value="{{$client->specialization}}" readonly>
                            </div>
                        </div>
                    </form>
                </div>

                <div style="margin-top:px;width:70%;" align="left">
                    <h4 style="margin-left:-100px;margin-bottom:30px;color:#848484;font-family: 'Be Vietnam';">Available Days
                    </h4>
                    <form class="font-weight-bold" style="color:#0BA9D0; font-size:15px;">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="inputdays" style="border:5;background-color:#E1E1E1;text-shadow: 3px 3px 4px #bfbfbf;" value="{{$client->availdays}}" readonly>
                            </div>
                        </div>

                        <center><a href="/counselor_schedule"><button type="button" class="btn btn-outline-info" style="margin-top:30px;">Change your Schedules</button></a><center>
                    </form>
                    @endforeach
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