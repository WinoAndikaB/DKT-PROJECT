<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/5.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Register - DOKITA
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Dropdown header</a>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">One more separated link</a>
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="" rel="tooltip" title="Created by DOKITA Team. Template by Creative Tim" data-placement="bottom" target="_blank">
          DOKITA
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="post" action="registerUser">
              @csrf
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label style="color: white;"><strong>Username</strong></label>
                        <input type="text" class="form-control" name="username" placeholder="Username Anda..." required>
                      </div>
                    </div>
                    <div class="col-md-8 pl-1">
                      <div class="form-group">
                        <label style="color: white;"><strong>Email</strong></label>
                        <input type="email" class="form-control" name="email" placeholder="Email Anda..." required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pl-1">
                      <div class="form-group">
                        <label style="color: white;"><strong>Nama</strong></label>
                        <input type="text" class="form-control" name="name" placeholder="Nama Anda..." required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pl-1">
                      <div class="form-group">
                        <label style="color: white;"><strong>Password</strong></label>
                        <input type="text" class="form-control" name="password" placeholder="Password Anda..." required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pl-1">
                      <div class="form-group">
                        <label style="color: white;"><strong>Alamat</strong></label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Anda..." required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label style="color: white;"><strong>Instagram</strong></label>
                        <input type="text" class="form-control" name="instagram" placeholder="Instagram Anda..." required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label style="color: white;"><strong>Facebook</strong></label>
                        <input type="text" class="form-control" name="facebook" placeholder="Facebook Anda..." required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pl-1">
                      <div class="form-group">
                        <label style="color: white;"><strong>About Me</strong></label>
                        <textarea rows="4" cols="80" class="form-control" name="aboutme" placeholder="Tentang Anda..." required></textarea>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer text-center">
                <button name="submit" type="submit" class="btn btn-primary btn-round btn-lg btn-block">Register</button>
                  <div class="pull-left">
                      <h6>
                        <a class="link">Sudah Register?</a>
                      </h6>
                      </div>
                        <div class="pull-right">
                          <h6>
                            <a href="/login" class="link">Login!</a>
                          </h6>
                        </div>
                        <hr>
                      </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    <footer class="footer">
    <div class=" container ">
    <div class="copyright" id="copyright">
    &copy;
    <script>
    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
    </script>, Created by
    <a href="" target="_blank">DOKITA Team</a>. Template by
    <a href="https://www.creative-tim.com/product/now-ui-dashboard" target="_blank">Creative Tim</a>.
    </div>
    </div>
    </footer>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>