@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        <div class="card uper">
            <div class="card-header">
                Update information
            </div>
            <small>
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
            </small>
            <div class="card-body">

                <form method="post" action="{{ route('update.Informa', $information->id) }}">
                    @csrf
                    <div class="card-body">

                        <form method="post" action="{{ route('store.Informa') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name"> mobile :</label>
                                <input type="text" class="form-control" name="mobile"
                                    value="{{ $information->phone }}" />
                            </div>
                            <div class="form-group">
                                <label for="about_"> about_us:</label>
                                <br>
                                <textarea name="about_us" id="about" cols="120" rows="6" placeholder="{{ $information->about_us }}"
                                    value="{{ $information->about_us }}"></textarea>

                            </div>
                            <div class="form-group">
                                <label for="email"> email:</label>
                                <input type="email" class="form-control" name="email"
                                    value="{{ $information->email }}" />
                            </div>
                            <div class="form-group">
                                <label for="location"> location :</label>
                                <input type="text" class="form-control" name="location"
                                    value="{{ $information->location }}" />
                            </div>
                            <div class="form-group">
                                <label for="facebook"> facebook :</label>
                                <input type="text" class="form-control" name="facebook"
                                    value="{{ $information->facebook }}" />
                            </div>
                            <div class="form-group">
                                <label for="instagram"> instagram :</label>
                                <input type="text" class="form-control" name="instagram"
                                    value="{{ $information->instagram }}" />
                            </div>

                            <input type="submit" class="btn btn-primary" value="update">
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>
@endsection
