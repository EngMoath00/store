@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <style>
            .uper {
                margin-top: 40px;
            }

        </style>
        <div class="card uper">
            <div class="card-header">
                Add Product
            </div>
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <div class="card-body">

                <form method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="product_name" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price :</label>
                        <input type="text" class="form-control" name="product_price" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product details :</label>
                        <input type="text" class="form-control" name="product_details" />
                    </div>
                    <label for="category_id">Category :</label>
                    <select name="category_id" class="form-control mb-3">
                        <option value="" selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="quantity">Product Quantity:</label>
                        <input type="text" class="form-control" name="product_qty" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Photo:</label>
                        <input type="file" class="form-control" name="product_image" />
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
                <a href=""></a>
            </div>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>
@endsection
