@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

<!-- Main Content goes here -->
<div class="card-body">
    <div class="text-center">
        <img class="profile-img" src="{{asset('img/JMLinx.png')}}" width="20%">
    </div>
    <br>

<div class="card">
    <div class="kotak card-body">
        <form action="{{ route('application.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Nama Aplikasi" autocomplete="off" value="{{ old('name') }}">
                @error('name')
                <span class="text-danger">Gagal menambahkan nama</span>
                <!-- <span class="text-danger">{{ $message }}</span> -->
                @enderror
            </div>
            <div class="form-group">
                <label for="group_id">Nama Group</label>
                <select class="form-control @error('group_id') is-invalid @enderror" name="group_id">
                    <option value="" selected="selected">Pilih Group</option>
                    @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
                @error('group_id')
                <span class="text-danger">Gagal memilih group</span>
                <!-- <span class="text-danger">{{ $message }}</span> -->
                @enderror
            </div>

            <div class="form-group">
                <label for="bpo">BPO</label>
                <input type="text" class="form-control @error('bpo') is-invalid @enderror" name="bpo" id="bpo"
                    placeholder="Masukkan Nama BPO" autocomplete="off" value="{{ old('bpo') }}">
                @error('bpo')
                <span class="text-danger">Gagal menambahkan bpo</span>
                <!-- <span class="text-danger">{{ $message }}</span> -->
                @enderror
            </div>
            <div class="form-group">
                <label for="year">Tahun Release</label>
                <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" id="year"
                    placeholder="Tahun Pembuatan" autocomplete="off" value="{{ old('year') }}">
                @error('year')
                <span class="text-danger">Gagal menambahkan tahun release</span>
                <!-- <span class="text-danger">{{ $message }}</span> -->
                @enderror
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
                    placeholder="Masukkan URL" autocomplete="off" value="{{ old('url') }}">
                @error('url')
                <span class="text-danger">Gagal menambahkan alamat url</span>
                <!-- <span class="text-danger">{{ $message }}</span> -->
                @enderror
            </div>

            <div class="form-group">
                <label for="server">Server</label>
                <input type="text" class="form-control @error('server') is-invalid @enderror" name="server" id="server"
                    placeholder="Masukkan Server" autocomplete="off" value="{{ old('server') }}">
                @error('server')
                <span class="text-danger">Gagal menambahkan alamat server</span>
                <!-- <span class="text-danger">{{ $message }}</span> -->
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
                    placeholder="Image Logo" autocomplete="off" value="{{ old('image') }}">
                @error('image')
                <span class="text-danger">Gagal menambahkan gambar</span>
                <!-- <span class="text-danger">{{ $message }}</span> -->
                @enderror
            </div>
            <div class="d-flex justify-content-start">
                <button type="submit" class="btn btn-primary" id="kirim" onclick="simpanform()"> Simpan</button>
                <button type="submit" class="btn btn-primary" id="loading" disabled>Loading
                <div class="spinner-border spinner-border-sm" role="status"></div>
                </button>
                <div class="d-flex justify-content-start">
                <a href="{{ route('application.index') }}" class="btn btn-default">Batal</a>
                

            </form>
        </div>
    </div>
    </div>
    </div>

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
<!-- End of Main Content -->
@endsection

@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif
@endpush