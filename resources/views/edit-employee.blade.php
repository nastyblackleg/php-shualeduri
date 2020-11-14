@extends('layouts.main')


@section('content')
<form action="{{ route('employees.update', ['id' => $employee->id]) }}" method="post">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3>Edit employee</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $employee->name }}">
            </div>
            <div class="form-group">
                <label for="name">Lastname</label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="{{ $employee->lastname }}">
            </div>
            <div class="form-group">
                <label for="name">Birthdate</label>
                <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{ $employee->birthdate }}">
            </div>
            <div class="form-group">
                <label for="name">Personal ID</label>
                <input type="text" class="form-control" name="personal_id" id="personal_id" value="{{ $employee->personal_id }}">
            </div>
            <div class="form-group">
                <label for="name">Salary</label>
                <input type="text" class="form-control" name="salary" id="salary" value="{{ $employee->salary }}">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success">Save</button>
            <button type="button" class="btn btn-danger">Cancel</button>
        </div>
    </div>
</form>

@endsection

