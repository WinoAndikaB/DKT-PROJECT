@extends('layout.master')

<title>
    Form Tambah Donasi - DOKITA
</title>


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Form Tambah Donasi</h4> 
          <span>Untuk <b>Target Donasi</b> Penulisannya angkanya tidak menggunakan <b>titik & koma</b></span>
        </div>
        <div class="card-body">
          <form class="form" action="/formTambahDonasi/storeTbhDonasi" method="post" enctype="multipart/form-data">
            @csrf
          <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="now-ui-icons shopping_shop"></i>
              </span>
            </div>
            <input type="text" name="jenisDonor" placeholder="Jenis Donor..." class="form-control" required>
          </div>
          <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="now-ui-icons design_image"></i>
              </span>
            </div>
            <input type="file" class="form-control" name="foto" required>
          </div>
          <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="now-ui-icons design-2_ruler-pencil"></i>
              </span>
            </div>
            <input type="text" name="namaDonasi" value="" class="form-control" placeholder="Nama Donasi..." required>
          </div>
          <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="now-ui-icons files_paper"></i>
              </span>
            </div>
            <input type="text" name="deskripsi" placeholder="Deskripsi..." class="form-control" required>
          </div>
          <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="now-ui-icons files_paper"></i>
              </span>
            </div>
            <input type="text" name="targetDonasi" placeholder="Target Donasi..." class="form-control" required>
          </div>
          <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="now-ui-icons files_paper"></i>
              </span>
            </div>
            <input type="text" name="nominalDonasi" placeholder="Nominal Donasi..." class="form-control" required>
          </div>
        </div>
        <div class="card-footer text-center">
          <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
          <a href="/tbhDonasi" class="btn btn-info">Kembali</i></a>
        </form>

        </div>
      </div>
    </div>
    


@endsection


@section('scripts')

@endsection