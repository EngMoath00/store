@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <div class="card uper">
            <div class="card-header">
                Update category
            </div>
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <div class="card-body">

                <form method="post" action="{{ route('update.category', $category->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">category Name:</label>
                        <input type="text" class="form-control" name="category_name" value="{{ $category->name }}" />
                    </div>

                    <input type="submit" class="btn btn-primary" value="Update">
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>
@endsection


{{-- @extends('admin.layouts.app')
@section('content')
    <div class="panel-body">
        <!-- Display Validation Errors -->
        <!-- New Task Form -->
        <form action="{{ route('update.category', $category->id) }}" method="POST" class="form-horizontal">
            @csrf
            <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="{{ $category->name }}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-refresh"></i>Update
                    </button>
                </div>
            </div>
        </form>
    </div>
    </body>

    </html> --}}
