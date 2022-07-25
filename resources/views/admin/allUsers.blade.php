@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>All Categories</h3>
                </div>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Created At </th>
                    <th>email</th>
                    <th>photo</th>
                    {{-- <th width="280px">Actions</th> --}}
                </tr>
                @foreach ($users as $user)
                    <tr>

                        <td> {{ $user->name }} </td>
                        <td> {{ $user->created_at }} </td>
                        <td> {{ $user->email }} </td>
                        <td>{{ $user->photo }} </td>


                        {{-- <td>

                            <a class="btn btn-info" href="{{ route('edit.category', $category->id) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('delete.category', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">

                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </table>
        </div>
    @endsection
