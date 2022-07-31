<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_skill extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\user');
    }
    public function skill(){
        return $this->belongsTo('App\Models\skill');
    }

}

