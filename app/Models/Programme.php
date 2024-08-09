<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'description',
    ];

    public function admission()
    {
        return $this->hasMany(Admission::class);
    }

   
}
