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
      <form action="{{ route('permission.store') }}" method="post">
        @csrf
        @method('post')
        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip"
            placeholder="NIP" autocomplete="off" value="{{ old('nip') ?? $user->nip }}" disabled>
          @error('nip')
          <span class="text-danger">Gagal mengubah nip</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username"
            placeholder="Username" autocomplete="off" value="{{ old('username') ?? $user->username }}" disabled>
          @error('username')
          <span class="text-danger">Gagal mengubah username</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
            placeholder="Nama Pengguna" autocomplete="off" value="{{ old('name') ?? $user->name }}" disabled>
          @error('name')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah nama</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="last_name">Nama Belakang</label>
          <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
            id="last_name" placeholder="Masukkan Last Name" autocomplete="off"
            value="{{ old('last_name') ?? $user->last_name }}" disabled>
          @error('last_name')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah nama belakang</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
            placeholder="Masukkan Email" autocomplete="off" value="{{ old('email') ?? $user->email }}" disabled>
          @error('email')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah alamat email</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="Role">Role</label>
          <input type="text" class="form-control @error('role') is-invalid @enderror" name="Role" id="Role"
            placeholder="role" autocomplete="off" value="{{ old('role') ?? $user->role->name }}" disabled>
          @error('role')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah role</span>
          @enderror
        </div>
        
        <div class="form-group">
        <label for="inputStatus"> Menu :</label>
        <div class="form-check form-check-inline">
        <div class="form-group">
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        @foreach ($applications as $application)
        @php
        $check = \App\Permissions::where('user_id', $user_id)->where('application_id', $application->id)->first();
        @endphp
        <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" value="{{ $application->id }}" name="applications[]" id="application{{ $loop->iteration }}" autocomplete="off" {{ $check==null ? '' : 'checked' }}>
  <label class="form-check-label" for="application{{ $loop->iteration }}">{{ $application->name }}</label>
</div>
@endforeach
</div>
</div>
        </div>
<!-- 
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <label for="inputStatus"> Menu :</label>
        @foreach ($applications as $application)
        @php
        $check = \App\Permissions::where('user_id', $user_id)->where('application_id', $application->id)->first();
        @endphp
        <div class="card-body">
        <div class="form-group">
        <input type="checkbox" value="{{ $application->id }}" name="applications[]" id="application{{ $loop->iteration }}" autocomplete="off" {{ $check==null ? '' : 'checked' }}>
        <label for="application{{ $loop->iteration }}">{{ $application->name }}</label>
          </div>
          
          @endforeach
        </div> -->
        
        <div class="d-flex justify-content-start">
          <button type="submit" class="btn btn-primary" id="kirim" onclick="simpanform()"> Simpan</button>
          <button type="submit" class="btn btn-primary" id="loading" disabled>
            <div class="spinner-border spinner-border-sm" role="status"></div>
            Loading
          </button>
          <div class="d-flex justify-content-start">
            <a href="{{ route('basic.index') }}" class="btn btn-default">Batal</a>
      </form>
    </div>
  </div>
  </div>
  </div>
  </div>
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