@extends('admin.layouts.app')
@section('content')
    <div class="container">

        <div class="card uper">
            <div class="card-header">
                Add Product
            </div>
            <small>
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                @endif
            </small>
            <div class="card-body">

                <form method="post" action="{{ route('update.product', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}" />
                    </div>
                    <div class=" form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}" />
                    </div>
                    <div class=" form-group">
                        <label for="details">Product details :</label>
                        <input type="text" class="form-control" name="details" value="{{ $product->details }}" />
                    </div>
                    <div>
                        Category:
                        <select name="category_id" class="form-control mb-3">
                            <option value="" selected disabled>Select Category</option>
                            @foreach ($categories as $category)
                                <option {{ $category->id == $product->category_id ? 'selected' : '' }}
                                    value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" />
                    </div>
                    <div class=" form-group">
                        <label for="image">Product Photo:</label>
                        <input type="file" name="image" class="form-control">
                        <img width="100" height="100" src="{{ asset('images/' . $product->image) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
@endsection
