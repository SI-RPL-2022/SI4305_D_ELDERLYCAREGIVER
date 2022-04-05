@extends('layouts.navbar')

@section('isi')
    <section id="editprofile">
        <style type="text/css">
            .col-mt-3 {
                color: black;
            }

            .col-md-12 {
                color: black;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .card {
                border-radius: 10px;
            }

        </style>

        <div class="container">
            <center>
                <div class="animate__animated animate__backInRight">
                    <p class="h2" style="margin-top: 10px">Edit Profile</p>
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="row mt-2">
                                        <div class="col-md-12"><label class="labels">Nama Lengkap</label><input
                                                type="text" class="form-control" placeholder="Nama Lengkap" value="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12"><label class="labels">Nomor
                                                Telepon</label><input type="text" class="form-control"
                                                placeholder="Nomor Telepon" value=""></div>
                                        <div class="col-md-12"><label class="labels">Alamat</label><input
                                                type="text" class="form-control" placeholder="Alamat" value="">
                                        </div>
                                        <div class="col-md-12"><label class="labels">Usia</label><input
                                                type="text" class="form-control" placeholder="Usia" value="">
                                        </div>
                                        <div class="col-md-12"><label class="labels">Email</label><input
                                                type="text" class="form-control" placeholder="Email" value="">
                                        </div>
                                        <div class="col-md-12"><label class="labels">Change Profile
                                                Picture</label><input type="file" class="form-control"
                                                placeholder="Change Profile Picture" value="">
                                        </div>
                                        <div class="col-md-12"><label class="labels">Update CV</label><input
                                                type="file" class="form-control" placeholder="CV" value="">
                                        </div>
                                        <div class="col-md-12"><label class="labels">KTP</label><input
                                                type="file" class="form-control" placeholder="KTP" value="">
                                        </div>
                                        <div class="mt-2 text-center"><button class="btn btn-primary profile-button"
                                                type="button">Save
                                                Profile</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </section>
@endsection
