<html>
<head>
    <title>You-Counsel | Login</title>
    <link rel = "icon" href="photos/LogoBiru-01.png" type = "image/x-icon">


    <!-- STYLING -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <style>
    <?php include 'CSS/ucounsel.css'; ?>
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- STYLING -->
</head>

<body>

<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
      <div class="card-body" style="margin-top:600px;">
        <div class="container">
          <div class="row">
            <h1>Already Have an account?</h1>
            <p>A healthy mind signifies a healthy you.</p>
          </div>
          <div class="row">
              <i class="fa fa-twitter mr-3"></i>
              <i class="fa fa-facebook ml-3 mr-3"></i>
              <i class="fa fa-instagram ml-3 mr-3"></i>
              <i class="fa fa-google-plus ml-3 mr-3"></i>
          </div>
        </div>
      </div>

    </div>

    <div class="col-md-8 col-lg-6" style="background-image:  url('PHOTOS/Background.png')">
      <div class="login d-flex align-items-center py-5" >
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back!</h3>
              <form id="contact-form" class="form" action="/postlogin" method="POST" role="form">
                {{csrf_field()}}
                        <div class="form-group">
                          <label class="form-label" for="name">Username</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Username" tabindex="1" required>
                        </div>
                        <div class="form-group">
                          <label class="form-label" for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password" tabindex="7" required>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-start-order">Login Now</button>
                        </div>
                        <p style="color: white; text-align:center;">Don't have an Account? <a style="color:white" href="register.php"><b>Register</b></a></p>
                      </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
