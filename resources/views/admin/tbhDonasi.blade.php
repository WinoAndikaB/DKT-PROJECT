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
                        Tanggal
                      </th>
                      <th>
                        Action
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
                          {{$tbhDns['created_at']}}
                        </td>
                        <td>
                          <a href={{"deleteT/".$tbhDns['id']}} class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini?')">Hapus</i></a>
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
          


@endsection


@section('scripts')

@endsection