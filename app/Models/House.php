<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $table = "house";


    public function user()
    {
        return $this->belongsTo('\App\Models\User','user_id','id');
    }

    public function image()
    {
        return $this->hasMany('\App\Models\HouseImage', 'house_id', 'id');
    }

    public function bills ()
    {
        return $this->hasMany('\App\Models\Bill', 'house_id', 'id');
    }
    public static function findOrFail($id)
    {

    }
}
