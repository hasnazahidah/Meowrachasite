<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Adopsi;
use App\Models\Konsultasi;
use App\Models\Penitipan;
use App\Models\Artikel;

class DashboardController extends Controller
{
    public function adopsi($id)
    {
        $adopsi = Adopsi::select('id', 'title', 'alasan_owner', 'medical_note', 'deskripsi')->whereId($id)->firstOrFail();
        return view('admin/adopsi/show', compact('adopsi'));
    }
    public function konsultasi($id)
    {
        $konsultasi = Konsultasi::select('id', 'nama_konsultan')->whereId($id)->firstOrFail();
        return view('admin/konsultasi/show', compact('konsultasi'));
    }
    public function penitipan($id)
    {
        $adopsi = Adopsi::select('id', 'title', 'alasan_owner', 'medical_note', 'deskripsi')->whereId($id)->firstOrFail();
        return view('admin/penitipan/show', compact('penitipan'));
    }
    public function artikel($id)
    {
        $adopsi = Adopsi::select('id', 'id_kategori', 'sampul', 'judul', 'konten')->whereId($id)->firstOrFail();
        return view('admin/artikel/show', compact('artikel'));
    }
}
