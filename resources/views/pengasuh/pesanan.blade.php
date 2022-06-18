@extends('layouts.navbar')

@section('isi')

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <div class="text-center">
        {{ session('status') }}
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<style type="text/css">
    .nav-item {
        padding-bottom: 10px;
        padding-top: 10px;
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

<title>List Pesanan| Elderly Caregiver</title>
<center>
    <div class="col-sm-10">
        <div style="margin:21px;"></div>
        <div class="col-sm-11 mx-auto">
            <h1 class="pb-3 mb-4 border-bottom">List Pesanan</h1>
            <div class="card">
                <h4>
                    <div class="card-header text-black text-center">Daftar Pesanan</div>
                </h4>
                <div class="card-body">
                    <div style="margin:21px;"></div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-1">No</th>
                                        <th class="col-7 text-center">Nama User</th>
                                        <th class="col-2">Status</th>
                                        <th class="col-2">Action</th>
                                    </tr>
                                </thead>
                                <tr>
                                    @can('pengasuh')
                                    @foreach ($pesanan_pengasuh as $datas)
                                    <th>{{ $loop->iteration }}</th>
                                    <td class="text-center ">{{ $datas->user->profile->nama }}</td>
                                    <td>{{ $datas->status }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#id{{ $datas->id }}">
                                            Lihat
                                        </button>

                                        <!-- Button trigger modal konfirmasi -->


                                        <!-- isi Modal konfirmasi -->
                                        <div class="modal fade" id="id{{ $datas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{-- <center> --}}
                                                        <h5>Detail Lansia</h5>
                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label" for="nama">Nama Lansia</label>
                                                            <div class="col-9 ">
                                                                <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->user->profile->nama }}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label" for="nama">Jenis Kelamin</label>
                                                            <div class="col-9 ">
                                                                <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->user->profile->jenis_kelamin }}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label " for="ttl">Tanggal Lahir</label>
                                                            <div class="col-4  border-end border-dark">
                                                                <input type="text" class="form-control-plaintext " id="ttl" value=": {{ $datas->user->profile->ttl }} " readonly>
                                                            </div>

                                                            <label class=" col-2 col-form-label" for="usia">Usia</label>
                                                            <div class="col-3 ">
                                                                <input type="text" class="form-control-plaintext" id="usia" value=":  {{ $datas->user->profile->usia }}Tahun" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label " for="alamat">Alamat</label>
                                                            <div class="col-9">
                                                                <textarea type="text" class="form-control-plaintext" id="alamat" rows="2" readonly> : {{ $datas->user->profile->alamat }}  </textarea>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label " for="no_telp">No.Telepon</label>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control-plaintext" id="no_telp" rows="2" value=": {{ $datas->user->profile->no_telp }}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label" for="nama">Email</label>
                                                            <div class="col-9 ">
                                                                <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->user->email }}" readonly>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                        <h5>Informasi Tambahan</h5>
                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label" for="nama">Tanggal Kerja</label>
                                                            <div class="col-9 ">
                                                                <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->tanggal }} " readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label" for="nama">Nomor Telpon Darurat</label>
                                                            <div class="col-9 ">
                                                                <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->no_telp_kerabat}}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label" for="nama">Riwayat Penyakit</label>
                                                            <div class="col-9 ">
                                                                <textarea type="text" class="form-control-plaintext" id="nama" readonly>: {{ $datas->penyakit}}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label" for="nama">Catatan</label>
                                                            <div class="col-9 ">
                                                                <textarea type="text" class="form-control-plaintext" id="nama" readonly>: {{ $datas->catatan}}</textarea>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                        <h5>Detail Harga</h5>
                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label" for="nama">Jasa yang Dipilih</label>
                                                            <div class="col-9 ">
                                                                <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->jenis}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <label class=" col-3 col-form-label" for="nama">Total Harga</label>
                                                            <div class="col-9 ">
                                                                <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->harga}}" readonly>
                                                            </div>
                                                        </div>
                                                        {{-- </form> --}}
                                                        {{-- </center> --}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="row">
                                                            <div class="col-7">
                                                                <form action="order/{{$datas->id}}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <input type="hidden" value="Prosess" name="status">
                                                                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Konfirmasi</button>
                                                            </div>
                                                            </form>

                                                            <div class="col-5"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div>
                                                        </div>
                                                    </div>






                                                </div>
                                            </div>
                                        </div>
                                        {{-- modal konfirmasi selesai --}}

                                        <!-- Button trigger modal hapus-->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#batal{{ $datas->id }}">
                                            Tolak
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="batal{{ $datas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Attention!</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda Yakin Ingin Menolak Pesanan?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                                                        <form method="POST" action="order/{{ $datas->id }}">
                                                            @csrf
                                                            @method('put')
                                                            <input type="hidden" value="Ditolak" name="status">
                                                            <button type="submit" class="btn btn-primary">Tolak</button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endcan

                                @can('user')
                                @foreach ($pesanan_user as $datas)
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $datas->pengasuh->profile->nama }}</td>
                                <td>{{ $datas->status }}</td>
                                <td>
                                    <!-- Button trigger modal lihat -->

                                    <!-- Button trigger modal konfirmasi -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#id{{ $datas->id }}">
                                        Lihat
                                    </button>

                                    <!-- isi Modal konfirmasi -->
                                    <div class="modal fade" id="id{{ $datas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{-- <center> --}}
                                                    <h5>Detail Pengasuh</h5>
                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label" for="nama">Nama</label>
                                                        <div class="col-9 ">
                                                            <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->pengasuh->profile->nama }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label " for="ttl">Tanggal Lahir</label>
                                                        <div class="col-4  border-end border-dark">
                                                            <input type="text" class="form-control-plaintext " id="ttl" value=": {{ $datas->pengasuh->profile->ttl }}" readonly>
                                                        </div>

                                                        <label class=" col-2 col-form-label" for="usia">Usia</label>
                                                        <div class="col-3 ">
                                                            <input type="text" class="form-control-plaintext" id="usia" value=": {{ $datas->pengasuh->profile->usia }} Tahun" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label " for="alamat">Alamat</label>
                                                        <div class="col-9">
                                                            <textarea type="text" class="form-control-plaintext" id="alamat" rows="2" readonly> : {{ $datas->pengasuh->profile->alamat}} </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label " for="no_telp">No.Telepon</label>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control-plaintext" id="no_telp" rows="2" value=": {{ $datas->pengasuh->profile->no_telp}}" readonly>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h5>Informasi Tambahan</h5>
                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label" for="nama">Tanggal Pesanan</label>
                                                        <div class="col-9 ">
                                                            <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->tanggal }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label" for="nama">Nomor Telpon Darurat</label>
                                                        <div class="col-9 ">
                                                            <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->no_telp_kerabat }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label" for="nama">Riwayat Penyakit</label>
                                                        <div class="col-9 ">
                                                            <textarea type="text" class="form-control-plaintext" id="nama" readonly>: {{ $datas->penyakit }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label" for="nama">Catatan</label>
                                                        <div class="col-9 ">
                                                            <textarea type="text" class="form-control-plaintext" id="nama" readonly>: {{ $datas->catatan }}</textarea>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <h5>Detail Harga</h5>
                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label" for="nama">Jasa yang Dipilih</label>
                                                        <div class="col-9 ">
                                                            <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->jenis }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <label class=" col-3 col-form-label" for="nama">Total Harga</label>
                                                        <div class="col-9 ">
                                                            <input type="text" class="form-control-plaintext" id="nama" value=": {{ $datas->harga }}" readonly>
                                                        </div>
                                                    </div>
                                                    {{-- </form> --}}
                                                    {{-- </center> --}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal konfirmasi selesai --}}

                                    <!-- Button trigger modal hapus-->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Batal
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Attention!</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda Yakin Ingin Membatalkan Pesanan?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>

                                                    <form method="POST" action="order/{{ $datas->id }}">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" value="" name="id">
                                                        <button type="submit" class="btn btn-primary">Batalkan</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Nilai
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="rate">
                                                        <input type="radio" id="star5" name="rate" value="5" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" id="star4" name="rate" value="4" />
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" name="rate" value="3" />
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" name="rate" value="2" />
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" name="rate" value="1" />
                                                        <label for="star1" title="text">1 star</label>
                                                    </div>
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Comments</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                </tr>
                                @endforeach
                                @endcan


                                <tbody>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
@endsection