@extends('layouts.admin')


@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Book Buku</h1>
            <a href="{{ route('book.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <li class="fas fa-plus fa-sm text-white-50"></li> Tambah Book Buku
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kategori</th>
                                <th>Judul Book</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Konten Digital</th>
                                <th>Status</th>
                                <th>Materi</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->kategori->jenis_kategoris }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->pengarang }}</td>
                                    <td>{{ $item->penerbit }}</td>
                                    <td>{{ $item->konten_digital }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ Storage::url($item->materi) }}">Download</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('book.edit', $item->id) }}" class="btn btn-info">
                                            <li class="fa fa-pencil-alt"></li> Edit
                                        </a>
                                        <form action="{{ route('book.destroy',$item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-primary">
                                                <li class="fa fa-trash"></li> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        </div>
        <!-- /.container-fluid -->
@endsection