<?php

namespace App\Http\Controllers;

use App\PenggalanganDana;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PenggalanganDanaController extends Controller
{
    public function penggalangan()
    {
        // Mengambil semua penggalangan yang tersedia dan belum melewati tanggal selesai
        $penggalangan = PenggalanganDana::where('status', 'ongoing')
            ->whereDate('tanggal_selesai', '>=', Carbon::now())
            ->get();

        // Mengirim data penggalangan ke view
        return view('admin.penggalangan', compact('penggalangan'));
    }

    public function createPenggalangan()
    {
        return view('admin.createPenggalangan');
    }

    public function storePenggalangan(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'target_dana' => 'required|numeric|min:0',
            'tanggal_selesai' => 'required|date|after:today',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Tambahkan aturan validasi untuk gambar
        ]);

        // Simpan gambar yang diunggah
        $gambarPath = $request->file('gambar')->store('images');

        // Buat penggalangan dana baru
        PenggalanganDana::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'target_dana' => $request->target_dana,
            'tanggal_selesai' => $request->tanggal_selesai,
            'gambar' => $gambarPath,
            'status' => 'ongoing', // Set status menjadi 'ongoing'
        ]);

        // Redirect kembali ke halaman penggalangan dengan pesan sukses
        return redirect()->route('admin.penggalangan')->with('success', 'Penggalangan dana berhasil dibuat!');
    }

    public function searchPenggalangan(Request $request)
    {
        // Ambil kata kunci pencarian dari input form
        $keyword = $request->input('search');

        // Lakukan pencarian penggalangan berdasarkan judul
        $penggalangan = PenggalanganDana::where('judul', 'like', '%' . $keyword . '%')->get();

        // Kirim data hasil pencarian ke view
        return view('admin.penggalangan', compact('penggalangan'));
    }

    public function destroy($id)
    {
        // Temukan penggalangan dengan ID yang diberikan
        $penggalangan = PenggalanganDana::findOrFail($id);

        // Hapus penggalangan
        $penggalangan->delete();

        // Redirect kembali ke halaman penggalangan dengan pesan sukses
        return redirect()->route('admin.penggalangan')->with('success', 'Penggalangan dana berhasil dihapus!');
    }
}
