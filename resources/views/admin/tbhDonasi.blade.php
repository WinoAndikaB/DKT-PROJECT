@extends('layout.master')


<title>
  Tambah Donasi - DOKITA
</title>


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tambah Donasi </h4>

                <a href="/formTambahDonasi" class="btn btn-info">Tambah</i></a>
              

              <div class="col-md-6">
                <form action="{{ url('tbhDonasi') }}" method="GET">
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
                      <button type="submit" class="btn btn-primary">Filter Tambah Donasi</button>
                    </div>
                   </div>
                  </div>
                </form>
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
                        Jenis Donor
                      </th>
                      <th>
                        Foto
                      </th>
                      <th>
                        Nama Donasi
                      </th>
                      <th>
                        Deskripsi 
                      </th>
                      <th>
                        Target Donasi
                      </th>
                      <th>
                        Tanggal
                      </th>
                      <th>
                        
                      </th>
                      <th>
                        
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($tambahdonases as $tbhDns)
                      <tr>
                        <td>
                          {{$tbhDns['id']}}
                        </td>
                        <td>
                          {{$tbhDns['jenisDonor']}}
                        </td>
                        <td>
                          <img src="{{ asset('tambahDonasi/'.$tbhDns->foto) }}" alt="" style="width: 40px;">
                        </td>
                        <td>
                          {{$tbhDns['namaDonasi']}}
                        </td>
                        <td>
                          {{$tbhDns['deskripsi']}}
                        </td>
                        <td>
                          Rp {{ number_format($tbhDns->targetDonasi) }}
                        </td>
                        <td>
                          {{$tbhDns['created_at']}}
                        </td>
                        <td>
                          <a href={{"tampilDataEditTambahDonasi/".$tbhDns['id']}} 
                          class="btn btn-info btn-icon btn-round">
                          <i class="now-ui-icons design-2_ruler-pencil"></i></a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-danger btn-icon btn-round" onclick="showConfirmationModal('{{ route('deleteTambahDonasi', ['id' => $tbhDns['id']]) }}')">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                          </a>
                      </td>        
                      </tr>
                      @endforeach
                    </tbody>
                    <b>Total Data :</b> {{$tambahdonases->count()}}
                  </table>
                </div>
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
