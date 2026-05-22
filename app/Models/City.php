<?php

namespace App\Models;

use Illuminate\database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use Hasfactory;

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
