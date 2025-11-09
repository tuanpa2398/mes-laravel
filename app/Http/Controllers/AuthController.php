<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.login.index');
    }

    public function submitLogin(Request $request)
    {
        $verify = Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if ($verify) {
            $request->session()->regenerate();
            return redirect()->intended('')->with('success', 'Đăng nhập thành công!');
        }

        return back()->with('error', 'Sai mã nhân viên hoặc mật khẩu.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Đã đăng xuất.');
    }
}
