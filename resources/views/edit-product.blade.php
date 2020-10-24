@extends('layouts.main')


@section('content')
<form action="{{ route('products.update', ['id' => $product->id]) }}" method="post">
  @csrf
  <div class="card">
    <div class="card-header">
      <h3>Edit Product</h3>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
      </div>
      <div class="form-group">
        <label for="name">Category</label>
        <input type="text" class="form-control" name="category" id="category" value="{{ $product->category }}">
      </div>
      <div class="form-group">
        <label for="name">Price</label>
        <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}">
      </div>
    </div>
    <div class="card-footer">
      <button class="btn btn-success">Save</button>
      <button type="button" class="btn btn-danger">Cancel</button>
    </div>
  </div>
</form>

@endsection
