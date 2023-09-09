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
                
                <div class="col-md-6">
                  <form action="{{ url('listDonasiUang') }}" method="GET">
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
                        <button type="submit" class="btn btn-primary">Filter Donasi Uang</button>
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
                        Action
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
                          {{$donasiuang['donatur']}}
                        </td>
                        <td>
                          {{$donasiuang['created_at']}}
                        </td>
                        <td>
                          {{$donasiuang['nominalDonasi']}}
                        </td>
                        <td>
                          {{$donasiuang['pesan']}}
                        </td>
                        <td>
                          {{$donasiuang['email']}}
                        </td>
                        <td>
                          <a href={{"deleteU/".$donasiuang['id']}} class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini?')">Hapus</i></a>
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