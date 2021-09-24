<?php

namespace App\Http\Controllers;

use App\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PemilihController extends Controller
{
    public function index() {
        $data['data_pemilih'] = Pemilih::all();
        $data['title'] = 'Data Pemilih';
        return view('admin/data_pemilih', $data);
    }

    public function tambah_pemilih(Request $request) {
        $validator = Validator::make($request->all(), [
            'nis_pemilih' => 'required|integer|unique:pemilih,nis_pemilih',
            'nama_pemilih' => 'required|string',
            'kelas_pemilih' => 'required|string',
            'jk_pemilih' => 'required|alpha',
        ],
        [
            'required' => ':attribute wajib diisi',
            'integer' => ':attribute diisi dengan angka',
            'string' => ':attribute diisi huruf, angka atau tanda baca',
            'alpha' => ':atribute isi dengan huruf',
            'unique' => ':attribute sudah terdaftar'
        ],
        [
            'nis_pemilih' => 'NIS',
            'nama_pemilih' => 'Nama',
            'kelas_pemilih' => 'Kelas',
            'jk_pemilih'    => 'Jenis Kelamin'
        ]);

        $nis_pemilih = $request->input('nis_pemilih');
        $nama_pemilih = $request->input('nama_pemilih');
        $kelas_pemilih = $request->input('kelas_pemilih');
        $jk_pemilih = $request->input('jk_pemilih');

        if ($validator->fails()) {
            return redirect('/admin/data-pemilih/tambah')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('alert_gagal', 'Data gagal ditambahkan');
        }

        // GENERATED IN BACKEND
        $no_token = $this->_secure_random_string(6);

        // BELUM PILIH - SUDAH PILIH
        $status = 0;

        // INSERT TO DB AND REDIRECT
        $pemilih = Pemilih::create([
            'nis_pemilih' => $nis_pemilih,
            'nama_pemilih' => $nama_pemilih,
            'kelas_pemilih' => $kelas_pemilih,
            'jk_pemilih' => $jk_pemilih,
            'no_token'  => $no_token,
            'status'    => $status,
        ]);
        $pemilih->save();
        return redirect('admin/data-pemilih')
                            ->with('alert_sukses', 'Data berhasil ditambahkan');
    }

    public function view_edit_pemilih($id) {
        $pemilih = Pemilih::where('id_pemilih', $id)->first();
        $data['title'] = 'Edit Pemilih';
        $data['pemilih'] = $pemilih;
        return view('admin/data_pemilih_ubah', $data);
    }

    public function edit_pemilih(Request $request, $id_pemilih) {
        $validator = Validator::make($request->all(), [
            'nis_pemilih' => 'required',
            'nama_pemilih' => 'required|string',
            'kelas_pemilih' => 'required|string',
            'jk_pemilih' => 'required|alpha',
        ],
        [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute diisi huruf, angka atau tanda baca',
            'alpha' => ':attribute isi dengan huruf',
        ],
        [
            'nis_pemilih' => 'NIS',
            'nama_pemilih' => 'Nama',
            'kelas_pemilih' => 'Kelas',
            'jk_pemilih' => 'Jenis Kelamin',
        ]);

        $nis_pemilih = $request->input('nis_pemilih');
        $nama_pemilih = $request->input('nama_pemilih');
        $kelas_pemilih = $request->input('kelas_pemilih');
        $jk_pemilih = $request->input('jk_pemilih');

        if ($validator->fails()) {
            return redirect('/admin/data-pemilih/edit/'.$id_pemilih)
                        ->withErrors($validator)
                        ->withInput()
                        ->with('alert_gagal', 'Data gagal ditambahkan');
        }

        // CHECK IF NIS NOT EQUAL WITH OTHER NIS
        $other_pemilih = Pemilih::where('nis_pemilih', $nis_pemilih)->first();
        if ($other_pemilih) {
            if ($other_pemilih->id_pemilih <> $id_pemilih) {
                return redirect('/admin/data-pemilih/edit/'.$id_pemilih)
                        ->withErrors($validator)
                        ->withInput()
                        ->with('alert_gagal', 'NIS '.$nis_pemilih.' sudah terdaftar');
            }
        }

        $new_data = [
            'nis_pemilih' => $nis_pemilih,
            'nama_pemilih' => $nama_pemilih,
            'kelas_pemilih' => $kelas_pemilih,
            'jk_pemilih' => $jk_pemilih,
        ];

        // UPDATE DATA AND REDIRECT
        if(Pemilih::where('id_pemilih', $id_pemilih)->update($new_data)) {
            return redirect('/admin/data-pemilih')
                        ->with('alert_sukses', 'Data '.$nama_pemilih.' berhasil diubah');
        } else {
            return back()->with('alert_gagal', 'Data gagal diubah');
        }
    }

    public function delete_pemilih($id) {
        $delete = Pemilih::destroy($id);
        if ($delete) {
            return redirect('/admin/data-pemilih')
                    ->with('alert_sukses', 'Data berhasil dihapus');
        } else {
            return redirect('/admin/data-pemilih')
                    ->with('alert_gagal', 'Data gagal dihapus');
        }
    }

    private function _secure_random_string($length) {
        $random_string = '';
        for($i = 0; $i < $length; $i++) {
            $number = random_int(0, 36);
            $character = base_convert($number, 10, 36);
            $random_string .= $character;
        }

        return strtoupper($random_string);
    }
}
