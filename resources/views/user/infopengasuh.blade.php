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
                                    {{-- <img src="{{ asset('storage/' . $user->profile->foto) }}" alt="Admin"
                                        class="rounded-circle" width="150"> --}}
                                    <div class="mt-3">
                                        <h4 style="color: black">Nama</h4>
                                        <p class="text-muted font-size-sm">Sebagai</p>
                                    </div>
                                    {{-- @if($user->profile->cv) --}}
                                    <div>
                                        <p class="text-muted font-size-sm">Rating</p>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                      </svg>
                                    </div>
                                    {{-- @endif --}}
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
                                        {{-- {{ $user->profile->nama }} --}}

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0" style="color: black">Tanggal Lahir</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{-- {{ $user->profile->ttl }} --}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-0" style="color: black">Jenis Kelamin</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{-- {{ $user->profile->jenis_kelamin }} --}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{-- {{ $user->profile->alamat }} --}}
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="/lokasi" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                              </svg></a>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">Nomor Telepon</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{-- {{ $user->profile->no_telp }} --}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">Usia</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{-- {{ $user->profile->usia }} --}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{-- {{ $user->email }} --}}
                                    </div>
                                </div>
                                <hr>

                            <form action="/download" method="post" enctype="">
                                @csrf
                                {{-- <input type="hidden" value="{{ $user->profile->ktp }}" name="cv"> --}}
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">KTP</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        <button type="submit" class="btn btn-success"> Download</button>
                                    </div>
                                </div>
                            </form>
                                <hr>

                                {{-- @if($user->profile->cv) --}}
                                <form action="/download" method="post" enctype="">
                                    @csrf
                                    {{-- <input type="hidden" value="{{ $user->profile->cv }}" name="cv"> --}}
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">CV</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        <button type="submit" class="btn btn-success"> Download</button>
                                    </div>
                                </div>
                            </form>
                            {{-- @endif --}}

                            </div>
                        </div>
                    </div>
                    <hr size="4px" width="90%">
                    <p class="h2" style="margin-top: 10px">Jasa yang ditawarkan</p>
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                    </div>
            </center>
        </div>
    </section>
@endsection
