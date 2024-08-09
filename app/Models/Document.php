<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission_id', 'type', 'chemin_fichier',
    ];

    public function admission()
    {
        return $this->belongsTo(Admission::class);
    }
}
