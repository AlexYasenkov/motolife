@extends('layouts.main')
@section('content')
    <section class="motonews-all">
        <div class="container">
            @foreach($posts as $news)
                <div class="row mt-3 align-items-center">
                    <div class="col-lg-4">
                        <a href="{{ route('showNews', $news->id) }}"><img src="{{ Voyager::image($news->image) }}"
                                                                          class="img-fluid" alt="news"></a>
                    </div>
                    <div class="col-lg-8">
                        <a href="{{ route('showNews', $news->id) }}" class="show-news">{{ $news->name }}</a>
                        <p class="font-italic">{{ $news->created_at->format('Y-m-d') }}</p>
                        {!! str_limit($news->description, 120) !!}
                        <hr class="border">
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col">
                    {{ $posts->links('vendor.pagination.simple-bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>
@endsection