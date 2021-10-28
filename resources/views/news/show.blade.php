@extends('layouts.main')
@section('content')
    <section class="motonews-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="border-bottom text-center py-3">{{ $news->name }}</h3>
                    <p class="font-italic text-right">{{ $news->created_at->format('Y-m-d') }}</p>
                    {!! $news->description !!}
                </div>
                <div class="col-lg-4">
                    <div class="bg-secondary">
                        @foreach($gallery as $img)
                            <a data-fancybox="gallery" class="img-focus" href="{{ Voyager::image($img) }}">
								<img src="{{ Voyager::image($img) }}" class="img-fluid p-1" alt="pic">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection