@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>

@if ($errors->any())
<div class="alert alert-danger border-left-danger" role="alert">
    <ul class="pl-4 my-2">
        @foreach ($errors->all() as $error)
        <!-- <li>{{ $error }}</li> -->
        Pastikan form nama depan dan nama belakang tidak kosong!
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{ route('profile.update') }}" autocomplete="off" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-4 order-lg-2">
            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4">
                    @if (Auth::user()->image == null)
                    <figure class="rounded-circle avatar avatar font-weight-bold"
                        style="font-size: 60px; height: 180px; width: 180px;"
                        data-initial="{{ Auth::user()->name[0] }}">
                    </figure>
                    @else
                    <img class="rounded-circle avatar avatar font-weight-bold"  style="font-size: 60px; height: 180px; width: 180px; object-fit: cover;" src="{{ asset("images/" . Auth::user()->image . "") }}" alt="">
                    @endif
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">{{ Auth::user()->fullName }}</h5>
                                <p>{{   Auth::user()->role->name  }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label for="formFileSm" class="form-label">Ganti Profil</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="image"></input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Akun</h6>
                </div>

                <div class="card-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="_method" value="PUT">

                    <h6 class="heading-small text-muted mb-4">Informasi Pengguna</h6>

                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Username<span
                                            class="small text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="username" placeholder="Nama"
                                        value="{{ old('name', Auth::user()->username) }}" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Nama Depan<span
                                            class="small text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Nama"
                                        value="{{ old('name', Auth::user()->name) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="last_name">Nama Belakang</label>
                                    <input type="text" id="last_name" class="form-control" name="last_name"
                                        placeholder="Nama Belakang"
                                        value="{{ old('last_name', Auth::user()->last_name) }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="email">Alamat Email<span
                                            class="small text-danger">*</span></label>
                                    <input type="email" id="email" class="form-control" name="email"
                                        placeholder="contoh@gmail.com" value="{{ old('email', Auth::user()->email) }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="current_password">Password Saat Ini</label>
                                    <input type="password" id="current_password" class="form-control"
                                        name="current_password" placeholder="Password Saat Ini">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="new_password">Password Baru</label>
                                    <input type="password" id="new_password" class="form-control" name="new_password"
                                        placeholder="Masukkan Password">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="confirm_password">Konfirmasi Password</label>
                                    <input type="password" id="confirm_password" class="form-control"
                                        name="password_confirmation" placeholder="Konfirmasi Password">
                                </div>
                                </div>
                                </div>

                    <!-- Button -->
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" id="kirim" onclick="simpanform()">
                                        Simpan</button>
                                    <button type="submit" class="btn btn-primary" id="loading" disabled>
                                        <div class="spinner-border spinner-border-sm" role="status"></div>
                                        Loading
                                    </button>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('home') }}" class="btn btn-default">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
</form>

<!-- animasi loading button disetiap edit dan tambah data -->
<script>
    var kirim = document.getElementById('kirim');
var loading = document.getElementById('loading');
loading.style.display = 'none';

function startProses(){
    kirim.style.display = 'none';
    loading.style.display = 'block';
}
function endProses(){
    loading.style.display = 'none';
    kirim.style.display = 'block';
}
function simpanform(){
    startProses();
    setTimeout(endProses, 2000);
}
</script>

</div>

</div>

</div>

@endsection
@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    Berhasil
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    berhasil
</div>
@endif
@endpush