<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    protected $fillable = [
        'restaurant_id'
    ];
    
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function jours()
    {
        return $this->hasMany(Jour::class);
    }
}
