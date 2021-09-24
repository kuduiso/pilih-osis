<?php

namespace App\Http\Controllers;

use App\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function index() {
        if(Auth::guard('web')->check()) {
            return redirect('/admin/dashboard');
        } else if (Auth::guard('elector')->check()) {
            return redirect('/voting');
        } else {
            abort(404);
        }
    }

    public function check_login_admin(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email:filter',
            'password' => 'required',
        ],
        [
            'required' => ':attribute wajib diisi',
            'email' => ':attribute tidak valid',

        ],
        [
            'email' => 'E-mail',
            'password' => 'Password'
        ]);

        if ($validator->fails()) {
            return redirect('/login-admin')
                        ->withErrors($validator)
                        ->withInput();
        }

        $email = $request->input('email');
        $password = $request->input('password');
        $remember_me = $request->input('remember_me') ? true : false;

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember_me)) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/login-admin')
                            ->with('status', 'E-mail/Password salah')
                            ->withInput();
        }
    }

    public function check_login_voting(Request $request) {
        $nis_pemilih = $request->input('nis_pemilih');
        $no_token = $request->input('no_token');
        $pemilih = Pemilih::where([
                        'nis_pemilih' => $nis_pemilih,
                        'no_token' => $no_token,
                        'status' => 0
                        ])->first();
        if ($pemilih) {
            $request->session()->put('user_elector', $pemilih);
            $request->session()->put('login_elector', true);
            return redirect('/voting');
        } else {
            return redirect('/')
                        ->with('alert_gagal', 'Anda sudah memilih');
        }
    }

    public function logout_admin() {
        Auth::logout();
        return redirect('/login-admin');
    }

    public function logout_elector(Request $request) {
        $request->session()->forget('user_elector');
        $request->session()->forget('login_elector');
        $request->session()->flush();
        return redirect('/');
    }
}
