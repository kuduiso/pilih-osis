<?php

namespace App\Http\Controllers;

use App\Kandidat;
use App\Pemilih;
use App\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VotingController extends Controller
{
    public function index() {
        $data['kandidat'] = Kandidat::all();
        $data['title'] = 'Pemilih';
        return view('/users/voting_main', $data);
    }

    public function profile_kandidat($id_kandidat) {
        $data['kandidat'] = Kandidat::find($id_kandidat);
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        // exit();
        $data['title'] = 'Profil Kandidat';
        return view('/users/profil_kandidat', $data);
    }

    public function action_vote(Request $request) {
        $vote = Voting::create([
            'id_kandidat' => $request->input('id_kandidat'),
            'id_pemilih' => $request->input('id_pemilih'),
        ]);

        if ($vote->save()) {
            Pemilih::where('id_pemilih', $request->input('id_pemilih'))
                            ->update(['status' => 1]);
            return redirect('/logout-elector');
        }
    }

    public function hasil_suara() {
        $voting = DB::table('voting')
                    ->leftJoin('kandidat', 'voting.id_kandidat', '=', 'kandidat.id_kandidat')
                    ->select(DB::raw('kandidat.nama_kandidat, kandidat.foto, kandidat.no_kandidat, kandidat.nis_kandidat, count(voting.id_kandidat) as total_suara'))
                    ->groupBy('voting.id_kandidat')
                    ->get();
        $data['title'] = 'Hasil Suara';
        $data['voting'] = $voting;
        return view('admin/data_hasilsuara', $data);
    }
}
