<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'age',
        'gender'
    ];
}
