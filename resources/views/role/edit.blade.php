@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->
    <div class="card-body">
                <div class="text-center">
                  <img class="profile-img"
                       src="{{asset('img/JMLinx.png')}}" width="20%">
                </div>
                <br>
                
    <div class="card">
        <div class="kotak card-body">
            <form action="{{ route('role.update', $role->id) }}" method="post">
                @csrf
                @method('put')

                <div class="form-group">
                  <label for="name">Nama Role</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Masukkan Nama Role" autocomplete="off" value="{{ old('name') ?? $role->name }}">
                  @error('name')
                  <span class="text-danger">Gagal mengubah nama role</span>
                  @enderror
                </div>
                <div class="d-flex justify-content-start">
                <button type="submit" class="btn btn-primary" id="kirim" onclick="simpanform()">Simpan</button>
                <button type="submit" class="btn btn-primary" id="loading" disabled>
                <div class="spinner-border spinner-border-sm" role="status"></div>
                Loading
                </button>
                <div class="d-flex justify-content-start">
                <a href="{{ route('role.index') }}" class="btn btn-default">Batal</a>
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