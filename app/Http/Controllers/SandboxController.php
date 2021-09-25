<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SandboxController extends Controller
{

    public function index() {
        // $voting = DB::table('kandidat')
        //             ->leftJoin('voting', 'kandidat.id_kandidat', '=', 'voting.id_kandidat')
        //             ->select(DB::raw('kandidat.foto, kandidat.no_kandidat, kandidat.nis_kandidat, kandidat.nama_kandidat, COUNT(voting.id_kandidat) as total_suara'))
        //             ->groupBy('kandidat.id_kandidat')
        //             ->get();

        // $voting = DB::table('kandidat')
        //             ->leftJoin('voting', 'kandidat.id_kandidat', '=', 'voting.id_kandidat')
        //             ->select(DB::raw('kandidat.nama_kandidat, kandidat.nis_kandidat ,COUNT(voting.id_pemilih) as total_suara'))
        //             ->groupBy('kandidat.nama_kandidat')
        //             ->get();

        // $sql = "SELECT kandidat.foto, kandidat.no_kandidat, kandidat.nis_kandidat, kandidat.nama_kandidat, COUNT(voting.id_kandidat) AS total_suara FROM kandidat LEFT JOIN voting ON kandidat.id_kandidat = voting.id_kandidat GROUP BY kandidat.id_kandidat ORDER BY total_suara DESC";

        // $voting = DB::statement('SELECT kandidat.foto, kandidat.no_kandidat, kandidat.nis_kandidat, kandidat.nama_kandidat, COUNT(voting.id_kandidat) AS total_suara FROM kandidat LEFT JOIN voting ON kandidat.id_kandidat = voting.id_kandidat GROUP BY kandidat.id_kandidat ORDER BY total_suara DESC');
        // $voting = DB::select('select * from');
        // $voting = DB::connection()->getpdo()->exec($sql);

        // $voting = DB::table('kandidat')
        //             ->select('kandidat.foto', 'kandidat.nama_kandidat', 'kandidat.nis_kandidat', 'kandidat.no_kandidat', (DB::raw('COUNT(voting.id_pemilih) as total_suara')))
        //             ->leftJoin('voting', 'kandidat.id_kandidat', '=', 'voting.id_kandidat')
        //             ->groupBy('kandidat.nama_kandidat', 'kandidat.foto', 'kandidat.nis_kandidat', 'kandidat.no_kandidat')
        //             ->orderBy('total_suara', 'desc')
        //             ->get();

        // echo "<pre>";
        // var_dump($voting);
        // echo "</pre>";

        // var_dump(Auth::guard('elector')->user());
    }
}
