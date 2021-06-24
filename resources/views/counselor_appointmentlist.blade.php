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
        <div class="center" style="width:90%; height:auto;  background-color:white;">
            <img src="PHOTOS/inboxicon.png" alt="journal2" class="iconjournal">

            <h3 class="center" style="color:0788D9; margin-top:10px; color:#0BA9D0;font-family: 'Be Vietnam';">Appointment
            </h3>
            <div class="" style="float:left; margin-top:-200px; margin-left:20px; position:static;">
                <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">

                </div>
            </div>

            <div class="" style="float:left; margin-top:-200px; margin-left:20px; position:static;">
                <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">
                    <a href="/counselor_homepage" style="text-decoration: none; color:#0BA9D0;">
                        <button type="submit" style="width:70px; height:35px; font-size:15px"
                            class="btn btn-outline-info btn-sm btn-block tblbackhome">Back</button>
                    </a>
                </div>
            </div>


            <!-- Isi Konten -->


            <center>
                <div>
                    <p style="color:#0BA9D0; font-family: 'Be Vietnam';font-size: 40px; margin-top:-80px;">Appointment History</p>
                </div>
            </center>

            <center>
                <div class="" style="width:90%;">
                    <table class="table table-hover">
                        <thead style="background-color:#F2F2F2; color:#069ED7;">
                            <tr>
                                <th scope="col" style=" text-align:center;">No</th>
                                <th scope="col" style=" text-align:center;">Schedule ID</th>
                                <th scope="col" style="text-align:center;">Date</th>
                                <th scope="col" style=" text-align:center;">Client ID</th>
                                <th scope="col" style=" text-align:center;">Client Name</th>
                                <th scope="col" style=" text-align:center;">Type</th>
                                <th scope="col" style=" text-align:center;">Method</th>
                                <th scope="col" style=" text-align:center;">Reason</th>
                                <th scope="col" style=" text-align:center;">Action</th>

                            </tr>
                        </thead>
                        <tbody >
                        @php $no = 1; @endphp
                        @foreach($counselor_appointmentlist as $client)
                            <tr>
                                <td scope="row" style="text-align:center;"> {{ $no++ }}</td>
                                <td align="center">{{$client->id}}</td>
                                <td align="center">{{$client->requesteddate}}</td>
                                <td align="center">{{$client->clientid}}</td>
                                <td align="center">{{$client->clientname}}</td>
                                <td align="center">{{$client->type}}</td>
                                <td align="center">{{$client->method}}</td>
                                <td align="center">{{$client->reason}}</td>
                                <td align="center">
                                    <a href="{{$client->id}}/appointmentreply" button type="button" class="btn btn-success" style="width:70px;">Reply</button>
                                    <a href="{{$client->id}}/appointmentdelete" button type="button" class="btn btn-danger" style="width:70px;">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </center>
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