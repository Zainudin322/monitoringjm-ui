@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

<!-- Main Content goes here -->
<div class="card-body">
  <div class="text-center">
    <!-- <img class="profile-img" src="{{asset('img/JMLinx.png')}}" width="20%"> -->
  </div>
  <br>

  <div class="card">
    <div class="kotak card-body">
      <form action="{{ route('basic.update', $user->id) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip"
            placeholder="NIP" autocomplete="off" value="{{ old('nip') ?? $user->nip }}" disabled>
          @error('nip')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah nip</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username"
            placeholder="Username" autocomplete="off" value="{{ old('username') ?? $user->username }}" disabled>
          @error('username')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah username</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
            placeholder="Nama Pengguna" autocomplete="off" value="{{ old('name') ?? $user->name }}">
          @error('name')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah nama</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="last_name">Nama Belakang</label>
          <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
            id="last_name" placeholder="Masukkan Nama Belakang" autocomplete="off"
            value="{{ old('last_name') ?? $user->last_name }}">
          @error('last_name')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah nama belakang</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
            placeholder="Masukkan Email" autocomplete="off" value="{{ old('email') ?? $user->email }}">
          @error('email')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah alamat email</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
            id="password" placeholder="Masukkan Password" autocomplete="off">
          @error('password')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah password</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="role_id">Role</label>
          <select class="form-control @error('role_id') is-invalid @enderror" name="role_id" id="role_id">
            @foreach ($roles as $role)
            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}
            </option>
            @endforeach
          </select>
          @error('role_id')
          <!-- <span class="text-danger">{{ $message }}</span> -->
          <span class="text-danger">Gagal mengubah role</span>
          @enderror
        </div>

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