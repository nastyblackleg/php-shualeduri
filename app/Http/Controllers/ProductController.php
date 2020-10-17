<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

  public function createProduct()
  {
    $product = new Product();
    $product->name = 'New Product Name - ' . uniqid();
    $product->price = rand(100, 1000);
    $product->category = 'Computers';

    $product->save();

    return $product;
  }

  public function addNewproduct(Request $request)
  {
    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->category = $request->category;
    $product->save();

    return redirect('/product/all');
  }

  public function viewAllProduct()
  {
    $products = Product::orderBy('created_at', 'DESC')->get();

    return view('all-product')->with('products', $products);
  }
}
