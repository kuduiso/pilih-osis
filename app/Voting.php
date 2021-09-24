<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    protected $table = 'voting';
    protected $primaryKey = 'id_voting';
    protected $fillable = ['id_kandidat', 'id_pemilih'];
    protected $guarded = [];
    protected $hidden = [];
}
