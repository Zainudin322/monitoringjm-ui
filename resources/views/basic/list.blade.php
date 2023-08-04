@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

<!-- Main Content goes here -->
<div class="d-flex justify-content-center">
    <!-- <img class="profile-img" src="{{asset('img/JMLinx.png')}}" width="20%"> -->
</div>
<br>
<div class="position-relative">
    <div class="position-absolute top-0 start-0 translate-middle">
        <a href="{{ route('basic.create') }}" class="btn btn-primary mb-3"><i class="nav-icon fas fa-plus"></i>
            Tambah</a>
    </div>
    <form action="" method="get">
        <div class="d-flex justify-content-end">
            <select class="form-control select2" style="width: 15%" name="q">
                <option value="" selected="selected">All</option>
                @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ Request()->q == $role->id ? 'selected' : null }}>{{ $role->name }}</option>
                @endforeach
            </select>

            <br><button type="submit" class="btn btn-primary"> filter</button></br>
        </div>
    </form>

    <br>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <div class="table-responsive">
    <table class="tabel table table-bordered table-stripped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $user->nip }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->name }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('permission.edit', $user->id) }}" class="btn btn-sm mr-1 btn-outline-secondary"> <i
                                class="fas fa-user-cog"></i></a>
                        <a href="{{ route('basic.edit', $user->id) }}" class="btn btn-sm mr-1 btn-outline-primary"> <i
                                class="fas fa-edit"></i></a>
                        <form action="{{ route('basic.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Apakah anda yakin?')"
                                class="btn btn-sm mr-2 btn-outline-danger"> <i class=" fas fa-trash-alt"></i></a>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    {{ $users->links() }}

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