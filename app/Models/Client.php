<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'adress',
        'phoneNumber',
    ];
    protected $table = 'clients';

    /*public function user()
    {
        return $this->belongsTo(User::class,'user');
    }*/


}

