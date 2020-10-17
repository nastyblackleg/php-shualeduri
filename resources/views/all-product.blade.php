<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Product</title>
</head>
<body>
  <form action="/product/add" method="POST" >

    @csrf
    
    <table border="2" cellpadding="10" >
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Date Added</th>
      </tr>
      
      <tr>
        <td colspan="2"><input type="text" name="name" placeholder="Enter Product Name"></td>
        <td><input type="number" step="any" name="price" placeholder="Enter Product price"></td>
        <td><input type="text" name="category" placeholder="Enter Product Category"></td>
        <td><button type="submit">Add</button></td>
      </tr>

      @foreach($products as $pr)
        <tr>
          <td>{{ $pr->id }}</td>
          <td>{{ $pr->name }}</td>
          <td>{{ $pr->price }}</td>
          <td>{{ $pr->category }}</td>
          <td>{{ $pr->created_at ? $pr->created_at->diffInMinutes(now()) : 0 }} Minutes Ago</td>
        </tr>
      @endforeach
      
    </table>
  </form>
</body>
</html>