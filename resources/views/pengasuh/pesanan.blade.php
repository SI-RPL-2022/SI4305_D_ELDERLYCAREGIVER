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
    .nav-item{
        padding-bottom: 10px;
        padding-top: 10px;
    }

</style>

<title>List Pesanan| Elderly Caregiver</title>
<center>
    <div class="col-sm-10">
        <div style="margin:21px;"></div>
        <div class="col-sm-11 mx-auto">
            <h1 class="pb-3 mb-4 border-bottom">List Pesanan</h1>
            <div class="card">
                <h4><div class="card-header text-black text-center">Daftar Pesanan</div></h4>
                <div class="card-body">
                    <div style="margin:21px;"></div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-1">No</th>
                                        <th class="col-1">Nama User</th>
                                        <th class="col-1">Nama Pengasuh</th>
                                        <th class="col-1">Status</th>
                                        <th class="col-1">Action</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        @can('pengasuh')
                                        @foreach ($pesanan_pengasuh as $datas)
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $datas->user->profile->nama }}</td> 
                                        <td>menunggu konfirmasi</td>
                                        <td>
                                        <td>
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
                                                                <h5>Detail Lansia</h5>
                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Nama Lansia</label>
                                                                    <div class="col-9 ">
                                                                    <input type="text" class="form-control-plaintext" id="nama" value=": " readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Jenis Kelamin</label>
                                                                    <div class="col-9 ">
                                                                    <input type="text" class="form-control-plaintext" id="nama" value=": " readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label " for="ttl">Tanggal Lahir</label>
                                                                    <div class="col-4  border-end border-dark">
                                                                    <input type="text" class="form-control-plaintext " id="ttl" value=": " readonly>
                                                                    </div>

                                                                    <label class=" col-2 col-form-label" for="usia">Usia</label>
                                                                    <div class="col-3 ">
                                                                    <input type="text" class="form-control-plaintext" id="usia" value=":  Tahun" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label " for="alamat">Alamat</label>
                                                                    <div class="col-9">
                                                                    <textarea type="text" class="form-control-plaintext" id="alamat" rows="2" readonly> :  </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label " for="no_telp">No.Telepon</label>
                                                                    <div class="col-9">
                                                                    <input type="text" class="form-control-plaintext" id="no_telp" rows="2" value=": " readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Email</label>
                                                                    <div class="col-9 ">
                                                                    <input type="text" class="form-control-plaintext" id="nama" value=": " readonly>
                                                                    </div>
                                                                </div>

                                                                <form action="/download" method="post" enctype="">
                                                                    @csrf
                                                                <div class="row mt-4">
                                                                    <label class=" col-2 col-form-label" for="ktp">KTP</label>
                                                                    <div class="col-3">
                                                                        <input type="hidden" value=" " name="cv">
                                                                        <button type="submit" class="btn btn-primary"> Download</button>
                                                                    </div>
                                                                </div>
                                                                </form>

                                                                <hr>
                                                                <h5>Informasi Tambahan</h5>
                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Tanggal Pesanan</label>
                                                                    <div class="col-9 ">
                                                                    <input type="text" class="form-control-plaintext" id="nama" value=":" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Nomor Telpon Darurat</label>
                                                                    <div class="col-9 ">
                                                                    <input type="text" class="form-control-plaintext" id="nama" value=":" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Riwayat Penyakit</label>
                                                                    <div class="col-9 ">
                                                                    <textarea type="text" class="form-control-plaintext" id="nama"  readonly>: </textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Catatan</label>
                                                                    <div class="col-9 ">
                                                                    <textarea type="text" class="form-control-plaintext" id="nama"  readonly>: </textarea>
                                                                    </div>
                                                                </div>

                                                                <hr>
                                                                <h5>Detail Harga</h5>
                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Jasa yang Dipilih</label>
                                                                    <div class="col-9 ">
                                                                    <input type="text" class="form-control-plaintext" id="nama" value=":" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Total Harga</label>
                                                                    <div class="col-9 ">
                                                                    <input type="text" class="form-control-plaintext" id="nama" value=":" readonly>
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
                                                Tolak
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
                                                    Apakah Anda Yakin Ingin Menolak Pesanan?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                                                    <form method="POST" action="/pelamar/deleted">
                                                        @csrf
                                                        <input type="hidden" value="" name="id">
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
                                        <td>menunggu konfirmasi</td>
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
                                                                    <textarea type="text" class="form-control-plaintext" id="nama"  readonly>: {{ $datas->penyakit }}</textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <label class=" col-3 col-form-label" for="nama">Catatan</label>
                                                                    <div class="col-9 ">
                                                                    <textarea type="text" class="form-control-plaintext" id="nama"  readonly>: {{ $datas->catatan }}</textarea>
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

                                                    <form method="POST" action="/pelamar/deleted">
                                                        @csrf
                                                        <input type="hidden" value="" name="id">
                                                    <button type="submit" class="btn btn-primary">Batalkan</button>
                                                    </form>

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
