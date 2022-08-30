<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model{
    protected $table = 'artikel';

    function penulis(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
