@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="card uper">
            <div class="card-header">
                Add information
            </div>
            <small>
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
            </small>
            <div class="card-body">

                <form method="post" action="{{ route('store.Informa') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name"> mobile :</label>
                        <input type="text" class="form-control" name="mobile" />
                    </div>
                    <div class="form-group">
                        <label for="about_"> about_us:</label>
                        <br>
                        <textarea name="about_us" id="about" cols="120" rows="6"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="email"> email:</label>
                        <input type="email" class="form-control" name="email" />
                    </div>
                    <div class="form-group">
                        <label for="location"> location :</label>
                        <input type="text" class="form-control" name="location" />
                    </div>
                    <div class="form-group">
                        <label for="facebook"> facebook :</label>
                        <input type="text" class="form-control" name="facebook" />
                    </div>
                    <div class="form-group">
                        <label for="instagram"> instagram :</label>
                        <input type="text" class="form-control" name="instagram" />
                    </div>

                    <input type="submit" class="btn btn-primary" value="Add">
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>
@endsection
