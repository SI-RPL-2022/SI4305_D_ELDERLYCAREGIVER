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
                                <form method="POST" action="/profile/{{ $user->username }}">
                                    @method('put')
                                    @csrf
                                <div class="row">
                                    <div class="row mt-2">
                                        <div class="col-md-12"><label class="labels">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" value="{{ $user->profile->nama }}">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12"><label class="labels">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="no_telp" value="{{ $user->profile->no_telp }}">
                                        </div>
                                        <div class="col-md-12"><label class="labels">Tempat, Tanggal Lahir</label>
                                            <input type="text" class="form-control" name="ttl" value="{{ $user->profile->ttl }}">
                                        </div>
                                        <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                                        <select type="option" class="form-select" id="jeniskelamin" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin Anda" required>
                                            <option @if($user->profile->jenis_kelamin = "laki-laki") selected @endif>laki-laki</option>
                                            <option @if($user->profile->jenis_kelamin = "perempuan") selected @endif>Perempuan</option>
                                        </select>
                                        <div class="col-md-12"><label class="labels">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" value="{{ $user->profile->alamat }}">
                                        </div>
                                        <div class="col-md-12"><label class="labels">Usia</label>
                                            <input type="text" class="form-control" name="Usia" value="{{ $user->profile->usia }}">
                                        </div>
                                        <div class="col-md-12"><label class="labels">Email</label>
                                            <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-text">Harian, Mingguan, Bulanan</span>
                                            <input type="text" aria-label="Harian" class="form-control">
                                            <input type="text" aria-label="Mingguan" class="form-control">
                                            <input type="text" aria-label="Bulanan" class="form-control">
                                        </div>
                                        <input type="hidden" value="{{ $user->id }}" name="id">
                                        <div class="mt-2 text-center">
                                            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </section>
@endsection
