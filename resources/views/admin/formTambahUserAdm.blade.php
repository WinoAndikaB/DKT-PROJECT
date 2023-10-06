@extends('layout.master')

<title>
  Form Register Admin - DOKITA
</title>


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Form Register Admin</h4> 
              </div>
              <div class="card-body">
                <form class="form" method="put" action="registerAdmin">
                @csrf
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_single-02"></i>
                    </span>
                  </div>
                  <input type="text" name="username" placeholder="Username..." class="form-control" />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_single-02"></i>
                    </span>
                  </div>
                  <input type="text" name="name" placeholder="Name..." class="form-control" />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </span>
                  </div>
                  <input type="email" name="email" value="" class="form-control" placeholder="Email...">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_lock-circle-open"></i>
                    </span>
                  </div>
                  <input type="password" name="password" placeholder="Password..." class="form-control" />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_lock-circle-open"></i>
                    </span>
                  </div>
                  <input type="text" name="alamat" placeholder="Alamat..." class="form-control" />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_lock-circle-open"></i>
                    </span>
                  </div>
                  <input type="text" name="instagram" placeholder="Instagram..." class="form-control" />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_lock-circle-open"></i>
                    </span>
                  </div>
                  <input type="text" name="facebook" placeholder="Facebook..." class="form-control" />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_lock-circle-open"></i>
                    </span>
                  </div>
                  <input type="text" name="aboutme" placeholder="About Me..." class="form-control" />
                </div>
              </div>
              <div class="card-footer text-center">
                <button name="submit" type="submit" class="btn btn-primary">Register</button>
                <a href="/listUserTerdaftar" class="btn btn-info">Kembali</i></a>
              </form>

              </div>
            </div>
          </div>
          


@endsection


@section('scripts')

@endsection