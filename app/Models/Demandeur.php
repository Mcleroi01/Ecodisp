<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'prenom', 'email', 'telephone', 'adresse', 'date_naissance',
        'sexe', 'nationalité', 'type_utilisateur',
    ];

    public function admission()
    {
        return $this->hasMany(Admission::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
