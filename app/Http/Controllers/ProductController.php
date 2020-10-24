<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

  public function viewAllProduct()
  {
    $products = Product::orderBy('created_at', 'DESC');
    $products = $this->filter($products);
    $products = $products->get();

    return view('all-product')->with('products', $products);
  }

  private function filter($products)
  {
    return $products
      ->when(request('id'), function ($q) {
        $q->where('id', request('id'));
      })
      ->when(request('name'),  function ($q) {
        $q->where('name', 'LIKE', '%' . request('name') . '%');
      })
      ->when(request('min_price'),  function ($q) {
        $q->where('price', '>=', request('min_price'));
      })
      ->when(request('max_price'),  function ($q) {
        $q->where('price', '<=', request('max_price'));
      })
      ->when(request('category'),  function ($q) {
        $q->where('category', request('category'));
      });
  }

  public function editProduct(Request $request, $id)
  {
    $product = Product::where('id', $id)->first();

    return view('edit-product')->with('product', $product);
  }

  public function updateProduct(Request $request, $id)
  {
    $product = Product::where('id', $id)->first();

    $product->name = $request->name;
    $product->price = $request->price;
    $product->category = $request->category;

    $product->save();

    return redirect()->route('products.all');
  }

  public function addNewproduct(Request $request)
  {
    Product::create([
      'name' => $request->name,
      'price' => $request->price,
      'category' => $request->category,
    ]);

    return redirect()->route('products.all');
  }

  public function deleteProduct(Request $request)
  {
    Product::where('id', $request->product_id)->delete();

    return redirect()->route('products.all');
  }
}
