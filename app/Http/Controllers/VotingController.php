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
        $voting = DB::table('kandidat')
                    ->select('kandidat.foto', 'kandidat.nama_kandidat', 'kandidat.nis_kandidat', 'kandidat.no_kandidat', (DB::raw('COUNT(voting.id_pemilih) as total_suara')))
                    ->leftJoin('voting', 'kandidat.id_kandidat', '=', 'voting.id_kandidat')
                    ->groupBy('kandidat.nama_kandidat', 'kandidat.foto', 'kandidat.nis_kandidat', 'kandidat.no_kandidat')
                    ->orderBy('total_suara', 'desc')
                    ->get();
        $data['title'] = 'Hasil Suara';
        $data['voting'] = $voting;
        return view('admin/data_hasilsuara', $data);
    }
}
