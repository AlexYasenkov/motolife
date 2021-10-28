@extends('layouts.main')
@section('content')
    <section class="company-contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contact-img">
                        {!! Form::open(['url'=>'contacts']) !!}
                        <div class="contact-form">
                            <h2 class="text-white">Контакты</h2>
                            {!! Form::text('name', null, ['class'=>'cont-name', 'placeholder'=>'Имя:']) !!}
                            {!! Form::email('email', null, ['class'=>'cont-email', 'placeholder'=>'Email:']) !!}
                            {!! Form::textarea('comment', null, ['class'=>'cont-comment', 'rows'=>'5', 'placeholder'=>'Сообщение:']) !!}
                            {!! Form::submit('Отправить', ['class'=>'cont-btn']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <ul class="nav nav-tabs">
                        @foreach($contacts as $contact)
                            <li class="nav-item">
                                <a href="#{{ $contact->tab_name }}"
                                   class="nav-link {!!$loop->iteration==1?'active':''!!}"
                                   data-toggle="tab">{{ $contact->town }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach($contacts as $contact)
                            <div class="tab-pane {!!$loop->iteration==1?'active':''!!}" id="{{ $contact->tab_name }}">
                                <div class="row mt-3">
                                    <div class="col-lg-4">
                                        <p><i class="fas fa-map-marker-alt mr-2"></i>{{ $contact->town }}</p>
                                        <p><i class="far fa-clock mr-2"></i>{{ $contact->work_time }}</p>
                                        <p><i class="fas fa-phone mr-2"></i>{{ $contact->phone }}</p>
                                        <p><i class="fab fa-viber mr-2"></i>{{ $contact->viber }}</p>
                                    </div>
                                    <div class="col-lg-8">
                                        {!! $contact->map !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection