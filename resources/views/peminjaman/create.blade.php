@extends('layouts.app')

@section('content')
<div class="form-panel">
    <div class="page-header">
        <h1 class="page-title">Form Pengajuan Peminjaman</h1>
        <p class="page-subtitle">Silakan isi formulir peminjaman untuk ruangan terpilih.</p>
    </div>

    <form action="#" method="GET">
        <div class="form-group">
            <label class="form-label">Ruangan yang Dipinjam</label>
            <input type="text" class="form-control" value="{{ $ruangan['namaRuangan'] }} (Kapasitas: {{ $ruangan['kapasitas'] }} Orang)" readonly>
        </div>

        <div class="form-group">
            <label class="form-label">Nama Lengkap Peminjam</label>
            <input type="text" class="form-control" placeholder="Masukkan nama peminjam" required>
        </div>

        <div class="form-group">
            <label class="form-label">NIM / NIP</label>
            <input type="text" class="form-control" placeholder="Masukkan nomor identitas" required>
        </div>

        <div class="form-group">
            <label class="form-label">Tanggal Penggunaan</label>
            <input type="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">Keperluan / Nama Kegiatan</label>
            <textarea class="form-control" placeholder="Tuliskan tujuan peminjaman ruangan" required></textarea>
        </div>

        <div class="form-actions">
            <a href="{{ route('ruangan.index') }}" class="btn btn-outline">Batal</a>
            <button type="button" class="btn btn-primary" onclick="alert('Pengajuan berhasil dicatat secara statis.')">Kirim Pengajuan</button>
        </div>
    </form>
</div>
@endsection
