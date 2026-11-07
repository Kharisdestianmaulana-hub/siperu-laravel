<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    private array $daftarRuangan = [
        [
            'id' => 1,
            'namaRuangan' => 'Laboratorium Komputer 1',
            'kapasitas' => 35,
            'status' => 'Tersedia'
        ],
        [
            'id' => 2,
            'namaRuangan' => 'Auditorium Utama',
            'kapasitas' => 150,
            'status' => 'Digunakan'
        ],
        [
            'id' => 3,
            'namaRuangan' => 'Ruang Seminar Gedung A',
            'kapasitas' => 50,
            'status' => 'Tersedia'
        ],
        [
            'id' => 4,
            'namaRuangan' => 'Ruang Rapat Senat',
            'kapasitas' => 20,
            'status' => 'Digunakan'
        ],
        [
            'id' => 5,
            'namaRuangan' => 'Laboratorium Rekayasa Perangkat Lunak',
            'kapasitas' => 40,
            'status' => 'Tersedia'
        ]
    ];

    public function index()
    {
        $ruangan = $this->daftarRuangan;
        return view('ruangan.index', compact('ruangan'));
    }

    public function show(string $id)
    {
        $item = collect($this->daftarRuangan)->firstWhere('id', (int) $id);

        if (!$item) {
            abort(404);
        }

        return view('ruangan.show', ['ruangan' => $item]);
    }

    public function createPeminjaman(string $id)
    {
        $item = collect($this->daftarRuangan)->firstWhere('id', (int) $id);

        if (!$item) {
            abort(404);
        }

        return view('peminjaman.create', ['ruangan' => $item]);
    }
}
