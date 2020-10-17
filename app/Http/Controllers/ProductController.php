<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function createProduct()
  {
  }

  public function viewAllProduct()
  {
    return view('all-product');
  }
}
