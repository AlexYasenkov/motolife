@extends('layouts.main')
@section('content')
    <section class="moto-description">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="m-img">
                        <p class="m-text">{{ $moto->name }}</p>
                        <button type="button" class="m-buy" data-toggle="modal" data-target="#buy-modal">Купить<i
                                    class="fas fa-arrow-right"></i>{{ $moto->price }}<span
                                    class="text-success">&#36;</span></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="modal fade" id="buy-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">{{ $moto->name }}</h3>
                                    <button type="button" class="close" data-dismiss="modal"><i
                                                class="far fa-times-circle"></i></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ Voyager::image($moto->bike_image) }}" class="img-fluid mb-3" alt="pic">
                                    {!! Form::open(['route'=>'orderStore']) !!}
                                    <div class="form-group">
                                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ваше имя:']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('town', null, ['class'=>'form-control', 'placeholder'=>'Город:']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email:']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Телефон:']) !!}
                                    </div>
                                    <input type="hidden" name="bike_id" value="{{ $moto->id }}">
                                    {!! Form::submit('Заказать', ['class'=>'btn btn-block btn-outline-secondary']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h3 class="text-center">Технические характеристики:</h3>
                    <div class="w-75 mx-auto text-center bg-light">
                        <hr class="m-border">
                        <p>Год выпуска<i class="fas fa-arrow-right mx-2"></i>{{ $moto->year }}</p>
                        <hr class="m-border">
                        <p>Объем двигателя<i class="fas fa-arrow-right mx-2"></i>{{ $moto->volume }} см³</p>
                        <hr class="m-border">
                        <p>Тип<i class="fas fa-arrow-right mx-2"></i>{{ $moto->type }}</p>
                        <hr class="m-border">
                        <p>Привезен из<i class="fas fa-arrow-right mx-2"></i>{{ $moto->import }}</p>
                        <hr class="m-border">
                        <p>Мотосалон в городе<i class="fas fa-arrow-right mx-2"></i>{{ $moto->salon }}</p>
                        <hr class="m-border">
                    </div>
                </div>
            </div>
            <div class="row mt-3 no-gutters align-items-center">
                @foreach($gallery as $img)
                    <div class="col-lg-4">
                        <a data-fancybox="gallery" class="img-focus" href="{{ Voyager::image($img) }}"><img
                                    src="{{ Voyager::image($img) }}" class="img-fluid p-1" alt="pic"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('css')
    <style>
        .moto-description .m-img {
            background: url("{{ Voyager::image($moto->bike_image) }}") no-repeat center;
        }
    </style>
@endsection