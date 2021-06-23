<html>

<head>
    <title>You-Counsel</title>
    <!-- LOGO -->
    <link rel="icon" href="photos/LogoBiru-01.png" type="image/x-icon">
    <!-- LOGO -->

    <!-- STYLING -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        <?php include 'CSS/youcounsel.css';
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
        <a class="navbar-brand" href="admin_homepage"><img src="PHOTOS/LogoPutih-01.png" width="60" height="60"
                class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

            </ul>
            <span class="navbar-text" style="color:white;">
                <a href="/adminprofile"><button type="button" class="btn btn-sm btn-outline-light">Profile</button></a>
                <a href="/logout"><button type="button" class="btn btn-sm btn-outline-light">Logout</button></a>
            </span>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!-- TITLE -->
    <div class="content center" style="margin-top:10px; width:100%;">
        <h3 style="color:#7D7E80; text-align: center; font-size: 30px; color:white;"><b>Administrator Page</b></h2>
    </div>
    <!-- TITLE -->

    <!-- CONTENT -->
    <center>
        <div class="row">
            <div class="col-sm-6">
                <div class="card " style="width: 300px;">
                    <img class="card-img-top" src="PHOTOS/search.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center; color:#0788D9;">User Management</h4>
                            <br>
                            <center><a href="admin_user_search_home" style="text-decoration: none;"><button
                                        type="submit" class="btn btn-outline-primary btn-sm btn-block">Go to
                                        User
                                        Management</button></a></center>
                            <br>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card " style="width: 300px;">
                    <img class="card-img-top" src="PHOTOS/list.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align:center; color:#0788D9;">Admin List</h4>
                            <br>
                            <center><a href="/adminlist" style="text-decoration: none;"><button type="submit"
                                        class="btn btn-outline-primary btn-sm btn-block">Go to Admin
                                        Lists</button></a></center>
                    </div>
                </div>
            </div>


        </div>
    </center>

    <!-- CONTENT -->

    <!-- SOCMED -->
    <div class="" align="center" style="letter-spacing: 15px; margin-top:50px;">
        <a href="https://twitter.com/" class="fa fa-twitter fa-3x" style="color: white;"></a>
        <a href="https://facebook.com/" class="fa fa-facebook fa-3x" style="color: white;"></a>
        <a href="https://instagram.com/" class="fa fa-instagram fa-3x" style="color: white;"></a>
        <a href="https://accounts.google.com/" class="fa fa-google fa-3x" style="color: white;"></a>
    </div>
    <!-- SOCMED -->


</body>

</html>
