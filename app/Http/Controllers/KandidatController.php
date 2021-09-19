<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index() {
        return view('admin/data_kandidat', ['title' => 'Data Kandidat']);
    }

    public function tambah_kandidat() {
        
    }
}
