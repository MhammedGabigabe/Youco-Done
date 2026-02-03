<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'url',
        'restaurant_id'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
