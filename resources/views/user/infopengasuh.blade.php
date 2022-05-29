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
                                    <img src="{{ asset('storage/' . $datas->foto) }}" alt="Admin" class="rounded-circle"
                                        width="150">
                                    <div class="mt-3">
                                        <h4 style="color: black">{{ $datas2->username }}</h4>
                                        <p class="text-muted font-size-sm">{{ $datas2->status }}</p>
                                    </div>
                                    {{-- @if ($user->profile->cv) --}}
                                    <div>
                                        <p class="text-muted font-size-sm">Rating</p>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                            class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
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
                                        {{ $datas->nama }}

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0" style="color: black">Tanggal Lahir</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{ $datas->ttl }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-0" style="color: black">Jenis Kelamin</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{ $datas->jenis_kelamin }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{ $datas->alamat }}
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="/lokasi" class="btn btn-primary"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
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
                                        {{ $datas->no_telp }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">Usia</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{ $datas->usia }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3" style="color: black">
                                        <h6 class="mb-2">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary" style="color: black">
                                        {{ $datas2->email }}
                                    </div>
                                </div>
                                <hr>

                                <form action="/download" method="post" enctype="">
                                    @csrf
                                    <input type="hidden" value="{{ $datas->ktp }}" name="cv">
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

                                @if ($datas->cv)
                                    <form action="/download" method="post" enctype="">
                                        @csrf
                                        <input type="hidden" value="{{ $datas->cv }}" name="cv">
                                        <div class="row">
                                            <div class="col-sm-3" style="color: black">
                                                <h6 class="mb-2">CV</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary" style="color: black">
                                                <button type="submit" class="btn btn-success"> Download</button>
                                            </div>
                                        </div>
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>


                    <form action="/order" method="post">
                        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                        <input type="hidden" value="{{ $datas2->id }}" name="pengasuh_id">
                        <input type="hidden" value="{{ $price->harga }}" name="harga">
                    <hr size="4px" width="90%">
                    <p class="h2" style="margin-top: 10px">Jasa yang ditawarkan</p>
                    <div class="col-md-8">
                        <div class="card mb-4">
                                @csrf
                                <div class="card-body">
                                <div class="row">
<<<<<<< HEAD
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="harian"
                                                value="option1" checked>
                                            <label class="form-check-label" for="harian">
                                                Harian
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="mingguan"
                                                value="option2" checked>
                                            <label class="form-check-label" for="mingguan">
                                                Mingguan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="bulanan" value="option3" checked>
                                            <label class="form-check-label" for="bulanan">
                                                Bulanan
                                            </label>
                                        </div>
                                        <div class="input-group input-daterange">
=======
                                            @if($price->harian === 1 )
                                            <div class="form-check col-2 " style="color: black">
                                                <input class="form-check-input" type="radio" name="harian" id="harian" value="1">
                                                <label class="form-check-label" for="harian">
                                                  harian
                                                </label>
                                              </div>
                                            @endif
                                            @if($price->mingguan === 1)
                                            <div class="form-check col-2" style="color: black">
                                                <input class="form-check-input" type="radio" name="mingguan" id="mingguan" value="1">
                                                <label class="form-check-label" for="mingguan">
                                                  mingguan
                                                </label>
                                              </div>
                                            @endif
                                            @if($price->bulanan === 1)
                                            <div class="form-check col-2" style="color: black">
                                                <input class="form-check-input" type="radio" name="bulanan" id="bulanan" value="1">
                                                <label class="form-check-label" for="bulanan">
                                                  bulanan
                                                </label>
                                              </div>
                                            @endif
                                            
                                        {{-- <div class="input-group input-daterange">
>>>>>>> 2d45fbe6c34283e85ecfac2553a2ae4ab9e9f556
                                            <input type="text" id="start" class="form-control text-left mr-2">
                                            <label class="ml-3 form-control-placeholder" id="start-p" for="start">Start
                                                Date</label>
                                            <span class="fa fa-calendar" id="fa-1"></span>
                                            <input type="text" id="end" class="form-control text-left ml-2">
                                            <label class="ml-3 form-control-placeholder" id="end-p" for="end">End
                                                Date</label>
                                            <span class="fa fa-calendar" id="fa-2"></span>
                                        </div> --}}
                                    
                                </div>
                               
                                {{-- <div class="row mt-4">
                                    <div class="col-2" style="color: black">
                                        <h6 class="mb-2">Harga</h6>
                                    </div>
                                    <div class=" col-5 ">
                                        <input type="text" class="form-control" placeholder="Rp.00" name="harga" id="harga">
                                    </div>
                                </div> --}}
                            
                            </div>
                        </div>
                    </div>
            </center>
        </div>

        <div class="container">
            <center>
<<<<<<< HEAD
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <hr>
                    <div class="animate__animated animate__backInRight">
                        <p class="h2" style="margin-top: 10px">Form Informasi Lansia</p>
                        <div class="col-md-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="row mt-2">
                                            <div class="col-mt-3"><label class="labels">Nama Lansia</label>
                                                <input type="text" class="form-control" placeholder="Nama Lansia"
                                                    name="pengarang">
                                            </div>

                                            <div class="col-md-12"><label class="labels">Tanggal Lahir</label>
                                                <input type="date" class="form-control">
                                            </div>

                                            <div class="col-mt-3"><label class="labels">Umur Lansia</label>
                                                <input type="text" class="form-control" placeholder="Umur Lansia"
                                                    name="pengarang">
                                            </div>
=======
                <hr>
                <div class="animate__animated animate__backInRight">
                    <p class="h2" style="margin-top: 10px">Form Informasi Lansia</p>
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="row mt-2">
                                        <div class="col-mt-3"><label class="labels">Nama Lansia</label>
                                            <input type="text" class="form-control" placeholder="Nama Lansia" name="nama_lansia">
                                        </div>

                                        <div class="col-md-12"><label class="labels">Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal">
                                        </div>

                                        <div class="col-mt-3"><label class="labels">Umur Lansia</label>
                                            <input type="text" class="form-control" placeholder="Umur Lansia" name="umur">
                                        </div>
>>>>>>> 2d45fbe6c34283e85ecfac2553a2ae4ab9e9f556

                                            <div class="col-mt-3">
                                                <label for="jeniskelamin" class="form-label">Jenis Kelamin
                                                    Lansia</label><br>
                                                <select type="option"
                                                    class="form-select @error('jenis_kelamin') is-invalid @enderror"
                                                    id="jeniskelamin" name="jenis_kelamin"
                                                    placeholder=" Jenis Kelamin Lansia">
                                                    <option selected>laki-laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>

<<<<<<< HEAD
                                            <div class="col-mt-3"><label class="labels">Alamat Lansia</label>
                                                <input type="text" class="form-control" placeholder="Alamat Lansia"
                                                    name="pengarang">
                                            </div>

                                            <div class="col-mt-3"><label class="labels">Nomor Telpon
                                                    Lansia</label>
                                                <input type="text" class="form-control" placeholder="Nomor Telpon Lansia"
                                                    name="pengarang">
                                            </div>

                                            <div class="col-mt-3"><label class="labels">Nomor Telpon
                                                    Darurat</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Nomor Telpon kerabat terdekat" name="pengarang">
                                            </div>

                                            <div class="col-md-12"><label class="labels">Riwayat
                                                    Penyakit</label>
                                                <textarea class="form-control" placeholder="Contoh : diabetes" name="deskripsi"></textarea>
                                            </div>

                                            <div class="col-md-12"><label class="labels">Catatan</label>
                                                <textarea class="form-control" placeholder="Contoh : injeksi insulin sebelum makan" name="deskripsi"></textarea>
                                            </div>
=======
                                        <div class="col-mt-3"><label class="labels">Alamat Lansia</label>
                                            <input type="text" class="form-control" placeholder="Alamat Lansia" name="alamat">
                                        </div>

                                        <div class="col-mt-3"><label class="labels">Nomor Telpon Lansia</label>
                                            <input type="text" class="form-control" placeholder="Nomor Telpon Lansia" name="no_telp">
                                        </div>

                                        <div class="col-mt-3"><label class="labels">Nomor Telpon Darurat</label>
                                            <input type="text" class="form-control" placeholder="Nomor Telpon kerabat terdekat" name="no_telp_kerabat">
                                        </div>

                                        <div class="col-md-12"><label class="labels">Riwayat Penyakit</label>
                                            <textarea class="form-control" placeholder="Contoh : diabetes" name="penyakit" ></textarea>
                                        </div>

                                        <div class="col-md-12"><label class="labels">Catatan</label>
                                            <textarea class="form-control" placeholder="Contoh : injeksi insulin sebelum makan" name="catatan" ></textarea>
>>>>>>> 2d45fbe6c34283e85ecfac2553a2ae4ab9e9f556
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
        </div>
        </form>
        </center>
=======
                </div>
            </div>
            </center>
>>>>>>> 2d45fbe6c34283e85ecfac2553a2ae4ab9e9f556
        </div>

        {{-- <div class="container">
            <center>
                <hr>
                <p class="h2" style="margin-top: 10px">Total Harga</p>
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="row mt-2">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder="Rp.00" name="pengarang">
                                    </div>
                                </div>
                            </div>
                        </div>
            </center>
        </div> --}}

        <div class="container">
            <center>
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Pesan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="1">Konfirmasi pesanan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
<<<<<<< HEAD
                        </div>
                    </div>

                    <a href="/" class="btn btn-danger">Batal</a>
=======
                            <div class="modal-body">
                            Apakah anda yakin?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                </form>
                    <a href="/" class="btn btn-danger" >Batal</a>
>>>>>>> 2d45fbe6c34283e85ecfac2553a2ae4ab9e9f556
                </div>
                
                
            </center>
        </div>
        
        {{-- <script>
            let radioBtns = document.querySelectorAll("input[name='jasa']");
            let result = document.getElementById("harga");

            let findSelected = () => (let selected = document.querySelector("input[name='jasa']:checked").value;
                result.textContent = 'value of selected radio button: $(selected)';
            )

            radioBtns.foreach(radioBtns => {
                radioBtns.addEventListener("change", findSelected);
            });

            findSelected();
         </script> --}}

    </section>
    
@endsection
