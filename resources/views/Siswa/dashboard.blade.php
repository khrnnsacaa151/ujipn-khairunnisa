@extends('siswa.layouts.templates')

@section('content')
        <div class="main-content">
            @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Sukses!</strong> {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Gagal!</strong> {{ session('error') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    @endif

            <h2 class="welcome">
                Selamat datang, <span>{{ auth()->user()->nama }} ({{ auth()->user()->siswa->kelas }})</span>
            </h2>

            <!-- STAT CARD -->
            <div class="stat-wrapper">
                <div class="stat-card blue">
                    <p>Total Aspirasi</p>
                    <h1>{{ $total_aspirasi }}</h1>
                </div>

                <div class="stat-card orange">
                    <p>Menunggu</p>
                    <h1>{{ $aspirasi_menunggu }}</h1>
                </div>

                <div class="stat-card green">
                    <p>Diproses</p>
                    <h1>{{ $aspirasi_diproses }}</h1>
                </div>

                <div class="stat-card teal">
                    <p>Selesai</p>
                    <h1>{{ $aspirasi_selesai }}</h1>
                </div>

                <div class="card bg-danger" data-icon="&#xf058;">
                    <p>Ditolak</p>
                    <h1>{{ $aspirasi_ditolak }}</h1>
                </div>
            </div>

            <!-- BUTTON -->
            <div class="btn-wrapper">
                <a href="{{ route('siswa.tambah-aspirasi') }}" class="btn-aspirasi">+ Ajukan Aspirasi</a>
            </div>

            <!-- TABLE -->
            <div class="card">
                <h3>Riwayat Aspirasi</h3>

                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Detail Aduan</th>
                            {{-- <th>Tanggal</th> --}}
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aspirasi as $item)
                        <tr>
                            <td>{{ $loop->iteration + ($aspirasi->currentPage() - 1) * $aspirasi->perPage() }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->kategori->nama_kategori }}</td>
                            <td>{{ $item->isi }}</td>
                            {{-- <td>{{ $item->created_at->format('d-M-Y') }}</td> --}}
                            <td><span class="badge {{ $item->status }} text-center" style="text-transform: capitalize;">{{ $item->status }}</span></td>
                            <td class="text-center" width="200">
                                <a href="/siswa/aspirasi/edit/{{ $item->id }}" class=" btn btn-sm btn-info m-0 {{ $item->status != 'menunggu' ? 'disabled' : '' }}">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="/siswa/aspirasi/delete/{{ $item->id }}" class=" btn btn-sm btn-danger m-0 {{ $item->status == 'diproses' ? 'disabled' : '' }}">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $aspirasi->links() }}
            </div>
        </div>
    </div>
    @endsection
