@extends('layouts.navbar')

@section('isi')
    <section id="profile">
        <style type="text/css">
        .card {
            border-radius: 10px
        }
        </style>
        <title>Home Pengasuh | Elderly Caregiver</title>
        <div class="container">
            <center>
                <div class="animate__animated animate__backInRight">
                    <p class="h2" style="margin-top: 10px">Profile</p>
                    <div class="col-md-4 mb-4" style="margin-top: 10px">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150">
                                    <div class="col-sm-15">
                                        <a class="btn btn-success " target="__blank" style="margin-top: 20px">Change Profile
                                            Picture</a>
                                    </div>
                                    <div class="mt-3">
                                        <h4 style="color: black">Ucok</h4>
                                        <p class="text-muted font-size-sm">Bandung CA</p>
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
                                        Ucok
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0" style="color: black">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        ucok@gmail
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-0" style="color: black">Nomor Telepon</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        085300338899
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-0">Usia</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        19
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        Jl. Telekomunikasi
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-15">
                                        <a class="btn btn-success " target="__blank">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr size="4px" width="90%">
            </center>
        </div>
    </section>
    <section id="daftarlansia">
        <style type="text/css">
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th {
                border: 1px solid #ffffff;
                text-align: center;
                padding: 10px;
                color: #ffffff;
                background-color: #22577A
            }

            td {
                color: #ffffff;
                border: 1px solid #ffffff;
                text-align: center;
                padding: 8px;
            }

        </style>
        <div class="containter">
            <div class="animate__animated animate__backInRight">
                <center>
                    <p class="h3" style="margin-top: 10px;">Daftar Lansia</p>
                    <table class="col-md-11 mb-11 text-center">
                        <tr>
                            <th>Nama Lansia</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Terverifikasi</td>
                            <td> <a class="btn btn-success " target="__blank">Detail</a> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Selesai</td>
                            <td><a class="btn btn-success center" target="__blank">Detail</a> </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </section>
@endsection
