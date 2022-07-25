@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Products</h3>
                </div>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>category</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>details</th>
                    <th>Quantity</th>

                    <th width="280px" colspan="2">Actions</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }} </td>
                        <td> {{ $product->name }} </td>
                        <td>{{ $product->category->name }}</td>
                        <td> {{ $product->price }} $</td>
                        <td> <img src="{{ asset('images/' . $product->image) }}" style="height: 80px; width: 100px;">
                        </td>
                        <td> {{ $product->details }} </td>
                        <td> {{ $product->quantity }} </td>
                        <td>

                            <a class="btn btn-info" href="{{ route('edit.product', $product->id) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('delete.product', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">

                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endsection
