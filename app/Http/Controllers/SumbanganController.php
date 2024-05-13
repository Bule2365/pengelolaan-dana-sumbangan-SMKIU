<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\PenggalanganDana;
use App\Sumbangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SumbanganController extends Controller
{
    public function listDonasi()
    {
        // Ambil data penggalangan yang siap didonasikan dari database
        $penggalangan = PenggalanganDana::where('status', 'ongoing')
            ->whereDate('tanggal_selesai', '>=', now()) // Tampilkan hanya yang tanggal selesai masih belum lewat
            ->get();

        // Tampilkan halaman untuk melakukan donasi dan kirimkan data penggalangan ke view
        return view('user.listDonasi')->with('penggalangan', $penggalangan);
    }

    public function donasi($id)
    {
        // Temukan penggalangan berdasarkan ID
        $penggalangan = PenggalanganDana::findOrFail($id);

        // Hitung sisa dana yang belum terpenuhi
        $sisa = max(0, $penggalangan->target_dana - $penggalangan->total_donation);

        // Tampilkan halaman detail donasi untuk penggalangan yang dipilih
        return view('user.donasi')->with('penggalangan', $penggalangan)->with('sisa', $sisa);
    }

    public function showDonasi($id)
    {
        // Temukan penggalangan berdasarkan ID
        $penggalangan = PenggalanganDana::findOrFail($id);

        // Tampilkan halaman detail donasi untuk penggalangan yang dipilih
        return view('user.donasi')->with('penggalangan', $penggalangan);
    }

    public function store(Request $request)
    {
        // Validasi data sumbangan
        $request->validate([
            'jumlah_uang' => 'required|numeric|min:0|max:9999999999', // Maksimal 10 angka
            'penggalangan_dana_id' => 'required|exists:penggalangan_danas,id',
        ]);

        // Temukan penggalangan
        $penggalangan = PenggalanganDana::findOrFail($request->penggalangan_dana_id);

        // Hitung total donasi setelah penambahan
        $total_donasi_baru = $penggalangan->total_donation + $request->jumlah_uang;

        // Periksa apakah total donasi melebihi target dana
        if ($total_donasi_baru >= $penggalangan->target_dana) {
            // Jika melebihi, update total donasi menjadi target dana
            $penggalangan->total_donation = $penggalangan->target_dana;

            // Hitung sisa donasi yang dikembalikan
            $sisa = $total_donasi_baru - $penggalangan->target_dana;

            // Simpan perubahan pada penggalangan
            $penggalangan->save();

            // Simpan data sumbangan
            $sumbangan = Sumbangan::create([
                'user_id' => Auth::id(),
                'penggalangan_dana_id' => $request->penggalangan_dana_id,
                'jumlah_uang' => $request->jumlah_uang,
            ]);

            // Simpan feedback untuk user
            Feedback::create([
                'user_id' => Auth::id(),
                'feedback_text' => 'Terima kasih atas donasi Anda pada penggalangan ' . $penggalangan->judul . '.',
                'sumbangan_id' => $sumbangan->id,
            ]);

            // Redirect dengan pesan sukses dan sisa donasi
            return redirect()->back()->with('success', 'Donasi berhasil disimpan! Sisa donasi sebesar Rp ' . $sisa);
        }

        // Jika total donasi belum melebihi target dana, lanjutkan seperti biasa
        $sumbangan = Sumbangan::create([
            'user_id' => Auth::id(),
            'penggalangan_dana_id' => $request->penggalangan_dana_id,
            'jumlah_uang' => $request->jumlah_uang,
        ]);

        // Update total_donation di penggalangan
        $penggalangan->total_donation = $total_donasi_baru;
        $penggalangan->save();

        // Simpan feedback untuk user
        Feedback::create([
            'user_id' => Auth::id(),
            'feedback_text' => 'Terima kasih atas donasi Anda pada penggalangan ' . $penggalangan->judul . '.',
            'sumbangan_id' => $sumbangan->id,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Donasi berhasil disimpan!');
    }
}
