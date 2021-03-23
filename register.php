<html>
<head>
    <title>You-Counsel</title>
    <!-- LOGO -->
    <link rel = "icon" href="photos/logoblue.png" type = "image/x-icon">
    <!-- LOGO -->

    <!-- STYLING -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    <?php include 'youcounsel.css'; ?>
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- STYLING -->
</head>

<body>

    <!-- REGISTER FORM -->
    <div class="card-body center shadow" style="width: 500px; background-color:#06B2D8;">
        <h4 class="card-title" style="text-align:center; color:white;">Register</h4>
        <br>
        <div class="card-body center" style="width: 350px; background-color:#06B2D8;">
            <form action="" method="post">
                <div class="form-group">
                    <label for="username" style="font-size:15px;">Name</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="textHelp" placeholder="Enter Name">
                    
                </div>
                <div class="form-group">
                    <label for="email" style="font-size:15px;">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="textHelp" placeholder="Enter Email">
                    
                </div>
                <div class="form-group">
                    <label for="password" style="font-size:15px;">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                </div>
                
                <br>
                <button type="submit" class="btn btn-outline-danger">Register Now</button>
            </form>
        </div>
    <!-- REGISTER FORM -->

</body>
</html>