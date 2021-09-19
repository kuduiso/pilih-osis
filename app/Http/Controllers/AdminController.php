<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('admin/dashboard', ['title' => 'Dashboard Admin']);
    }

    public function data_admin() {
        $table_admin = User::all();
        $data = [
            'title' => 'Data Admin',
            'data_admin' => $table_admin,
        ];
        return view('admin/data_admin', $data);
    }

    public function add_admin(Request $request) {
        $validator = Validator::make($request->all(),[
            'nama_user' => 'required',
            'email' => 'required|email:filter|unique:users,email',
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password',
        ],
        [
            'required' => ':attribute wajib diisi',
            'unique' => ':attribute sudah terdaftar',
            'email' => ':attribute tidak valid',
            'min' => ':attribute minimal 8 karakter',
            'same' => ':attribute tidak sesuai'

        ],
        [
            'nama_user' => 'Nama',
            'email' => 'E-mail',
            'password' => 'Password',
            'password_confirm' => 'Konfirmasi Password',
        ]);

        if($validator->fails()) {
            return redirect('/admin/data-admin/tambah')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('alert_gagal', 'Data gagal ditambahkan');

        } else {
            $user = User::create([
                'nama_user' => $request->input('nama_user'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => 'admin'
            ]);

            $user->save();
            return redirect('/admin/data-admin')
                        ->with('alert_sukses', 'Data berhasil ditambahkan');
        }
    }

    public function delete_admin($id) {
        $check_admin = User::find($id);
        if($check_admin->role === 'master') {
            return redirect('/admin/data-admin')
                            ->with('alert_gagal', 'Hapus gagal, master admin tidak boleh dihapus');
        } else {
            if (Auth::user()->role <> 'master') {
                return redirect('/admin/data-admin')
                            ->with('alert_gagal', 'Akses dibatasi');
            } else {
                $delete = User::destroy($check_admin->id_user);
                if ($delete) {
                    return redirect('/admin/data-admin')
                            ->with('alert_sukses', 'Data berhasil dihapus');
                } else {
                    return redirect('/admin/data-admin')
                            ->with('alert_gagal', 'Data gagal dihapus');
                }
            }
        }
    }

    public function view_edit_admin($id) {
        $master_admin = User::where('role', 'master')->first();
        // IF NOT ADMIN MASTER
        if ((int)$id === $master_admin->id_user && Auth::id() <> $master_admin->id_user) {
            return redirect('/admin/data-admin')
                        ->with('alert_gagal', 'Data master tidak boleh diubah');
        } else {
        // IF GENERAL ADMIN
            if (Auth::id() <> (int)$id && Auth::user()->role <> 'master') {
                // IF LOGGED IN ADMIN ISN'T MASTER ADMIN AND EDIT ANOTHER GENERAL ADMIN
                return back()->with('alert_gagal', 'Akses dibatasi');
            } else {
                $user = User::find($id);
                $data = [
                    'title' => 'Edit Admin',
                    'user'  => $user
                ];
                return view('/admin/data_admin_ubah', $data);
            }
        }
    }

    public function edit_admin(Request $request, $id) {
        $data_ubah = $request->input();
        // GET ALL NOT EMPTY DATA
        $temp_data = [];
        foreach(array_keys($data_ubah) as $key) {
            if ($key === '_method' || $key === '_token' || $data_ubah[$key] === '' || is_null($data_ubah[$key]) === true ) {
                continue;
            }
            $temp_data[$key] = $data_ubah[$key];
        }
        // CHECK IF EMAIL EXIST
        if (array_key_exists('email', $temp_data)) {
            $check_email = User::firstWhere('email', $temp_data['email']);
            if($check_email) {
                if($check_email->id_user <> $id) {
                    return back()->with('alert_gagal', 'E-mail sudah digunakan');
                }
            }
        }
        // CHECK IF CHANGE PASSWORD
        if (array_key_exists('password_new', $temp_data)) {
            $temp_data['password'] = Hash::make($temp_data['password_new']);
            unset($temp_data['password_new']);
        }

        // UPDATE AND REDIRECT
        if (User::where('id_user', $id)->update($temp_data)) {
            return redirect('/admin/data-admin')
                        ->with('alert_sukses', 'Data '.$request->input('nama_user').' berhasil diubah');
        } else {
            return back()->with('alert_gagal', 'Data gagal diubah');
        }
    }
}
