@extends('layout.master')


<title>
  Dashboard - DOKITA
</title>

@section('content')



<!-- Box Of Dashboard -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Data List Donasi</h5>
                <h4 class="card-title">Uang</h4>
              </div>
              <div class="card-body">
                <h3><b>{{$donasiuangs}}</b></h3>
              </div>
              <div class="card-footer">
                <a class="small text-black stretched-link" href="/listDonasiUang">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Donasi</h5>
                <h4 class="card-title">Uang</h4>
              </div>
              <div class="card-body">
                <h3><b>Rp. {{$formattedTotal}}</b></h3>
              </div>
              <div class="card-footer">
                <a class="small text-black stretched-link" href="/listDonasiUang">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Data List Donasi</h5>
                <h4 class="card-title">Barang</h4>
              </div>
              <div class="card-body">
                <h3><b>{{$donasibarangs}}</b></h3>
              </div>
              <div class="card-footer">
                <a class="small text-black stretched-link" href="/listDonasiBarang">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Data List Donasi</h5>
                <h4 class="card-title">Tersedia</h4>
              </div>
              <div class="card-body">
                <h3><b>{{$tambahdonases}}</b></h3>
              </div>
              <div class="card-footer">
                <a class="small text-black stretched-link" href="/tambahDonasi">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">List Pengguna Terdaftar</h5>
                <h4 class="card-title">Admin</h4>
              </div>
              <div class="card-body">
                <h3><b>{{$admin}}</b></h3>
              </div>
              <div class="card-footer">
                <a class="small text-black stretched-link" href="/listUserTerdaftar">View Details</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">List Pengguna Terdaftar</h5>
                <h4 class="card-title">User</h4>
              </div>
              <div class="card-body">
                <h3><b>{{$users}}</b></h3>
              </div>
              <div class="card-footer">
                <a class="small text-black stretched-link" href="/listUserTerdaftar">View Details</a>
              </div>
            </div>
          </div>
        </div>

        

        <!-- Table Below -->
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Welcome, <b>{{Auth::user()->name}} </b> di Admin Panel</h4>
                <p class="category"> Di panel admin ini akan memantau data donasi yang diberikan.</p>

              </div>
            </div>
          </div>

        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Total Donasi Bedasarkan Jenis Donor</h2>
                </div>
                    <div class="container">
                      <div class="row">      
                          <div class="col-md-4 text-center">
                              <div class="card mb-5">
                                  <div class="card-body">
                                      <h5 class="card-title text-center">Gereja</h5>
                                      <hr>
                                      Total Data Donasi Uang<br>
                                      <b>{{$gerejau}}</b>
                                      <br><br>
                                      Total Donasi Uang<br>
                                      <b>Rp. {{$totalGerejaUG}}</b>
                                      <hr>
                                      Total Data Donasi Barang <br>
                                      <b>{{$gerejab}}</b>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-4 text-center">
                            <div class="card mb-5">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Retailer</h5>
                                    <hr>
                                    Total Data Donasi Uang<br>
                                    <b>{{$retaileru}}</b>
                                    <br><br>
                                    Total Donasi Uang<br>
                                    <b>Rp. {{$totalRetailerUR}}</b>
                                    <hr>
                                    Total Data Donasi Barang <br>
                                    <b>{{$retailerb}}</b>
                                </div>
                            </div>
                        </div>
  
                        <div class="col-md-4 text-center">
                          <div class="card mb-5">
                              <div class="card-body">
                                  <h5 class="card-title text-center">Individu</h5>
                                  <hr>
                                  Total Data Donasi Uang<br>
                                  <b>{{$individuu}}</b>
                                  <br><br>
                                  Total Donasi Uang<br>
                                  <b>Rp. {{$totalIndividuUI}}</b>
                                  <hr>
                                  Total Data Donasi Barang <br>
                                  <b>{{$individub}}</b>
                              </div>
                          </div>
                      </div>
  
                      <div class="col-md-4 text-center">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h5 class="card-title text-center">Organisasi</h5>
                                <hr>
                                Total Data Donasi Uang<br>
                                <b>{{$organisasiu}}</b>
                                <br><br>
                                Total Donasi Uang<br>
                                <b>Rp. {{$totalorganisasiUO}}</b>
                                <hr>
                                Total Data Donasi Barang <br>
                                <b>{{$organisasib}}</b>
                            </div>
                        </div>
                    </div>
  
                    <div class="col-md-4 text-center">
                      <div class="card mb-5">
                          <div class="card-body">
                              <h5 class="card-title text-center">Pemerintah</h5>
                              <hr>
                              Total Data Donasi Uang<br>
                              <b>{{$pemerintahu}}</b>
                              <br><br>
                              Total Donasi Uang<br>
                              <b>Rp. {{$totalPemerintahUP}}</b>
                              <hr>
                              Total Data Donasi Barang <br>
                              <b>{{$pemerintahb}}</b>
                          </div>
                      </div>
                  </div>
            </div>

@endsection


@section('scripts')

@endsection