<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [

        'email',
        'password'
    ];

    public function demandeur()
    {
        return $this->belongsTo(Demandeur::class);
    }

    // Accesseur pour récupérer l'email via la relation
    public function getEmailAttribute()
    {
        return $this->demandeur->email; // Supposons que la colonne dans `demandeur` est 'email'
    }
}
