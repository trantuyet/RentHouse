<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $table = "houses";
    protected $fillable = [
        "name",
        "pricePerDay",
        "address",
        "numberOfBedroom",
        "numberOfBathroom",
        "desc",
        "image",
        "user_id",
        "category_id",
        "status"
    ];

    public function getCategorys(){
        return ($this->category_id == "1") ? 'Chung cư' : 'Nhà Đất';
    }

    public function getStatus()
    {
        return ($this->status == "1") ? 'Cho thuê' : 'Không cho thuê';
    }

    public function user()
    {
        return $this->belongsTo('\App\Models\User', 'user_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'house_id', 'id');
    }

    public function bills()
    {
        return $this->hasMany('\App\Models\Bill', 'house_id', 'id');
    }

    public function house(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('\App\Models\Category', 'category_id', 'id');
    }
}
