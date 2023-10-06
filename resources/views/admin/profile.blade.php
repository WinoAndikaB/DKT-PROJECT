@extends('layout.master')


<title>
  Profile - DOKITA
</title>


@section('content')

<div class="row">
  <div class="col-md-8">
      <div class="card">
          <div class="card-header">
              <h5 class="title">Edit Profile</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('profile.update', ['id' => Auth::user()->id]) }}">
              @csrf
              @method('PUT')
                    <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" disabled="" name="role" value="{{ Auth::user()->role }}">
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" disabled="" name="username" value="{{ Auth::user()->username }}">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" disabled="" name="email" value="{{ Auth::user()->email }}">
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ Auth::user()->alamat }}">
                    </div>

                    <div class="form-group">
                      <label>Instagram</label>
                      <input type="text" class="form-control" name="instagram" value="{{ Auth::user()->instagram }}" pattern="https?://(www\.)?instagram\.com/.+">
                  </div>
                  
                  <div class="form-group">
                      <label>Facebook</label>
                      <input type="text" class="form-control" name="facebook" value="{{ Auth::user()->facebook }}" pattern="https?://(www\.)?facebook\.com/.+">
                  </div>                  

                    <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="4" class="form-control" name="about">{{ Auth::user()->about }}</textarea>
                    </div>

                      <button type="submit" class="btn btn-primary">Save Changes</button>
                      <a href="/dashboard" class="btn btn-info">Kembali</a>
                      </form>
                  </div>
              </div>
          </div>

            <div class="col-md-4">
              <div class="card card-user">
                <div class="image">
                  <img src="../assets/img/bg5.jpg" alt="...">
                </div>
                <div class="card-body">
                  <div class="author">
                    <a href="#">
                      <img class="avatar border-gray" src="../assets/img/eva.jpg" alt="...">
                      <h5 class="title">{{Auth::user()->name}}</h5>
                    </a>
                    <p class="description">
                      {{Auth::user()->username}}
                    </p>
                  </div>
                  <p class="description text-center">
                    {{Auth::user()->about}}
                  </p>
                </div>
                <hr>
                <div class="button-container">
                  <a href="{{Auth::user()->facebook}}" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="{{Auth::user()->instagram}}" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          


@endsection


@section('scripts')

@endsection