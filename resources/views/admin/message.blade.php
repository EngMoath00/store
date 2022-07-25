@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Messages</h3>
                </div>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>Message</th>
                    <th width="280px">Actions</th>
                </tr>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }} </td>
                        <td> {{ $contact->name }} </td>
                        <td> {{ $contact->email }} </td>
                        <td> {{ $contact->subject }} </td>
                        <td> {{ $contact->message }} </td>

                        <td>
                            <form action="{{ route('message.delete', $contact->id) }}" method="post">
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
