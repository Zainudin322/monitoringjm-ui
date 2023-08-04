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
    <div>
        <a href="{{ route('note.create') }}" class="btn btn-primary mb-3"><i class="nav-icon fas fa-plus"></i>
            Tambah</a>
    </div>

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
                    <th>Judul Catatan</th>
                    <th>Deskripsi Catatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $skipped = $notes->currentPage() * $notes->perPage() - $notes->perPage(); ?>
                @foreach ($notes as $note)
                <tr>
                    <td scope="row"> {{ $skipped + $loop->iteration }}</td>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->description }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('note.edit', $note->id) }}"
                                class="btn btn-sm mr-1 btn-outline-primary"><i class=" fas fa-edit"></i></a>
                            <form action="{{ route('note.destroy', $note->id) }}" method="post">
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

    {{ $notes->links() }}
    </div>
    <!-- End of Main Content -->
    @endsection

    @push('notif')
    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" note="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-success border-left-success" note="alert">
        {{ session('status') }}
    </div>
    @endif
    @endpush