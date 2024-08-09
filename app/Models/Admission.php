<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable = [
        'demandeur_id', 'programme_id',  'statut', 'date_demande','fee'
    ];

    public function demandeur()
    {
        return $this->belongsTo(Demandeur::class);
    }

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function frais()
    {
        return $this->hasOne(Frais::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
