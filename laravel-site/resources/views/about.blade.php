@extends('layout.app')
@section('title','about page')
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Who we are</h1>
            <div class="col-md-12 d-flex justify-content-center">

                <div class="col-md-6 border border-black">
                    <img src="{{asset('images/about.jpg')}}" />

                </div>
                <div class="col-md-6 border border-black">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A commodi deleniti distinctio eveniet, fuga illum inventore laudantium nam nulla officia pariatur qui quod repellat sunt, unde. Aut eligendi facilis nobis.
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
