@extends('layouts.navbar')

@section('isi')

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

    <div class="input-group flex-nowrap mb-3">
        <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg></span>
        <div class="row">
        <input class="col" type="text" class="form-control" placeholder="Cari" aria-label="Cari" aria-describedby="addon-wrapping" style="min-width: 10cm" class="col">
        <select class="form-select col" aria-label="Default select example">
            <option selected>Filter</option>
            <option value="1">Rating</option>
            <option value="2">Jasa</option>
            <option value="3">Jenis Kelamin</option>
            <option value="4">Usia</option>
            <option value="5">Jarak</option>
        </select>
        </div>
    </div>


    <center>
        <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col-sm-3">
                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                    <img src="https://cdn1-production-images-kly.akamaized.net/AKxv0rT9tdYBU1YyJ5ir6EyEXhk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3080529/original/071137600_1584593443-WhatsApp_Image_2020-03-19_at_09.57.07.jpeg" class="card-img-top" alt="" width="100px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pengasuh</h5>
                        <p class="card-text">Deskripsi pribadi pengasuh</p>
                        <a href=" " class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                    <img src="https://cdn1-production-images-kly.akamaized.net/AKxv0rT9tdYBU1YyJ5ir6EyEXhk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3080529/original/071137600_1584593443-WhatsApp_Image_2020-03-19_at_09.57.07.jpeg" class="card-img-top" alt="" width="100px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pengasuh</h5>
                        <p class="card-text">Deskripsi pribadi pengasuh</p>
                        <a href="" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                    <img src="https://cdn1-production-images-kly.akamaized.net/AKxv0rT9tdYBU1YyJ5ir6EyEXhk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3080529/original/071137600_1584593443-WhatsApp_Image_2020-03-19_at_09.57.07.jpeg" class="card-img-top" alt="" width="100px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pengasuh</h5>
                        <p class="card-text">Deskripsi pribadi pengasuh</p>
                        <a href="" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                    <img src="https://cdn1-production-images-kly.akamaized.net/AKxv0rT9tdYBU1YyJ5ir6EyEXhk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3080529/original/071137600_1584593443-WhatsApp_Image_2020-03-19_at_09.57.07.jpeg" class="card-img-top" alt="" width="100px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pengasuh</h5>
                        <p class="card-text">Deskripsi pribadi pengasuh</p>
                        <a href="" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                    <img src="https://cdn1-production-images-kly.akamaized.net/AKxv0rT9tdYBU1YyJ5ir6EyEXhk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3080529/original/071137600_1584593443-WhatsApp_Image_2020-03-19_at_09.57.07.jpeg" class="card-img-top" alt="" width="100px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pengasuh</h5>
                        <p class="card-text">Deskripsi pribadi pengasuh</p>
                        <a href="" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                    <img src="https://cdn1-production-images-kly.akamaized.net/AKxv0rT9tdYBU1YyJ5ir6EyEXhk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3080529/original/071137600_1584593443-WhatsApp_Image_2020-03-19_at_09.57.07.jpeg" class="card-img-top" alt="" width="100px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pengasuh</h5>
                        <p class="card-text">Deskripsi pribadi pengasuh</p>
                        <a href=" "class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div><div class="col-sm-3">
                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                    <img src="https://cdn1-production-images-kly.akamaized.net/AKxv0rT9tdYBU1YyJ5ir6EyEXhk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3080529/original/071137600_1584593443-WhatsApp_Image_2020-03-19_at_09.57.07.jpeg" class="card-img-top" alt="" width="100px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pengasuh</h5>
                        <p class="card-text">Deskripsi pribadi pengasuh.</p>
                        <a href="" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                    <img src="https://cdn1-production-images-kly.akamaized.net/AKxv0rT9tdYBU1YyJ5ir6EyEXhk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3080529/original/071137600_1584593443-WhatsApp_Image_2020-03-19_at_09.57.07.jpeg" class="card-img-top" alt="" width="100px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Nama Pengasuh</h5>
                        <p class="card-text">Deskripsi pribadi pengasuh</p>
                        <a href="" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
    </center>

</section>

@endcan
@endcan
@endsection
