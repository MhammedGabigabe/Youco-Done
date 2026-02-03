<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCuisine extends Model
{
    protected $fillable = [
        'nom'
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class)
                    ->withTimestamps();
    }

}
