<?php

namespace App\Http\Controllers;

use App\PenggalanganDana;
use App\Sumbangan;
use App\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $total_penggalangan = PenggalanganDana::count();

        $admins = User::where('role', 'admin')->get();
        $totalAdmins = $admins->count(); // Menghitung jumlah admin

        $users = User::where('role', 'user')->get();
        $totalUsers = $users->count(); // Menghitung jumlah user

        return view('admin.dashboard', compact('admins', 'total_penggalangan', 'totalAdmins', 'totalUsers'));
    }

    public function dataUser(Request $request)
    {
        $admins = User::where('role', 'admin')->get();
        $totalAdmins = $admins->count(); // Menghitung jumlah admin

        $users = User::where('role', 'user')->get();
        $totalUsers = $users->count(); // Menghitung jumlah user

        $search = $request->input('search');

        $users = User::where('role', 'user')
            ->where('name', 'LIKE', "%$search%")
            ->get();

        return view('admin.dataUser', compact('admins', 'totalAdmins', 'users', 'totalUsers'));
    }

    public function informasiAdmin()
    {
        $admins = User::where('role', 'admin')->get();
        $totalAdmins = $admins->count(); // Menghitung jumlah admin

        $users = User::where('role', 'user')->get();
        $totalUsers = $users->count(); // Menghitung jumlah user

        return view('admin.informasi_admin', compact('admins', 'totalAdmins', 'totalUsers'));
    }

    public function transaksi()
    {
        // Ambil semua data donasi dari model Sumbangan
        $donations = Sumbangan::all();

        // Kirim data ke view laporan transaksi donasi
        return view('admin.transaksi', compact('donations'));
    }

    public function cetakLaporanSemua()
    {
        // Ambil semua data donasi dari model Sumbangan
        $donations = Sumbangan::all();

        // Kirim data ke view laporan transaksi donasi
        $pdf = PDF::loadView('admin.transaksi', compact('donations'))->setPaper('a4', 'landscape');

        // Download file PDF laporan transaksi
        return $pdf->download('laporan_transaksi_semua.pdf');
    }

    public function cetakLaporanSatu($id)
    {
        // Ambil data transaksi berdasarkan ID
        $donation = Sumbangan::findOrFail($id);

        // Kirim data ke view laporan transaksi satu
        $pdf = PDF::loadView('admin.transaksi_single', compact('donation'))->setPaper('a4', 'portrait');

        // Download file PDF laporan transaksi
        return $pdf->download('laporan_transaksi_' . $id . '.pdf');
    }


    public function showTransaction($id)
    {
        // Ambil data transaksi berdasarkan ID
        $donation = Sumbangan::find($id);

        // Kirim data ke view laporan transaksi satu
        return view('admin.transaksi_single', compact('donation'));
    }
}
