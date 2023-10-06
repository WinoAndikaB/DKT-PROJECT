@extends('layout.master')


<title>
  List Donasi Barang - DOKITA
</title>



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> List Donasi Barang</h4>

                <div class="col-md-6">
                  <form action="{{ url('listDonasiBarang') }}" method="GET">
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
                        <button type="submit" class="btn btn-primary">Filter Donasi Barang</button>
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
                        Nama Barang
                      </th>
                      <th>
                        Foto Barang
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
                      @foreach ($donasibarangs as $donasibarang)
                      <tr>
                        <td>
                          {{$donasibarang['id']}}
                        </td>
                        <td>
                          {{$donasibarang['jenisDonor']}}
                        </td>
                        <td>
                          {{$donasibarang['idJenisDonor']}}
                        </td>
                        <td>
                          {{$donasibarang['donatur']}}
                        </td>
                        <td>
                          {{$donasibarang['created_at']}}
                        </td>
                        <td>
                          {{$donasibarang['namaBarang']}}
                        </td>
                        <td>
                          <img src="{{ asset('donasiBarang/'.$donasibarang->gambar) }}" alt="" style="width: 40px;">
                        </td>
                        <td>
                          {{$donasibarang['pesan']}}
                        </td>
                        <td>
                          {{$donasibarang['email']}}
                        </td>
                        <td>
                          
                          <td>
                            <a href="#" class="btn btn-danger btn-icon btn-round" onclick="showConfirmationModal('{{ route('deleteDonasiBarang', ['id' => $donasibarang['id']]) }}')">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </a>
                        </td>
                        

                        </td>   
                      </tr>
                    </tbody>
                    @endforeach
                    <b>Total Data :</b> {{$donasibarangs->count()}}
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
