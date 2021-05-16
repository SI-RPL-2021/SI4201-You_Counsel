<html>
<head>
  <title>You-Counsel | Register</title>
  <link rel = "icon" href="photos/LogoBiru-01.png" type = "image/x-icon">


  <!-- STYLING -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <style>
  <?php include 'CSS/youcounsel2.css'; ?>
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="inijs.js"></script>
  <!-- STYLING -->
</head>

<body>
  <div style=" background-image: url('PHOTOS/RegisterBG.png'); width: 100%; height: auto; background-size: cover;">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
          <div class="card-body" style="margin-top:600px;">
            <div class="container">
              <div class="row">
                <h1>Don't have an account?</h1>
                <p>Sign Up now for get the access to our services. <br>
                  A healthy mind signifies a healthy you.</p>
                </div>
                <div class="row">
                  <a href="https://twitter.com/" class="fa fa-twitter mr-3" style="color: black;"></a>
                  <a href="https://facebook.com/" class="fa fa-facebook ml-3 mr-3" style="color: black;"></a>
                  <a href="https://instagram.com/" class="fa fa-instagram ml-3 mr-3" style="color: black;"></a>
                  <a href="https://accounts.google.com/" class="fa fa-google-plus ml-3 mr-3" style="color: black;"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-lg-5" style="margin-left: auto; background-image: linear-gradient(#2a9ade, #3bc8c9);opacity: 0.8;">
            <div class="login d-flex align-items-center py-5">
              <a style="margin-top: -650;" href="/index"><img src="PHOTOS/backarrow.png" style="width:25px;height:20px;"></a>
              <div class="container">
                <div class="row">
                  <div class="col-md-11 col-lg-10 mx-auto">
                    <h3 class="login-heading mb-4" style="color: #ffffff;">Register</h3>
                    <div>
                      <form id="contact-form" class="form" action="BACKEND/register.php" method="POST" role="form">
                        <div class="form-group">
                          <label style="color:white" class="form-label" for="username">Username</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Username" tabindex="1" required>
                        </div>
                        <div class="form-group">
                          <label style="color:white" class="form-label" for="name">Nama</label>
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" tabindex="2" required>
                        </div>
                        <div class="form-group">
                          <label style="color:white" class="form-label" for="email">E-mail</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" tabindex="3" required>
                        </div>
                        <div class="form-group">
                          <label style="color:white" class="form-label" for="univ">Universitas</label>
                          <input type="text" class="form-control" id="univ" name="univ" placeholder="Universitas" tabindex="4" required>
                        </div>
                        <div class="form-group">
                          <label style="color:white" class="form-label" for="alamat">Alamat</label>
                          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" tabindex="5" required>
                        </div>
                        <div class="form-group">
                          <label style="color:white" class="form-label" for="notelp">No. Telp</label>
                          <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No. Telp" tabindex="6" required>
                        </div>
                        <div class="form-group">
                          <label style="color:white" class="form-label" for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password" tabindex="7" required>
                        </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-start-order">Register Now</button>
                        </div>
                        <p style="color: white; text-align:center;">Already have an account? <a style="color:white" href="login1.php"><b>Log in</b></a></p>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </body>
  </html>
