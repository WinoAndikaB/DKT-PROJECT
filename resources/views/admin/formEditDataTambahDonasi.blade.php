@extends('layout.master')

<title>
    Form Tambah Donasi - DOKITA
</title>


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Form Edit Tambah Donasi</h4> 
        </div>
        <div class="card-body">
          <form class="form" action="/updateDataEditTambahDonasi/{{$data->id}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="now-ui-icons shopping_shop"></i>
              </span>
            </div>
            <input type="text" name="jenisDonor" class="form-control" value="{{ $data->jenisDonor }}">
          </div>
          <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="now-ui-icons design-2_ruler-pencil"></i>
              </span>
            </div>
            <input type="text" name="namaDonasi" class="form-control" value="{{ $data->namaDonasi }}">
          </div>
          <div class="input-group no-border input-lg">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="now-ui-icons files_paper"></i>
              </span>
            </div>
            <input type="text" name="deskripsi" class="form-control" value="{{ $data->deskripsi }}">
          </div>

        <div class="input-group no-border input-lg">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="now-ui-icons design_image"></i>
            </span>
          </div>
          <input type="file" class="form-control" name="foto" value="{{ $data->foto }}">
        </div>
   
        <br>
        <img src="{{asset('tambahDonasi/'.$data->foto)}}" height="40%" width="50%" srcset="">
        <br>
      </div>
        <div class="card-footer text-center">
          <button name="submit" type="submit" class="btn btn-primary">Edit</button>
          <a href="/tbhDonasi" class="btn btn-info">Kembali</i></a>
        </form>

        </div>
      </div>
    </div>
    


@endsection


@section('scripts')

@endsection