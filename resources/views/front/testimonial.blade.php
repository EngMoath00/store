@extends('layouts.app')
@section('content')
    <!-- client section -->
    <style>
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #b7bdcc;
            color: white;
            font-size: 1.5em
        }

    </style>
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                What Says Our Customers
            </h2>
        </div>
    </div>
    <div class="client_container ">
        <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
            @foreach ($messages as $message)
                <br>
                <div class="about-section" style="border: 0.5ch black solid">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="box">
                                <div class="detail-box">
                                    <p>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </p>
                                    <p>{{ $message->message }} </p>
                                </div>
                                <div class="client-id">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <h5>
                                            {{ $message->name }}
                                        </h5>
                                        <h6>
                                            {{ $message->email }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>
    <!-- end client section -->
@endsection
