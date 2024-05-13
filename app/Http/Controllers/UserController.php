<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        // Validasi data yang diterima dari form registrasi
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birthdate' => ['required', 'date'],
            'number_phone' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:laki-laki,perempuan'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'birthdate' => $request->birthdate,
            'number_phone' => $request->number_phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'role' => 'user', // Atur peran menjadi 'user' untuk pengguna yang terdaftar
        ]);

        // // Jika berhasil membuat pengguna, kembalikan respons dengan pesan sukses
        // if ($user) {
        //     return response()->json(['message' => 'Registrasi berhasil'], 200);
        // }

        // // Jika gagal membuat pengguna, kembalikan respons dengan pesan error
        // return response()->json(['message' => 'Registrasi gagal'], 500);
        return redirect('/login');
    }

    public function homepage()
    {
        $user = Auth::user();
        return view('user.homepage', ['user' => $user]);
    }

    // Fungsi untuk menampilkan form ganti password
    public function showChangePasswordForm()
    {
        return view('user.password');
    }

    // Fungsi untuk menyimpan password baru setelah diubah
    public function changePassword(Request $request)
    {
        // Validasi data input
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Mendapatkan informasi pengguna yang sedang login
        $user = Auth::user();

        // Memeriksa apakah kata sandi saat ini cocok dengan yang dimasukkan pengguna
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Kata sandi saat ini salah.']);
        }

        // Mengupdate kata sandi pengguna
        tap($user)->update([
            'password' => Hash::make($request->new_password)
        ]);

        // Redirect ke halaman informasi akun setelah berhasil mengganti kata sandi
        return redirect()->route('user.profileAkun')->with('success', 'Kata sandi berhasil diubah.');
    }

    public function informasiDonasi()
    {
        return view('user.informasiDonasi');
    }

    public function profileAkun()
    {
        $user = Auth::user();
        return view('user.profileAkun', ['user' => $user]);
    }

    public function inbox()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil semua feedback yang dimiliki oleh user yang sedang login
        $feedbacks = Feedback::where('user_id', $user->id)->get();

        // Kembalikan view inbox dengan feedback yang dimiliki pengguna
        return view('user.inbox', compact('feedbacks'));
    }

    public function showFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        $sumbangan = $feedback->sumbangan;
        $penggalangan = $sumbangan ? $sumbangan->penggalanganDana : null;
        $judulPenggalangan = $penggalangan ? $penggalangan->judul : 'Penggalangan Tidak Ditemukan';
        return view('user.inboxDetail', compact('feedback', 'judulPenggalangan'));
    }

    public function deleteFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
        return redirect()->route('user.inbox')->with('success', 'Pesan berhasil dihapus.');
    }

    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect('login'); // Arahkan ke halaman index setelah logout
    }
}
