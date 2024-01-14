<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function index()
  {
    return response()->view('auth.login');
  }

  public function login(Request $request)
  {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      // Mendapatkan peran pengguna yang telah berhasil login
      $user = Auth::user();

      // Mengecek peran pengguna dan mengarahkannya ke halaman yang sesuai
      if ($user->role === 'admin') {
        toast('Berhasil Masuk sebagai Admin!', 'success');
        return redirect('/admin');
      } else {
        toast('Berhasil Masuk!', 'success');
        return redirect('/');
      }
    }

    toast('Invalid Credentials', 'error');
    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.',
    ]);
  }


  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
  }
}
