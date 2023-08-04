@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->
    <div class="card-body">
                <div class="text-center">
                  <!-- <img class="profile-img"src="{{asset('img/JMLinx.png')}}" width="20%"> -->
                </div>
                <br>
                
    <div class="card">
        <div class="kotak card-body">
            <form action="{{ route('group.update', $group->id) }}" method="post">
                @csrf
                @method('put')

                <div class="form-group">
                  <label for="name">Nama group</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Masukkan Nama Group" autocomplete="off" value="{{ old('name') ?? $group->name }}">
                  @error('name')
                  <span class="text-danger">Gagal mengubah nama group</span>
                    <!-- <span class="text-danger">{{ $message }}</span> -->
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('group.index') }}" class="btn btn-default">Batal</a>
            </form>
        </div>
    </div>

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
