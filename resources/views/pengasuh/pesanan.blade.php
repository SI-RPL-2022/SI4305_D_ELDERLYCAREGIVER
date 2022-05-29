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
                                        <th class="col text-center">Nama User</th>
                                        <th class="col-2">Status</th>
                                        <th class="col-3">Action</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        @can('pengasuh')
                                        @foreach ($pesanan_pengasuh as $datas)
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $datas->nama_lansia }}</td> 
                                        <td>menunggu konfirmasi</td>
                                        <td>
                                             <!-- Button trigger modal lihat -->

                                             <a href="/detailpesanan" class="btn btn-success" >
                                                Lihat
                                                {{-- ini filenya ada di detailuserpengasuh.blade.php buat yg pengasuh sama di detailuser.blade.php buat user/lansia --}}
                                            </a>

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
                                                    Apakah anda yakin ingin Menolak pesanan?
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
                                        @endforeach
                                        @endcan
                                    </tr>

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
