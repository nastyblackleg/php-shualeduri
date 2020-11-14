@extends('layouts.main')


@section('content')
<div class="card">
    <div class="card-header">
        <h4>All employee</h4>
    </div>
    <div class="card-body">


        <table class="table" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Birthdate</th>
                <th>Personal ID</th>
                <th>Salary</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>

            <form action="{{ route('employees.add') }}" method="POST">
                @csrf
                <tr>
                    <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Enter employee name"></td>
                    <td><input class="form-control" type="text" name="lastname" placeholder="Enter employee lastname"></td>
                    <td><input class="form-control" type="date" name="birthdate" placeholder="Enter employee birthdate"></td>
                    <td><input class="form-control" type="text" name="personal_id" placeholder="Enter employee personal_id"></td>
                    <td><input class="form-control" type="number" name="salary" placeholder="Enter employee salary"></td>
                    <td><button class="btn btn-success" type="submit">Add</button></td>
                    <td>#</td>
                </tr>
            </form>

            @foreach($employees as $pr)
            <tr>
                <td>{{ $pr->id }}</td>
                <td>{{ $pr->name }}</td>
                <td>{{ $pr->lastname }}</td>
                <td>{{ $pr->birthdate }}</td>
                <td>{{ $pr->personal_id }}</td>
                <td>{{ $pr->salary }}</td>
                <td>{{ $pr->created_at ? $pr->created_at->diffInMinutes(now()) : 0 }} Minutes Ago</td>
                <td>

                    <form action="{{ route('employees.delete') }}" method="post">
                        @csrf
                        <input type="hidden" name="employee_id" value="{{ $pr->id }}" />
                        <button class="btn btn-danger">Delete</button>
                    </form>

                    <a href="{{ route('employees.edit', ['id' => $pr->id]) }}" class="btn btn-primary">Edit</a>

                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>

@endsection

