<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frais extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'admission_id',
        'amount',
        'currency',
        'status',
    ];

    public function admission()
    {
        return $this->belongsTo(Admission::class);
    }
}
