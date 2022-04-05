@extends('layouts.navbar')

@section('isi')
    <section id="profile">
        <style type="text/css">
        .card {
            border-radius: 10px
        }
        </style>
        <title>Detail Pengasuh | Elderly Caregiver</title>
        <div class="container">
            <center>
                <div class="animate__animated animate__backInDown">
                    <p class="h2" style="margin-top: 10px">Profile</p>
                    <div class="col-md-4 mb-4" style="margin-top: 10px">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4 style="color: black">Usernamenya ini</h4>
                                        <p class="text-muted font-size-sm">Sebagai User/Lansia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0" style="color: black">Nama Lengkap</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0" style="color: black">Tanggal Lahir</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-0" style="color: black">Jenis Kelamin</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">Nomor Telepon</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">Usia</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">KTP</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        <button type="submit" class="btn btn-success"> Download</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr size="4px" width="90%">
            </center>
        </div>
    </section>
@endsection
