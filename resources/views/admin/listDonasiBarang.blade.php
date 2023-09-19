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
                        Action
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
                          <a href={{"deleteB/".$donasibarang['id']}} class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini?')">Hapus</i></a>
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