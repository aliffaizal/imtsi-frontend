<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
    use SoftDeletes;

    protected $table = 'artikel';
    
    protected $fillable = [
        'title', 'slug', 'content', 'thumbnail'
    ];

    protected $hidden = [

    ];

    //relation antara table artikel dengan table users
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id'); 
    } 
}
