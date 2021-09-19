<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SandboxController extends Controller
{

    public function index() {
        // echo Auth::logout();
        // echo Auth::id();
        echo "<pre>";
        var_dump(Auth::user());
        // var_dump(Auth::viaRemember());
        echo "</pre>";

        // User::where('id_user', 1)
        //     ->update(['created_at' => Carbon::now()->toDateTimeString()]);

        // echo Auth::check();
        // echo Hash::make('admin2021');
        // if (Auth::attempt(['email' => $email, 'password' => $password], $remember_me)) {
        //     echo "<pre>";
        //     var_dump(Auth::user());
        //     echo "</pre>";
        // }
    }
}
