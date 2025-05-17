@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Pelajaran</h1>
    
    <a href="{{ route('mapel.create') }}" class="btn btn-primary mb-3">+ Tambah Mapel</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kode</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mapels as $mapel)
                <tr>
                    <td>{{ $mapel->id }}</td>
                    <td>{{ $mapel->nama }}</td>
                    <td>{{ $mapel->kode }}</td>
                    <td>
                        <a href="{{ route('mapel.edit', $mapel->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('mapel.destroy', $mapel->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
