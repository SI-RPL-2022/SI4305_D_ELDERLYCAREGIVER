@extends('layouts.navbar')

@section('isi')

<style type="text/css">
    .nav-item {
        padding-bottom: 10px;
        padding-top: 10px;
    }

    * {
        margin: 0;
        padding: 0;
    }

    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        top: -9999px;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }
</style>

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<title>Welcome | Elderly Caregiver</title>

@can('pelamar')

<div style="top:50%; position:absolute;">
<h1 style="text-align: center"> AKUN ANDA SEDANG DI PERTIMBANGKAN SILAKAN MENUNGGU 2x24 JAM UNTUK MELAKUKAN LOGIN ULANG</h1>

<center>
<form action="/logout" method="POST">
    @csrf
    <button type="submit" class="btn-primary"><h2>keluar</h2></button>
  </form>
</div>
</center>

@else

<section id="tentangkami">
    <center>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="animate__animated animate__backInRight">
                    <p class="h2" style="margin-top: 20px">Welcome to Elderly Caregiver</p>
                    <p>Aplikasi untuk membantu para orang tua atau lansia yang ditinggal sendirian atau kurang mendapat perawatan dengan baik di rumah
                        menggunakan jasa sitter services atau layanan pengasuh dari pekerja aplikasi  Elderly Caregiver ini.
                        Cara kerjanya pengguna memesan layanan pengasuhan untuk orang tua dengan melakukan pendaftaran sebagai user,
                        kemudian memilih jenis perawatan atau pengasuhan lansia sesuai dengan apa yang disediakan di aplikasi Elderly Caregiver.</p>
                        <img src="https://img.freepik.com/free-vector/nursery-home-senior-care-facilities-elderly-disabled-residents-daily-activities-assistance-flat-horizontal-banner-vector-illustration_1284-30808.jpg?t=st=1647958368~exp=1647958968~hmac=aef4471e9d68f17f6932ba8c18f44c63bbad89437153316358d2727b3578f802&w=1060" class="img-fluid" width="600px" height="600px">
                        <hr size="4px" width="100%">
                </div>
            </div>
        </div>
    </center>
</section>

<section id="artikel" class="mb-5">
    <center>
        <div class="animate__animated animate__backInRight">
        <p class="h4" style="margin-top: 10px; margin-bottom: 20px">Artikel Terkini</p>
            <div class="row">
                @foreach ($datas as $key=>$value)
                <div class="col-sm-3">
                    <div class="card text-black bg-light mb-3" style="max-width: 18rem">
                        <img src="{{ asset('gambar_artikel/'.$value->gambar) }}" class="card-img-top" alt="" width="100px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $value->judul }}</h5>
                            <p class="card-text">{{ $value->pengarang }}</p>
                            <a href="{{ $value->link_artikel }}" target="_blank" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center m-3">
            {{ $datas->links() }}
            </div>
        </div>
    </center>
</section>

@can("user")

<section id="daftarpengasuh" class="mb-5">


    <center>
        <hr size="4px" width="85%">
        <p class="h4" style="margin-top: 10px; margin-bottom: 20px">Daftar Pengasuh</p>
    </center>

    <form action="/cari" method="get">
    @csrf
    <div class="input-group flex-nowrap mb-5 ms-4">
        <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg></span>
        <div class="row">
        <input class="col me-2" type="text" class="form-control" placeholder="Cari" aria-label="Cari" name="search" id="search" aria-describedby="addon-wrapping" style="min-width: 10cm" class="col" value="{{ request('search') }}">
        <select class="form-select col" aria-label="Default select example" name="filter" id="filter" {--onchange="location = this.value;"--}>
            <option selected>Filter</option>
            <option value="1" @if (old('filter') == '1') {{ 'selected' }} @endif>Nama</option>
            <option value="2" @if (old('filter') == '2') {{ 'selected' }} @endif>Jenis Kelamin</option>
            <option value="3" @if (old('filter') == '3') {{ 'selected' }} @endif>Usia</option>
        </select>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/lokasi" class="btn btn-primary ms-4"> See Maps <svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path
                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg></a>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" style="display:none;">cari</button>
    </form>


    <center>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            @foreach ($filter as $key=>$value)
            <div class="col-sm-3">
                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                    <img src="{{ asset('storage/' . $value->foto) }}" class="card-img-top" alt="" width="100px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $value->nama }}</h5>
                        
                                <div class="rate">
                                &emsp;&emsp;&ensp;&thinsp;
                                    <input type="radio" id="star5" name="rate" value="5" disabled @if ($value->rating > 4) checked @endif>
                                    <label for="star5" title="Sangat Baik">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" disabled @if ($value->rating < 5) checked @endif>
                                    <label for="star4" title="Baik">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" disabled @if ($value->rating < 4) checked @endif>
                                    <label for="star3" title="Oke">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" disabled @if ($value->rating < 3) checked @endif>
                                    <label for="star2" title="Buruk">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" disabled @if ($value->rating < 2) checked @endif>
                                    <label for="star1" title="Sangat Buruk">1 star</label>
                                </div>

                                <br>
                                <br>

                        <p class="card-text">{{ $value->jenis_kelamin }} <br> {{ $value->no_telp }}</p>
                        <input type="hidden" name="">
                        <a href="/infopengasuh/{{ $value->user_id }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $filter->links() }}
        </div>
    </center>

</section>

@endcan
@endcan
@endsection
