@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mata Pelajaran</h1>

    <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Mata Pelajaran</label>
            <input type="text" name="nama" value="{{ $mapel->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" value="{{ $mapel->kode }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('mapel.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
