<?php

namespace App\Models;

use Illuminate\database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use Hasfactory, SoftDeletes;

    protected $fillable = [
        'image',
        'name',
        'slug',
    ];

    public function boardingHouses()
    {
        return $this->hasMany(BoardingHouse::class);
    }
}
