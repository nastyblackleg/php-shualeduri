@extends('layouts.main')


@section('content')
<div class="card">
  <div class="card-header">
    <h4>All Product</h4>
  </div>
  <div class="card-body">
   
      
      <table class="table" cellpadding="10" >
        <form action="{{ route('products.all') }}">
          <tr>
            <td><input class="form-control" type="number" name="id" value="{{ request('id') }}" placeholder="ID" style="width:70px" ></td>
            <td><input class="form-control" type="text" name="name" value="{{ request('name') }}" placeholder="Name"></td>
            <td><input class="form-control" type="number" step="any" name="min_price" value="{{ request('min_price') }}" placeholder="Min price"></td>
            <td><input class="form-control" type="number" step="any" name="max_price" value="{{ request('max_price') }}" placeholder="Max price"></td>
            <td><input class="form-control" type="text" name="category" value="{{ request('category') }}" placeholder="Category"></td>
            <td colspan="2"><button class="btn btn-success"type="submit">Filter</button></td>
          </tr>
        </form>

        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Price</th>
          <th>Category</th>
          <th>Date Added</th>
          <th>Actions</th>
        </tr>
        
        <form action="{{ route('products.add') }}" method="POST" >
          @csrf
          <tr>
            <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Enter Product Name"></td>
            <td><input class="form-control" type="number" step="any" name="price" placeholder="Enter Product price"></td>
            <td><input class="form-control" type="text" name="category" placeholder="Enter Product Category"></td>
            <td><button class="btn btn-success"type="submit">Add</button></td>
            <td>#</td>
          </tr>
        </form>

        @foreach($products as $pr)
          <tr>
            <td>{{ $pr->id }}</td>
            <td>{{ $pr->name }}</td>
            <td>{{ $pr->price }}</td>
            <td>{{ $pr->category }}</td>
            <td>{{ $pr->created_at ? $pr->created_at->diffInMinutes(now()) : 0 }} Minutes Ago</td>
            <td>
              
              <form action="{{ route('products.delete') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $pr->id }}" />
                <button class="btn btn-danger">Delete</button>
              </form>

              <a href="{{ route('products.edit', ['id' => $pr->id]) }}" class="btn btn-primary">Edit</a>

            </td>
          </tr>
        @endforeach
        
      </table>
  </div>
</div>
  
@endsection