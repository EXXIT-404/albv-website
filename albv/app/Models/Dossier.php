<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    protected $fillable = [
        'user_id',
        'ecart_pupillaire_gauche',
        'ecart_pupillaire_droit',
        'monture_choisie',
        'hauteur_position_p',
        'verres_choisis',
        'prix'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
