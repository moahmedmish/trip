<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    protected $guard = 'admin';
    
    use HasFactory;
    protected $fillable = [
        'email','password', 'creadet_at ','update_at',
    ];
}
