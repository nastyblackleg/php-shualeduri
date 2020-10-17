<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $fillable = ['name', 'category', 'price'];
  // public $guarded = [];
  // public $timestamps = false;
  // public $table = 'products';
}
