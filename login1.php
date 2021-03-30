<html>
<head>
    <title>You-Counsel | Login</title>
   

    <!-- STYLING -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <style>
    <?php include 'ucounsel.css'; ?>
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
            <p>You-counsel adalah web yang membantu anda bisa terhubung dengan counselor terbaik.</p>
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
    
    <div class="col-md-8 col-lg-6" style="background-image:  url('images/Background.png')">
      <div class="login d-flex align-items-center py-5" >
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back!</h3>
              <form>
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                <div class="text-center">
                  <a class="small" href="#">Forgot password?</a></div>
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