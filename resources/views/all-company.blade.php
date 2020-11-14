@extends('layouts.main')


@section('content')
<div class="card">
    <div class="card-header">
        <h4>All company</h4>
    </div>
    <div class="card-body">


        <table class="table" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>

            <form action="{{ route('companies.add') }}" method="POST">
                @csrf
                <tr>
                    <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Enter company name"></td>
                    <td><input class="form-control" type="text" name="code" placeholder="Enter company code"></td>
                    <td><input class="form-control" type="text" name="address" placeholder="Enter company address"></td>
                    <td><input class="form-control" type="text" name="city" placeholder="Enter company city"></td>
                    <td><input class="form-control" type="text" name="country" placeholder="Enter company country"></td>
                    <td><button class="btn btn-success" type="submit">Add</button></td>
                    <td>#</td>
                </tr>
            </form>

            @foreach($companies as $pr)
            <tr>
                <td>{{ $pr->id }}</td>
                <td>{{ $pr->name }}</td>
                <td>{{ $pr->code }}</td>
                <td>{{ $pr->address }}</td>
                <td>{{ $pr->city }}</td>
                <td>{{ $pr->country }}</td>
                <td>{{ $pr->created_at ? $pr->created_at->diffInMinutes(now()) : 0 }} Minutes Ago</td>
                <td>

                    <form action="{{ route('companies.delete') }}" method="post">
                        @csrf
                        <input type="hidden" name="company_id" value="{{ $pr->id }}" />
                        <button class="btn btn-danger">Delete</button>
                    </form>

                    <a href="{{ route('companies.edit', ['id' => $pr->id]) }}" class="btn btn-primary">Edit</a>

                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>

@endsection
