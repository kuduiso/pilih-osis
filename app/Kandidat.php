<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    protected $table = 'kandidat';
    protected $primaryKey = 'id_kandidat';
    protected $fillable = [
        'no_kandidat',
        'nis_kandidat',
        'nama_kandidat',
        'tempat_lahir',
        'tanggal_lahir',
        'kelas_kandidat',
        'jk_kandidat',
        'telp_kandidat',
        'alamat_kandidat',
        'pengalaman_kandidat',
        'visi',
        'misi',
        'foto'
    ];
    protected $guarded = [];
    protected $hidden = [];
}
