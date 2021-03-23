<html>
<head>
    <title>You-Counsel | MyJournal</title>
    <!-- LOGO -->
    <link rel = "icon" href="photos/logoo.png" type = "image/x-icon">
    <!-- LOGO -->

    <!-- STYLING -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
</head>

<body>
    <!-- CONTENT -->
    <div class="card-body center shadow" style="width: 65%; height:80%; background-color:white;text-align:left;margin-left: 20%;margin-top: 80px;">
        <h4 class="card-title" style="text-align:center; color:#0BA9D0;">My Journal</h4>
        <div class="card-body center" style="width: 60%; background-color:white;"> 
        <form action="myjournal2.php" method="post">
            <div class="form-check">
            <input type="hidden" id="id" name="id">
            <input type="text" readonly class="form-control-plaintext" id="date" value="<?php echo date('D, d M Y');?>">
            <input type="text" readonly class="form-control-plaintext" id="time" value= "<?php date_default_timezone_set("Asia/Jakarta");echo date("h:i");?>">
            <br>
            <label class="form-check-label" for="condition" style="color:#0BA9D0"><h5>How Are You Feeling Today?</h5></label>
            
            <p style="font-size:110px">
            &#128522; &#128577; &#128528;
            </p>

            </div>
            </form>
            
    </div>
           
    <!-- CONTENT -->



</body>
</html>