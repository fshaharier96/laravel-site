@extends('layout.app')
@section('title','service page')
@section('content')
    <div class="container">
        <h1 class="text-center">Our Service</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width:100%;">
                    <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="laravel">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width:100%;">
                    <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="laravel">
                    <div class="card-body">
                        <h5 class="card-title">App Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width:100%;">
                    <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="laravel">
                    <div class="card-body">
                        <h5 class="card-title">Desktop Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

