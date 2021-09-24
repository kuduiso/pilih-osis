<?php

namespace App\Http\Controllers;

use App\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KandidatController extends Controller
{
    public function index() {
        $data['data_kandidat'] = Kandidat::all();
        $data['title'] = 'Data Kandidat';
        return view('admin/data_kandidat', $data);
    }

    public function tambah_kandidat(Request $request) {
        $validator = Validator::make($request->all(),[
            'no_kandidat' => 'required|integer|unique:kandidat,no_kandidat',
            'nis_kandidat' => 'required|integer|unique:kandidat,nis_kandidat',
            'nama_kandidat' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'kelas_kandidat' => 'required|string',
            'jk_kandidat' => 'required|alpha',
            'telp_kandidat' => 'required|string',
            'alamat_kandidat' => 'required|string',
            'visi_kandidat' => 'required|string',
            'misi_kandidat' => 'required|string',
            'foto_kandidat' => 'image|mimes:jpg,jpeg,png|max:2048',
        ],[
            'required' => ':attribute wajib diisi',
            'image' => 'Wajib unggah foto',
            'mimes' => 'Format foto tidak diizinkan',
            'max' => 'Ukuran foto terlalu besar',
            'string' => ':atribute diisi huruf, angka atau tanda baca',
            'alpha' => ':atribute isi dengan huruf',
            'date' => ':attribute diisi bulan/tanggal/tahun',
            'integer' => ':attribute isi dengan angka',
            'unique' => ':attribute sudah terdaftar'
        ],[
            'no_kandidat' => 'Nomor Kandidat',
            'nis_kandidat' => 'NIS',
            'nama_kandidat' => 'Nama',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'kelas_kandidat' => 'Kelas',
            'jk_kandidat' => 'Jenis Kelamin',
            'telp_kandidat' => 'HP/WA',
            'alamat_kandidat' => 'Alamat',
            'visi_kandidat' => 'Visi',
            'misi_kandidat' => 'Misi',
            'foto_kandidat' => 'Foto',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/data-kandidat/tambah')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('alert_gagal', 'Data gagal ditambahkan');
        }

        // TAKE ALL VALUE
        $no_kandidat = $request->input('no_kandidat');
        $nis_kandidat = $request->input('nis_kandidat');
        $nama_kandidat = $request->input('nama_kandidat');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $kelas_kandidat = $request->input('kelas_kandidat');
        $jk_kandidat = $request->input('jk_kandidat');
        $telp_kandidat = $request->input('telp_kandidat');
        $alamat_kandidat = $request->input('alamat_kandidat');
        $visi_kandidat = $request->input('visi_kandidat');
        $misi_kandidat = $request->input('misi_kandidat');
        $pengalaman_kandidat = $request->input('pengalaman_kandidat');

        // PROCESSING FOTO
        $foto = $request->file('foto_kandidat');
        $ext = $foto->extension();
        $nama_foto = 'foto_kandidat_'.uniqid().date("YmdHis").'.'.$ext;
        $foto->storeAs('public/foto_kandidat', $nama_foto);

        // IF UPLOAD SUCCESS
        if($foto->isValid()) {
            // SAVE TO DB AND REDIRECT
            $kandidat = Kandidat::create([
                'no_kandidat' => $no_kandidat,
                'nis_kandidat' => $nis_kandidat,
                'nama_kandidat' => $nama_kandidat,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'kelas_kandidat' => $kelas_kandidat,
                'jk_kandidat' => $jk_kandidat,
                'telp_kandidat' => $telp_kandidat,
                'alamat_kandidat' => $alamat_kandidat,
                'pengalaman_kandidat' => $pengalaman_kandidat,
                'visi' => $visi_kandidat,
                'misi' => $misi_kandidat,
                'foto' => $nama_foto,
            ]);
            $kandidat->save();
            return redirect('admin/data-kandidat')
                            ->with('alert_sukses', 'Data berhasil ditambahkan');
        }

        return redirect('/admin/data-kandidat/tambah')
                        ->withErrors($validator)
                        ->withInput()
                        ->with('alert_gagal', 'Data gagal ditambahkan');
    }

    public function view_edit_kandidat($id) {
        $kandidat = Kandidat::where('id_kandidat', $id)->first();
        $data['title'] = 'Edit Kandidat';
        $data['kandidat'] = $kandidat;
        return view('admin/data_kandidat_ubah', $data);
    }

    public function edit_kandidat(Request $request, $id_kandidat) {
        $validator = Validator::make($request->all(),[
            'no_kandidat' => 'required|integer',
            'nis_kandidat' => 'required|integer',
            'nama_kandidat' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'kelas_kandidat' => 'required|string',
            'jk_kandidat' => 'required|alpha',
            'telp_kandidat' => 'required|string',
            'alamat_kandidat' => 'required|string',
            'visi_kandidat' => 'required|string',
            'misi_kandidat' => 'required|string',
            'foto_kandidat' => 'image|mimes:jpg,jpeg,png|max:2048',
        ],[
            'required' => ':attribute wajib diisi',
            'image' => 'Wajib unggah foto',
            'mimes' => 'Format foto tidak diizinkan',
            'max' => 'Ukuran foto terlalu besar',
            'string' => ':atribute diisi huruf, angka atau tanda baca',
            'alpha' => ':atribute isi dengan huruf',
            'date' => ':attribute diisi bulan/tanggal/tahun',
            'integer' => ':attribute isi dengan angka',
        ],[
            'no_kandidat' => 'Nomor Kandidat',
            'nis_kandidat' => 'NIS',
            'nama_kandidat' => 'Nama',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'kelas_kandidat' => 'Kelas',
            'jk_kandidat' => 'Jenis Kelamin',
            'telp_kandidat' => 'HP/WA',
            'alamat_kandidat' => 'Alamat',
            'visi_kandidat' => 'Visi',
            'misi_kandidat' => 'Misi',
            'foto_kandidat' => 'Foto',
        ]);

        // TAKE ALL VALUE
        $no_kandidat = $request->input('no_kandidat');
        $nis_kandidat = $request->input('nis_kandidat');
        $nama_kandidat = $request->input('nama_kandidat');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $kelas_kandidat = $request->input('kelas_kandidat');
        $jk_kandidat = $request->input('jk_kandidat');
        $telp_kandidat = $request->input('telp_kandidat');
        $alamat_kandidat = $request->input('alamat_kandidat');
        $visi_kandidat = $request->input('visi_kandidat');
        $misi_kandidat = $request->input('misi_kandidat');
        $pengalaman_kandidat = $request->input('pengalaman_kandidat');
        $old_foto = $request->input('old_foto');

        if ($validator->fails()) {
            return redirect('/admin/data-kandidat/edit/'.$id_kandidat)
                        ->withErrors($validator)
                        ->withInput()
                        ->with('alert_gagal', 'Data gagal ditambahkan');
        }

        // CHECK IF NIS OR NUMBER KANDIDAT IS EXIST WITH ANOTHER ID KANDIDAT
        $kandidat = Kandidat::where('no_kandidat',$no_kandidat)
                                ->orWhere('nis_kandidat', $nis_kandidat)
                                ->get();
        if($kandidat) {
            foreach($kandidat as $check) {
                if($check->id_kandidat <> $id_kandidat) {
                    return redirect('/admin/data-kandidat/edit/'.$id_kandidat)
                            ->withInput()
                            ->with('alert_gagal', 'No. kandidat/NIS sudah terdaftar');
                }
            }
        }

        // PROSES IMAGE
        $foto = $old_foto;
        if ($request->hasFile('foto_kandidat')) {
            $new_foto = $request->file('foto_kandidat');
            $ext = $new_foto->extension();
            $nama_foto = 'foto_kandidat_'.uniqid().date("YmdHis").'.'.$ext;
            $new_foto->storeAs('public/foto_kandidat', $nama_foto);
            // DELETE OLD FOTO
            Storage::delete('public/foto_kandidat/'.$old_foto);
            $foto = $nama_foto;
        }

        $new_data = [
            'no_kandidat' => $no_kandidat,
            'nis_kandidat' => $nis_kandidat,
            'nama_kandidat' => $nama_kandidat,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'kelas_kandidat' => $kelas_kandidat,
            'jk_kandidat' => $jk_kandidat,
            'telp_kandidat' => $telp_kandidat,
            'alamat_kandidat' => $alamat_kandidat,
            'pengalaman_kandidat' => $pengalaman_kandidat,
            'visi' => $visi_kandidat,
            'misi' => $misi_kandidat,
            'foto' => $foto,
        ];

        // UPDATE DATA AND REDIRECT
        if($kandidat = Kandidat::where('id_kandidat', $id_kandidat)->update($new_data)) {
            return redirect('/admin/data-kandidat')
                        ->with('alert_sukses', 'Data '.$nama_kandidat.' berhasil diubah');
        } else {
            return back()->with('alert_gagal', 'Data gagal diubah');
        }

    }

    public function delete_kandidat($id) {
        $kandidat = Kandidat::find($id);
        $delete_foto = Storage::delete('public/foto_kandidat/'.$kandidat->foto);
        if($delete_foto) {
            Kandidat::destroy($id);
            return redirect('/admin/data-kandidat')
                    ->with('alert_sukses', 'Data berhasil dihapus');
        }
        return redirect('/admin/data-kandidat')
                    ->with('alert_gagal', 'Data gagal dihapus');
    }
}
