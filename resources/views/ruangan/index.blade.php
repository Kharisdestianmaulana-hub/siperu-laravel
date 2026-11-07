@extends('layouts.app')

@section('content')
<div class="page-header">
    <h1 class="page-title">Daftar Ruangan</h1>
    <p class="page-subtitle">Pilih ruangan yang tersedia untuk keperluan kegiatan atau perkuliahan.</p>
</div>

<div class="grid">
    @foreach ($ruangan as $item)
        <div class="card">
            <div>
                <div class="card-header">
                    <h2 class="card-title">{{ $item['namaRuangan'] }}</h2>
                    @if ($item['status'] === 'Tersedia')
                        <span class="badge badge-available">{{ $item['status'] }}</span>
                    @else
                        <span class="badge badge-unavailable">{{ $item['status'] }}</span>
                    @endif
                </div>

                <div class="card-body">
                    <div class="card-info">
                        <span class="info-label">ID Ruangan</span>
                        <span class="info-value">#{{ $item['id'] }}</span>
                    </div>
                    <div class="card-info">
                        <span class="info-label">Kapasitas</span>
                        <span class="info-value">{{ $item['kapasitas'] }} Orang</span>
                    </div>
                </div>
            </div>

            <div class="card-actions">
                <a href="{{ route('ruangan.show', $item['id']) }}" class="btn btn-outline">Detail</a>
                
                @if ($item['status'] === 'Tersedia')
                    <a href="{{ route('peminjaman.create', $item['id']) }}" class="btn btn-primary">Ajukan Peminjaman</a>
                @else
                    <span class="text-disabled">Ruangan Sedang Digunakan</span>
                @endif
            </div>
        </div>
    @endforeach
</div>
@endsection
