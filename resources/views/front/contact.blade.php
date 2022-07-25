@extends('layouts.app')
@section('content')
    <section class="courses py-5">
        <div class="container">

            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('store.message') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <input type="text" name="name" value="" placeholder="Your Name *"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Your Email *"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <input type="tel" name="phone" value="" placeholder="Your Mobile "
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <input type="text" name="subject" value="" placeholder="Subject"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" cols="40" rows="5" placeholder="Your Message *" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <p style="padding-top: 15px">
                            <input type="submit" value="Send" class="btn btn-dark btn-lg px-5 float-end" />
                        </p>
                    </form>
                    <small>
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach
                        @endif
                    </small>
                </div>
            </div>
            <br>

        </div>
    </section>

@stop
