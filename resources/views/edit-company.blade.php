@extends('layouts.main')


@section('content')
<form action="{{ route('companies.update', ['id' => $company->id]) }}" method="post">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3>Edit company</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $company->name }}">
            </div>
            <div class="form-group">
                <label for="name">Code</label>
                <input type="text" class="form-control" name="code" id="code" value="{{ $company->code }}">
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="{{ $company->address }}">
            </div>
            <div class="form-group">
                <label for="name">City</label>
                <input type="text" class="form-control" name="city" id="city" value="{{ $company->city }}">
            </div>
            <div class="form-group">
                <label for="name">Country</label>
                <input type="text" class="form-control" name="country" id="country" value="{{ $company->country }}">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success">Save</button>
            <button type="button" class="btn btn-danger">Cancel</button>
        </div>
    </div>
</form>

@endsection

