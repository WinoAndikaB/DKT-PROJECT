<style>
  /* CSS untuk efek fade in dan fade out */
  .fade-in {
      animation: fadeIn 1s ease-in-out forwards;
      display: none;
  }

  .fade-out {
      animation: fadeOut 1s ease-in-out forwards;
  }

  @keyframes fadeIn {
      from {
          opacity: 0;
      }
      to {
          opacity: 1;
      }
  }

  @keyframes fadeOut {
      from {
          opacity: 1;
      }
      to {
          opacity: 0;
      }
  }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/5.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    katalog Donasi - DOKITA
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
</head>

<body class="landing-page sidebar-collapse">
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
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Created by DOKITA Team. Template by Creative Tim" data-placement="bottom" target="_blank">
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
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" data-placement="bottom" href="/profileUser" target="_blank">
              <i>Profil Anda</i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="now-ui-icons users_single-02"></i>
              <p>
                <span class="d-lg-none d-md-block">Some Actions</span>
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/profileUser">{{ Auth::user()->username }}</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Keluar</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg6.jpg');">
      </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Katalog Donasi</h1>
          <div class="text-center">
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-google-plus"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr>

    <div class="container">

       <!-- Welcome Notification -->
        <div id="alertContainer">
          <div id="alertMessage" class="alert alert-primary alert-dismissible" role="alert" style="opacity: 0; display: none; transition: opacity 0.5s ease-in-out;">
            <div style="text-align: center;">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <strong>Welcome, {{ Auth::user()->name }}!</strong> You have successfully logged in.
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>

            <div class="text-center content-center">
              <form action="{{ url('user') }}" method="GET">
                <div class="row">
                  <div class="form-group">
                    <select name="jenisDonors" class="form-control">
                      <option value="">Filter Jenis Donasi</option>
                      <option value="Gereja">Gereja</option>
                      <option value="Organisasi">Organisasi</option>
                      <option value="Retailer">Retailer</option>
                      <option value="Individu">Individu</option>
                      <option value="Pemerintah">Pemerintah</option>
                    </select>
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Filter Donasi</button>
                  </div>
                </div>
                </div>
              </form>
            </div>

            <div class="row ">
                    <div class="container">
                        <div class="row">
                          @foreach ($tambahdonases as $katalogDonasi)
                            <div class="col-md-4">
                                <div class="card mb-5">
                                    <img class="card-img-top" src="{{ asset('tambahDonasi/'.$katalogDonasi->foto) }}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{$katalogDonasi['jenisDonor']}}</h5>
                                        <h6 class="card-title text-center">{{$katalogDonasi['namaDonasi']}}</h6>
                                        <p class="text-center">{{$katalogDonasi['deskripsi']}}</p>
                                        <hr>
                                        <h6 class="text-center">Target Donasi:</p>
                                        <p class="text-center">Rp {{ number_format($katalogDonasi->targetDonasi) }}</p>
                                        <hr>
                                        <div class="progress-container progress-primary">
                                          <span class="progress-badge">Progress</span>
                                          <div class="progress">
                                            @php
                                            $nominalDonasi = floatval($katalogDonasi['nominalDonasi']);
                                            $targetDonasi = floatval($katalogDonasi['targetDonasi']);
                                            $percentage = $targetDonasi > 0 ? ($nominalDonasi / $targetDonasi) * 100 : 0;
                                            $formattedPercentage = number_format($percentage);
                                            @endphp
                                            <div class="progress-bar progress-bar-orange" role="progressbar" style="width: {{ $formattedPercentage }}%;" aria-valuenow="{{ $nominalDonasi }}" aria-valuemin="0" aria-valuemax="{{ $targetDonasi }}"></div>
                                            <span class="progress-value">{{ $formattedPercentage }}%</span>
                                          </div>
                                        </div>                                                                   
                                            <p class="text-center">Terkumpul: Rp. {{ number_format(floatval($katalogDonasi->nominalDonasi))}} / Rp. {{ number_format(floatval($katalogDonasi->targetDonasi))}}</p>
                                        <hr>
                                        <p class="text-center">{{$katalogDonasi['created_at']}}</p>
                                        <a href="/formInputUang/{{ $katalogDonasi->id}}" class="btn btn-primary">
                                          <i class="now-ui-icons business_money-coins"></i>
                                          Donasi Uang</a>
                                        <a href="/formInputBarang/{{ $katalogDonasi->id}}" class="btn btn-primary">
                                        <i class="now-ui-icons shopping_box"></i>
                                          Donasi Barang</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
          <a href="/profile" target="_blank">DOKITA Team</a>. Template by
          <a href="https://www.creative-tim.com/product/now-ui-dashboard" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>

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

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin keluar dari akun Anda?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
  

</body>

</html>

<script>
  // Fungsi untuk menampilkan notifikasi dengan efek fade in
  function fadeIn(element) {
    element.style.display = 'block';
    setTimeout(function() {
      element.style.opacity = 1;
    }, 10); // Setelah menampilkan element, atur opacity ke 1 dengan jeda 10 milidetik
  }

  // Fungsi untuk menghilangkan notifikasi dengan efek fade out
  function fadeOut(element) {
    element.style.opacity = 0;
    setTimeout(function() {
      element.style.display = 'none';
    }, 500); // Menghilangkan notifikasi setelah 0.5 detik (500 milidetik) dengan efek fade out
  }

  // Fungsi untuk menampilkan dan menghilangkan notifikasi dengan efek fade
  function showNotification() {
    var alertMessage = document.getElementById('alertMessage');
    fadeIn(alertMessage);

    // Menghilangkan notifikasi setelah beberapa detik dengan efek fade out
    setTimeout(function() {
      fadeOut(alertMessage);
    }, 5000); // Menghilangkan notifikasi setelah 5 detik (5000 milidetik)
  }

  // Panggil fungsi untuk menampilkan notifikasi
  showNotification();
</script>

  