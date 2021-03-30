<html>
<head>
    <title>You-Counsel | MyJournal</title>
    <!-- LOGO -->
    <link rel = "icon" href="photos/LogoBiru-01.png" type = "image/x-icon">
    <!-- LOGO -->

    <!-- STYLING -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <style>
    <?php include 'youcounsel.css' ?>

    </style>
   <!-- STYLING -->
    
</head>

<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand" href="clientlandingpage.php"><img src="PHOTOS/LogoPutih-01.png" width="60" height="60" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto"></ul>
            <span class="navbar-text" style="color:white;">
            Hello, <a href="/" style="color:white; font-size:15px;"><u>James</u></a>!
            <button type="button" class="btn btn-sm btn-outline-light">Logout</button>
            </span>
        </div>
        </nav>
    <!-- NAVBAR -->

    <!-- CONTENT -->

    <img src="photos/journal2.jpg"  style= "border-radius: 50%; width:160px;height:150px; margin-left: 47%;margin-bottom: -10%;">
    <div class="card-body center shadow" style="width: 65%; height:105%; background-color:white;text-align:left;margin-left: 20%;margin-top: 80px;">
    <h3 class="card-title" style="text-align:center; color:#0BA9D0;margin-top: 50px;font-family: 'Be Vietnam';">My Journal</h3>
        <div class="card-body">
            <input type="text" readonly class="form-control-plaintext" style="font-family: 'Be Vietnam';font-size: 22px;" id="date" value="<?php echo date('D, d M Y');?>">
            <input type="text" readonly class="form-control-plaintext" style="font-family: 'Be Vietnam';font-size: 22px;" id="time" value= "<?php date_default_timezone_set("Asia/Jakarta");echo date("h:i");?>">

            <p style="font-size:110px;text-align:center;">&#128522;</p>
            <p style="color:#0BA9D0; font-family: 'Be Vietnam';font-size: 40px;text-align:center">Yeay! Glad to hear that, do you mind to tell us about today?</p>
            
        <div class="form-check">
            <textarea class="form-control" id="message" name="message" rows="5" style="border-color: #0BA9D0;"></textarea>
        </div>
        <br>
        <div class="" style="float:right;">
        <a id="tombolnext" href="#" class="next round ">&#8250;</a> 
        </div>
                               
        </form>

        </div>
    </div>

    <!-- CONTENT -->

    <!-- SOCMED -->
    <a href="https://twitter.com/" class="fa fa-twitter fa-3x" style="color: white; margin-left: 45%; margin-bottom: 20px;"></a>
    <a href="https://facebook.com/" class="fa fa-facebook fa-3x" style="color: white; margin-left: 30px;"></a>
    <a href="https://instagram.com/" class="fa fa-instagram fa-3x" style="color: white; margin-left: 30px;"></a>
    <a href="https://accounts.google.com/" class="fa fa-google fa-3x" style="color: white; margin-left: 30px;"></a>
     <!-- SOCMED -->


</body>
</html>