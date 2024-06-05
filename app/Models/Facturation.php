<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facturation extends Model
{
    use HasFactory;

    protected $fillable = [
        'additionalCharges',
        'totalAmount',
        'repairId',
    ];
    protected $table = 'facturations';
}
