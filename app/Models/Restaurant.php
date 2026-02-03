<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'nom',
        'localisation',
        'capacite',
        'est_actif',
        'user_id'
    ];

    protected $casts = [
        'est_actif' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function clientsFavoris()
    {
        return $this->belongsToMany(User::class)
                    ->withTimestamps();
    }

    public function typesCuisines()
    {
        return $this->belongsToMany(TypeCuisine::class)
                    ->withTimestamps();
    }

    public function horaire()
    {
        return $this->hasOne(Horaire::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

}
