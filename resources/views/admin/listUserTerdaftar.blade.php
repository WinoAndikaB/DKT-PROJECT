@extends('layout.master')


<title>
  List User Terdaftar - DOKITA
</title>


@section('content')

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="card-title">List User Terdaftar</h4>
                  <div class="text-right">
                    <a href="/formTambahUserAdm" class="btn btn-info">Tambah User Admin</a>
                  </div>
                </div>
                <hr>
              
                <div class="row">
                  <div class="col-md-5">
                    <form action="{{ url('listUserTerdaftar') }}" method="GET" class="form-inline">
                      <div class="form-group">
                        <select name="roles" class="form-control">
                          <option value="">Filter Berdasarkan Role</option>
                          <option value="user">User</option>
                          <option value="admin">Admin</option>
                        </select>
                      </div>
              
                      <div class="form-group ml-2">
                        <button type="submit" class="btn btn-primary">Filter Role</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <hr>
            
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
                          {{$user['username']}}
                        </td>
                        <td>
                          {{$user['email']}}
                        </td>
                        <td>
                          {{$user['role']}}
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger btn-icon btn-round" onclick="showConfirmationModal('{{ route('deleteUserTerdaftar', ['id' => $user['id']]) }}')">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                          </a>
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

<!-- Notifikasi -->

<div id="confirmation-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <p>Apakah Anda yakin ingin menghapus data ini?</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <a id="delete-link" href="#" class="btn btn-danger">Hapus</a>
          </div>
      </div>
  </div>
</div>

<div id="success-notification" class="alert alert-success" style="display: none;">
  Data berhasil dihapus.
</div>

<script>
  function showConfirmationModal(deleteUrl) {
      $('#delete-link').attr('href', deleteUrl);
      $('#confirmation-modal').modal('show');
  }

  // Setelah data berhasil dihapus
  function onDeleteSuccess() {
      $('#confirmation-modal').modal('hide'); // Sembunyikan modal konfirmasi
      $('#success-notification').fadeIn().delay(2000).fadeOut(); // Tampilkan notifikasi berhasil
  }
</script>
