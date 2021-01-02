@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Kategori Buku</h1>
    </div>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="id_kategoris">Kategori</label>
                <select name="id_kategoris" required class="form-control">
                    <option >Pilih Kategori</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->jenis_kategoris }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="slug">Judul</label>
                <input type="text" class="form-control" name="slug">
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" class="form-control" name="pengarang">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" name="penerbit">
            </div>
            <div class="form-group">
                <label for="konten_digital">Konten Digital</label>
                <input type="text" class="form-control" name="konten_digital">
            </div>
            <div class="form-group">
                <label for="materi">Materi</label>
                <input type="file" name="materi" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Tambah</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection