@extends('layouts.main')
@section('content')
    <section class="company-description">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-center"><img src="{{ Voyager::image(setting('site.logo')) }}" class="w-75"
                                                  alt="motolife"></div>
                    <h5 class="info mb-3"><i class="fas fa-motorcycle mr-3"></i>{{ setting('site.description') }}</h5>
                </div>
                <div class="col-lg-6">
                    <div class="slider-for">
                        @foreach($gallery as $img)
                            <img src="{{ Voyager::image($img) }}" alt="moto">
                        @endforeach
                    </div>
                    <div class="slider-nav">
                        @foreach($gallery as $img)
                            <img src="{{ Voyager::image($img) }}" alt="moto">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('home.brand')
@endsection