<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prix',
        'menu_id',
        'image'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

}
