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
        <a href="{{ route('application.create') }}" class="btn btn-primary mb-3"><i class="nav-icon fas fa-plus"></i>
            Tambah</a>
    </div>
    <form action="" method="get">
        <div class="d-flex justify-content-end">
            <select class="form-control select2" style="width: 15%" name="q">
                <option value="" selected="selected">All</option>
                @foreach ($groups as $group)
                <option value="{{ $group->id }}" {{ Request()->q == $group->id ? 'selected' : null }}>{{ $group->name }}
                </option>
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
                    <th>Nama Aplkasi</th>
                    <th>Group</th>
                    <th>BPO</th>
                    <th>URL</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $skipped = $applications->currentPage() * $applications->perPage() - $applications->perPage(); ?>
                @foreach ($applications as $application)
                <tr>
                    <td scope="row"> {{ $skipped + $loop->iteration }}</td>
                    <td>{{ $application->name }}</td>
                    <td>{{ $application->group->name }}</td>
                    <td>{{ $application->bpo }}</td>
                    <td>{{ $application->url }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('application.show', $application->id) }}"
                                class="btn btn-sm mr-1 btn-outline-secondary"><i class=" fas fa-eye"></i></a>
                            <a href="{{ route('application.edit', $application->id) }}"
                                class="btn btn-sm mr-1 btn-outline-primary"><i class=" fas fa-edit"></i></a>
                            <form action="{{ route('application.destroy', $application->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-outline-danger "
                                    onclick="return confirm('Apakah anda yakin?')"><i class=" fas fa-trash-alt"
                                        style="color: danger"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $applications->links() }}

    <!-- End of Main Content -->
    @endsection

    @push('notif')
    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" application="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-success border-left-success" application="alert">
        {{ session('status') }}
    </div>
    @endif
    @endpush