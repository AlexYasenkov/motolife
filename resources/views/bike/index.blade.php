@extends('layouts.main')
@section('content')
    <section class="moto-store">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-uppercase my-3">
						<span class="h3">
							<i class="fas fa-motorcycle"></i>
						</span>
                        {{ $bikeBrand->name }}
                        <span class="h3">
							<i class="fas fa-motorcycle"></i>
						</span>
                    </h2>
                    <hr>
                </div>
            </div>
            <div class="row bg-store align-items-center">
                @foreach($bikes as $bike)
                    <div class="col-lg-4 my-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ Voyager::image($bike->bike_image) }}" alt="moto">
                            <div class="card-body">
                                <h5 class="card-title">{{ $bike->name }}</h5>
                                <p class="card-text">{{ $bike->price }}&#36;</p>
                                <a href="{{ route('showBike', [$bike->brand->slug, $bike->slug]) }}"
                                   class="btn btn-outline-dark">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection