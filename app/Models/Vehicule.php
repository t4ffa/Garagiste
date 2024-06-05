<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicules extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'model',
        'fuelType',
        'registration',
        'photos',
        'clientID',
    ];
    protected $table = 'vehicules';
}
