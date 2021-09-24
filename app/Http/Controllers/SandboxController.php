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
        echo "<pre>";
        // var_dump(Auth::guard('elector')->user());
        var_dump(Session('user_elector')->id_pemilih);
        echo "</pre>";
    }
}
