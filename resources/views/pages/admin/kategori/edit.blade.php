@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Kategori Buku {{ $item->jenis_kategoris }}</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors as $error)
            <li>{{route( $error )}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('kategori.update',$item->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="jenis_kategoris">Jenis Kategori</label>
                    <input type="text" name="jenis_kategoris" class="form-control" value="{{ $item->jenis_kategoris }}" placeholder="Jenis Kategori">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Edit</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection