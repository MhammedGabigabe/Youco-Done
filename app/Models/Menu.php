<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'nom',
        'restaurant_id'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function plats()
    {
        return $this->hasMany(Plat::class);
    }
}
