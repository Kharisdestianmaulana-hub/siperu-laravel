@extends('layouts.app')

@section('content')
<div class="detail-panel">
    <div class="page-header">
        <h1 class="page-title">{{ $ruangan['namaRuangan'] }}</h1>
        <p class="page-subtitle">Informasi lengkap spesifikasi ruangan.</p>
    </div>

    <div class="detail-list">
        <div class="detail-row">
            <span class="info-label">ID Ruangan</span>
            <span class="info-value">#{{ $ruangan['id'] }}</span>
        </div>
        <div class="detail-row">
            <span class="info-label">Nama Ruangan</span>
            <span class="info-value">{{ $ruangan['namaRuangan'] }}</span>
        </div>
        <div class="detail-row">
            <span class="info-label">Kapasitas Maksimal</span>
            <span class="info-value">{{ $ruangan['kapasitas'] }} Orang</span>
        </div>
        <div class="detail-row">
            <span class="info-label">Status Saat Ini</span>
            <span class="info-value">
                @if ($ruangan['status'] === 'Tersedia')
                    <span class="badge badge-available">{{ $ruangan['status'] }}</span>
                @else
                    <span class="badge badge-unavailable">{{ $ruangan['status'] }}</span>
                @endif
            </span>
        </div>
    </div>

    <div class="form-actions">
        <a href="{{ route('ruangan.index') }}" class="btn btn-outline">Kembali ke Daftar</a>
        
        @if ($ruangan['status'] === 'Tersedia')
            <a href="{{ route('peminjaman.create', $ruangan['id']) }}" class="btn btn-primary">Ajukan Peminjaman</a>
        @else
            <span class="text-disabled">Ruangan Sedang Digunakan</span>
        @endif
    </div>
</div>
@endsection
