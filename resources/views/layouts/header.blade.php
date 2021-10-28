<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ setting('site.title') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Permanent+Marker">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
</head>
<body>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="company-cap">&ldquo;Motolife&rdquo;</h1>
                <img src="{{ Voyager::image(setting('site.image')) }}" class="img-fluid" alt="headerlogo">
            </div>
        </div>
        @if(session()->has('orderSuccess'))
            <div class="row mt-1">
                <div class="col text-center">
                    <div class="alert alert-success bg-dark">
                        <span class="h5 text-white text-monospace">{{ session()->get('orderSuccess') }}</span>
                    </div>
                </div>
            </div>
        @endif
        @if(session()->has('reviewSuccess'))
            <div class="row mt-1">
                <div class="col text-center">
                    <div class="alert alert-success bg-dark">
                        <span class="h5 text-white text-monospace">{{ session()->get('reviewSuccess') }}</span>
                    </div>
                </div>
            </div>
        @endif
        @if(count($errors) > 0)
            <div class="row mt-1">
                <div class="col text-center">
                    <div class="alert alert-danger bg-dark">
                        @foreach($errors->all() as $error)
                            <span class="h6 text-white text-monospace">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</header>