<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'heure_debut',
        'heure_fin',
        'est_ouvert',
        'horaire_id'
    ];

    public function horaire()
    {
        return $this->belongsTo(Horaire::class);
    }

    protected $casts = [
        'est_ouvert'  => 'boolean',
        'heure_debut' => 'string',
        'heure_fin'   => 'string',
    ];



}
