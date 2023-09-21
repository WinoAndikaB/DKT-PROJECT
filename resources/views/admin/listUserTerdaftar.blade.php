@extends('layout.master')


<title>
  List User Terdaftar - DOKITA
</title>


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> List User Terdaftar</h4>
                <a href="/formTambahUserAdm" class="btn btn-info">Tambah User Admin</i></a>

               <div class="col-md-6">
                <form action="{{ url('listUserTerdaftar') }}" method="GET">
                  <div class="row">
                    <div class="form-group">
                      <select name="roles" class="form-control">
                        <option value="">Filter Berdasarkan Role</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                      </select>
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Filter Role</button>
                    </div>
                  </div>
                  </div>
                </form>
              </div>

               <hr>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        #
                      </th>
                      <th>
                        Nama User
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Role
                      </th>
                      <th>
                        
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td>
                          {{$user['id']}}
                        </td>
                        <td>
                          {{$user['name']}}
                        </td>
                        <td>
                          {{$user['email']}}
                        </td>
                        <td>
                          {{$user['role']}}
                        </td>
                        <td>
                          <a href={{"delete/".$user['id']}}
                          class="btn btn-danger btn-icon btn-round" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini?')">
                          <i class="now-ui-icons ui-1_simple-remove"></i></a>
                        </td>        
                      </tr>
                      @endforeach
                      <b>Total Data :</b> {{$users->count()}}
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
          


@endsection


@section('scripts')

@endsection