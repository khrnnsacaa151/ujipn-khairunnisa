@extends('admin.layouts.templates')

@section('content')
        <!-- CARD INFO -->
            <div class="cards">
                <div class="card">
                    <p>Total Aspirasi</p>
                    <h2>{{ $total_aspirasi }}</h2>
                </div>
                <div class="card">
                    <p>Menunggu</p>
                    <h2>{{ $aspirasi_menunggu }}</h2>
                </div>
                <div class="card">
                    <p>Diproses</p>
                    <h2>{{ $aspirasi_diproses }}</h2>
                </div>
                <div class="card">
                    <p>Selesai</p>
                    <h2>{{ $aspirasi_selesai }}</h2>
                </div>
            </div>

            <!-- TABLE -->
            <div class="table-box">
                <h3>Data Aspirasi Terbaru</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($aspirasi as $item)
                        <tr>
                            <td>{{ $item->siswa->user->nama }}</td>
                            <td>{{ $item->judul}}</td>
                            <td>{{ $item->kategori->nama_kategori }}</td>
                            <td><span class="badge {{ $item->status }}" style="text-transform: capitalize;">{{ $item->status }}</span></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>

@endsection