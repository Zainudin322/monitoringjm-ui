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
            <div class="form-group text-center">
                <img src="{{ asset("images/{$application->image}") }}" alt="{{ $application->name }}" style="width: 30%">
            </div>

            <div class="form-group">
                <label for="group_id">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    placeholder="Application Name" autocomplete="off" value="{{ old('name') ?? $application->name }}"
                    disabled>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="group_id">Group</label>
                <input type="text" class="form-control @error('group_id') is-invalid @enderror" name="group_id" id="group_id"
                    placeholder="Application Name" autocomplete="off" value="{{ old('group_id') ?? $application->group->name }}"
                    disabled>
                @error('group_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="bpo">BPO</label>
                <input type="text" class="form-control @error('bpo') is-invalid @enderror" name="bpo" id="bpo"
                    placeholder="BPO" autocomplete="off" value="{{ old('bpo') ?? $application->bpo }}" disabled>
                @error('bpo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="bpo">Tentang Aplikasi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Berikan Penjelasan Singkat Aplikasi"></textarea>
                @error('bpo')
                <span class="text-danger">Masukkan penjelasan singkat aplikasi</span>
                <!-- <span class="text-danger">{{ $message }}</span> -->
                @enderror
            </div>
            <div class="form-group">
                <label for="year">Tahun Release</label>
                <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" id="year"
                    placeholder="Year" autocomplete="off" value="{{ old('year') ?? $application->year }}" disabled>
                @error('year')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url"
                    placeholder="URL" autocomplete="off" value="{{ old('url') ?? $application->url }}" disabled>
                @error('url')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="server">Server</label>
                <input type="text" class="form-control @error('server') is-invalid @enderror" name="server" id="server"
                    placeholder="Server" autocomplete="off" value="{{ old('server') ?? $application->server }}"
                    disabled>
                @error('server')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <br>
    <a href="{{ route('application.index') }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
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