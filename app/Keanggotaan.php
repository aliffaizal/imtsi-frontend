<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keanggotaan extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'username', 'jabatan_id', 'divisi_id', 'no_anggota'
    ];
}
