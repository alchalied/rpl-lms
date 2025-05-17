@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Mata Pelajaran</h1>

    <form action="{{ route('mapel.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Mata Pelajaran</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('mapel.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
