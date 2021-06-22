<html>

<head>
    <title>You-Counsel | MyJournal</title>
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

        border-radius:

        20px;

        margin-left:

        7%;

        margin-top:-70px;

        padding-top:30px;

        padding-right:30px;

        padding-left:30px;

        width:40%;

        height:620px;

        border:2px

        solid

        #0BA9D0;

        }

        .h3

        {

        font-family:

        Be

        Vietnam;

        text-align:

        center;

        color:#0788D9;

        font-size:

        30px;

        text-shadow:

        0px

        4px

        4px

        rgba(0,

        0,

        0,

        0.25);

        margin-top:-20px;

        }






    </style>
    <!-- STYLING -->
</head>

<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="admin_homepage"><img src="/PHOTOS/LogoPutih-01.png" width="60" height="60"
                class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                
            </ul>
            <span class="navbar-text" style="color:white;">
                <a href="/profile"><button type="button" class="btn btn-sm btn-outline-light">Profile</button></a>
                <a href="/logout"><button type="button" class="btn btn-sm btn-outline-light">Logout</button></a>
            </span>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!-- CONTENT -->
    <div class="center" style="width:80%; height:820px;  background-color:white;">
        <img src="/PHOTOS/search.jpg" alt="journal2" class="iconjournal">
        <h3 class="center" style="margin-top:10px; color:#0788D9;font-family: 'Be Vietnam';font-size: 20px;">User
            Management
        </h3>


        <div class="" style="float:left; margin-top:-200px; margin-left:20px; position:static;">
            <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">
                <a href="admin_homepage" style="text-decoration: none; color:#0BA9D0;">
                    <button type="submit" style="width:70px; height:35px; font-size:15px"
                        class="btn btn-outline-info btn-sm btn-block tblbackhome">Back</button>
                </a>
            </div>
        </div>


        <!-- Isi Konten -->
        <!-- FORM -->

        <div class="row">
            <div class="box">
                <div class="h3">Add User</div>
                <form style="color:#0BA9D0;font-family: 'Be Vietnam';font-size:15px;" align="left" action="/admincreate" method="POST">
                {{csrf_field()}}
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-md"
                            style="margin-top:10px; ">Username</label>
                        <input class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Username"
                            name="username"></input>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-md"
                            style="margin-top:-20px;">Name</label>
                        <input class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Name"
                            name="name"></input>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-md"
                            style="margin-top:-20px;">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlTextarea1"
                            placeholder="Enter Email" name="email"></input>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-md"
                            style="margin-top:-20px;">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlTextarea1"
                            placeholder="Enter Password" name="password"></input>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-6 col-form-label col-form-label-md"
                            style="margin-top:-20px;">Phone Number</label>
                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                            placeholder="Enter Phone Number" name="phonenumber"></input>
                    </div>
                    <fieldset class="form-group row">
                        <legend class="col-form-label col-sm-2 float-sm-left pt-0">Roles</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="access" id="gridRadios1"
                                    value="1">
                                <label class="form-check-label" for="gridRadios1">
                                    Role 1 - Administrator
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="access" id="gridRadios2"
                                    value="2">
                                <label class="form-check-label" for="gridRadios2">
                                    Role 2 - Counselor
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="wrap">
                        <button class="tblclose" style="margin-right:10px;">Add User</button>
                    </div>
                </form>
            </div>

            <div class="box">
                <div class="h3">User Search</div>
                <form style="color:#0BA9D0;font-family: 'Be Vietnam';font-size:20px;" align="left" method="get" action="searchbyid">
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md"
                            style="margin-top:60px; text-align:center; ">Search By ID</label>
                        <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Enter ID"
                            name="userid"></input>
                    </div>
                    <div class="wrap">
                        <button class="tblclose" style="margin-top:-30px; width:50%;">Search by ID</button>
                    </div>
                </form>
                <form style="color:#0BA9D0;font-family: 'Be Vietnam';font-size:20px;" align="left" method="get" action="searchbyusername">
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-12 col-form-label col-form-label-md"
                            style="margin-top:40px; text-align:center; ">Search by Username</label>
                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                            placeholder="Enter Username" name="username"></input>
                    </div>
                    <div class="wrap">
                        <button class="tblclose" style="margin-top:-30px; width:70%;">Search by Username</button>
                    </div>
                </form>
            </div>
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

</html>
