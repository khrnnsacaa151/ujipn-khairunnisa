@extends('admin.layouts.templates')

@section('content')
<div class="shadow p-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="bg-dark text-center text-light">No</th>
                <th class="bg-dark text-center text-light">Nis</th>
                <th class="bg-dark text-center text-light">Nama Siswa</th>
                <th class="bg-dark text-center text-light">Email</th>
                <th class="bg-dark text-center text-light">Kelas</th>
                <th class="bg-dark text-center text-light">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $index => $sis )
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><span class="">{{ $sis->nis }}</span></td>
                    <td class="">{{ $sis->user->nama }}</td>
                    <td class="text-muted small">{{ $sis->user->email }}</td>
                    <td>{{ $sis->kelas }}</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit m-1"></i>Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i>Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
