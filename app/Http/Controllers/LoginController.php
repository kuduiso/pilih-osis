<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function index() {
        if(Auth::user()->role === 'master' || Auth::user()->role === 'admin') {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/voting');
        }
    }

    public function check_login_admin(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email:filter',
            'password' => 'required|min:8',
        ],
        [
            'required' => ':attribute wajib diisi',
            'email' => ':attribute tidak valid',
            'min' => ':attribute minimal 8 karakter'

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

    public function check_login_voting() {

    }

    public function logout() {
        if(Auth::user()->role === 'master' || Auth::user()->role === 'admin') {
            Auth::logout();
            return redirect('/login-admin');
        } else {
            return redirect('/login');
        }
    }
}
