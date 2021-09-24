<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Pemilih extends Authenticatable
{
    protected $table = 'pemilih';
    protected $primaryKey = 'id_pemilih';
    protected $fillable = [
        'nis_pemilih',
        'nama_pemilih',
        'kelas_pemilih',
        'jk_pemilih',
        'no_token',
        'status',
    ];
    protected $guarded = [];
    protected $hidden = [];
}
