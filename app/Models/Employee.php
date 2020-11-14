<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $fillable = ['name', 'lastname', 'birthdate', 'personal_id', 'salary'];
    public $timestamps = false;
}
