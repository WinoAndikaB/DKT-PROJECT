@extends('layout.master')


<title>
  List Donasi Uang - DOKITA
</title>



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> List Donasi Uang</h4>
                
                <div class="row">
                  <div class="col-md-2">
                  <form action="{{ url('listDonasiUang') }}" method="GET">
                      <div class="form-group">
                        <select name="jenisDonors" class="form-control">
                          <option value="">Filter Jenis Donasi</option>
                          <option value="Gereja">Gereja</option>
                          <option value="Organisasi">Organisasi</option>
                          <option value="Retailer">Retailer</option>
                          <option value="Individu">Individu</option>
                          <option value="Pemerintah">Pemerintah</option>
                        </select>
                      
                      <div class="form-group ml-2">
                        <button type="submit" class="btn btn-primary">Filter Donasi Uang</button>
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
                        ID
                      </th>
                      <th>
                        Jenis Donor
                      </th>
                      <th>
                        ID Donasi Katalog
                      </th>
                      <th>
                        Donatur
                      </th>
                      <th>
                        Tanggal
                      </th>
                      <th>
                        Nominal Donasi
                      </th>
                      <th>
                        Pesan
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($donasiuangs as $donasiuang)
                      <tr>
                        <td>
                          {{$donasiuang['id']}}
                        </td>
                        <td>
                          {{$donasiuang['jenisDonor']}}
                        </td>
                        <td>
                          {{$donasiuang['idJenisDonor']}}
                        </td>
                        <td>
                          {{$donasiuang['donatur']}}
                        </td>
                        <td>
                          {{$donasiuang['created_at']}}
                        </td>
                        <td>
                          Rp {{ number_format(floatval($donasiuang->nominalDonasi)) }}
                        </td>
                        <td>
                          {{$donasiuang['pesan']}}
                        </td>
                        <td>
                          {{$donasiuang['email']}}
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger btn-icon btn-round" onclick="showConfirmationModal('{{ route('deleteDonasiUang', ['id' => $donasiuang['id']]) }}')">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                          </a>
                      </td>
                      </tr>
                      
                      @endforeach
                      
                      <b>Total Data :</b> {{$donasiuangs->count()}}
                      <br>
                      <b>Total Uang :</b> Rp. {{$formattedTotal}}
                      
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
