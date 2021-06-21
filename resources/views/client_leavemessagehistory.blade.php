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
        <a class="navbar-brand" href="clientlandingpage"><img src="PHOTOS/LogoPutih-01.png" width="60" height="60"
                class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="inbox" style="color:white; font-size:15px;"><u>Inbox</u></a>
                </li>
            </ul>
            <span class="navbar-text" style="color:white;">
                <a href="/profile"><button type="button" class="btn btn-sm btn-outline-light">Profile</button></a>
                <a href="/logout"><button type="button" class="btn btn-sm btn-outline-light">Logout</button></a>
            </span>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!-- CONTENT -->
    <div class="content">
        <div class="center" style="width:70%; height:700px;  background-color:white;">
            <img src="PHOTOS/inboxicon.png" alt="journal2" class="iconjournal">

            <h3 class="center" style="color:0788D9; margin-top:10px; color:#0BA9D0;font-family: 'Be Vietnam';">Message
                History</h3>
            <div class="" style="float:left; margin-top:-200px; margin-left:20px; position:static;">
                <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">
                    <a href="/clientlandingpage" style="text-decoration: none; color:#0BA9D0;">
                        <button type="submit" style="width:70px; height:35px; font-size:15px"
                            class="btn btn-outline-info btn-sm btn-block tblbackhome">Back</button>
                    </a>
                </div>
            </div>
            <div class="" style="float:right; margin-top:-200px; margin-right:20px; position:static;">
                <div style="margin-top:10px; color:#0BA9D0; border-color: #0BA9D0">
                <a href="/clientinbox" style="text-decoration: none; color:#0BA9D0;" >
                    <button type="submit" style="width:200px; height:35px; font-size:15px" class="btn btn-outline-info btn-sm btn-block tblbackhome">Message Inbox</button>
                </a>
            </div>
            </div> 

            <!-- Isi Konten -->
            <center>
                <div class="table-responsive" style="width:90%;">

                    <table class="table table-bordered ml-auto mr-auto" style="position:static;width:95%; margin-top:20px;">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col" style="text-align:center; width:5%; color: #069FD7;">No</th>
                            <th scope="col" style="text-align:center; width:10%; color: #069FD7;">Date</th>
                            <th scope="col" style="text-align:center; width:10%; color: #069FD7;">Message ID</th>
                            <th scope="col" style="text-align:center; width:40%; color: #069FD7;">Messages</th>
                            <th scope="col" style="text-align:center; width:5%; color: #069FD7;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($client_leavemessagehistory as $client)
                            <tr>
                            <th scope="row" style="text-align:center;">{{ $no++ }} </th>
                            <td>{{$client->created_at}}</td>
                            <td>{{$client->id}}</td>
                            <td>{{$client->messages}}</td>
                            <td align="center">
                              <a href="{{$client->id}}/clientmessagedelete"><button type="button" class="btn btn-danger" style="width:70px;">Delete</button></a>
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