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
            <form action="{{ route('note.update', $note->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                        placeholder="Masukkan Judul Catatan" autocomplete="off" value="{{ old('title') ?? $note->title }}">
                    @error('title')
                    <span class="text-danger">Gagal menambahkan judul</span>
                    <!-- <span class="text-danger">{{ $message }}</span> -->
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="description">Deskripsi Catatan</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    placeholder="Berikan Deskripsi Catatan" autocomplete="off" cols="30" rows="10">{{ old('description') ?? $note->description }}</textarea>
                    @error('description')
                    <span class="text-danger">Gagal menambahkan deskripsi catatan</span>
                    <!-- <span class="text-danger">{{ $message }}</span> -->
                    @enderror
                </div>
                <div class="form-group">
                <p class="fs-6"><small>Perhatian! 
            <br>
             Hanya dapat menggunakan karakter sebanyak 255 terdiri dari A-Z, 0-1, dan simbol<small></p>
            </div>
                <div class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-primary" id="kirim" onclick="simpanform()"> Simpan</button>
                    <button type="submit" class="btn btn-primary" id="loading" disabled>Loading
                        <div class="spinner-border spinner-border-sm" role="status"></div>
                    </button>
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('note.index') }}" class="btn btn-default">Batal</a>


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