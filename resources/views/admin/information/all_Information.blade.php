@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>All information</h3>
                </div>
            </div>

            <table class="table table-bordered">
                @foreach ($informations as $information)
                    <tr>
                        <th>email</th>
                        <td>{{ $information->email }} </td>
                    </tr>
                    <tr>
                        <th>location</th>
                        <td> {{ $information->location }} </td>
                    </tr>
                    <tr>
                        <th>about_us </th>
                        <td> {{ $information->about_us }} </td>
                    </tr>
                    <tr>
                        <th>phone</th>
                        <td>{{ $information->phone }} </td>
                    </tr>
                    <tr>
                        <th>facebook</th>
                        <td> {{ $information->facebook }} </td>
                    </tr>
                    <tr>
                        <th>instagram </th>
                        <td> {{ $information->instagram }} </td>
                    </tr>
                    <tr>
                        <th width="280px">Actions</th>
                        <td>
                            <a class="btn btn-info" href="{{ route('edit.Informa', $information->id) }}">Edit</a>

                            <form action="{{ route('delete.Informa', $information->id) }}" method="post">
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
