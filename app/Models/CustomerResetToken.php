<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerResetToken extends Model
{
    use HasFactory;
    protected $table='customer_reset_token';
    protected $fillable = [
        'email',
        'token'
    ];
}
