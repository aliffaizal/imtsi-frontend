<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keanggotaan extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'username', 'jabatan_id', 'divisi_id', 'no_anggota'
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id', 'id');
    }

    public function divisi(){
        return $this->belongsTo(Divisi::class, 'divisi_id', 'id');
    }


}
