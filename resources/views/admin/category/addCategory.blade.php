@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="card uper">
            <div class="card-header">
                Add category
            </div>

            <div class="card-body">

                <form method="post" action="{{ route('store.category') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">category Name:</label>
                        <input type="text" class="form-control" name="category_name" />
                    </div>

                    <input type="submit" class="btn btn-primary" value="Add">
                </form>
            </div>
        </div>
        <small>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </small>
    </div>
    <script src="js/app.js" type="text/js"></script>
@endsection
