@extends('layout.master')

<title>
  Tambah Donasi - DOKITA
</title>

<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/5.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- CSS Files -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="../assets/demo/demo.css" rel="stylesheet" />

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Progress Donasi </h4>
        </div>
        <hr>
        <div class="card-body">
          <div class="table-responsive" style="max-height: calc(100vh - 200px); overflow-y: auto;">
            <!-- Ubah nilai 200px sesuai dengan kebutuhan Anda -->
            <div class="row ">
              <div class="container">
                <div class="row">
                  @foreach ($tambahdonases as $katalogDonasi)
                    <div class="col-md-4">
                      <div class="card mb-5">
                        <div class="card-body">
                          <h7 class="text-center">{{$katalogDonasi['id']}}</h7>
                          <h5 class="card-title text-center">{{$katalogDonasi['jenisDonor']}}</h5>
                          <h6 class="card-title text-center">{{$katalogDonasi['namaDonasi']}}</h6>
                          <hr>
                          <div class="progress-container progress-primary">
                            <span class="progress-badge">Progress</span>
                            <div class="progress">
                              @php
                              $nominalDonasi = floatval($katalogDonasi['nominalDonasi']);
                              $targetDonasi = floatval($katalogDonasi['targetDonasi']);
                              $percentage = $targetDonasi > 0 ? ($nominalDonasi / $targetDonasi) * 100 : 0;
                              $formattedPercentage = number_format($percentage);
                              @endphp
                              <div class="progress-bar progress-bar-orange" role="progressbar" style="width: {{ $formattedPercentage }}%;" aria-valuenow="{{ $nominalDonasi }}" aria-valuemin="0" aria-valuemax="{{ $targetDonasi }}"></div>
                              <span class="progress-value">{{ $formattedPercentage }}%</span>
                            </div>
                          </div> 
                          <p class="text-center">Terkumpul: Rp. {{ number_format(floatval($katalogDonasi->nominalDonasi))}} / Rp.
                            {{ number_format(floatval($katalogDonasi->targetDonasi))}}</p>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')

@endsection

