@extends('layouts.main')
@section('content')
    <section class="moto-salons">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="salon-overlay">
                        <img src="{{ Voyager::image($town->header_image) }}" class="img-fluid" alt="town">
                        <div class="salon-text">
                            <p>{{ $town->name }}</p>
                            <address class="h6">
                                <p><i class="fas fa-map-marker-alt mr-2"></i>{{ $town->contact->town }}</p>
                                <p><i class="far fa-clock mr-2"></i>{{ $town->contact->work_time }}</p>
                                <p><i class="fas fa-phone mr-2"></i>{{ $town->contact->phone }}</p>
                                <p><i class="fab fa-viber mr-2"></i>{{ $town->contact->viber }}</p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <p class="h6 border border-dark p-2">{{ $town->content }}</p>
                    <h3>В нашем салоне мы постарались создать максимум комфорта для Вас:</h3>
                    <ul class="list-group">
                        <li class="list-group-item h6"><i class="fas fa-motorcycle mr-2"></i>просторный шоу-рум
                            мотоциклов;
                        </li>
                        <li class="list-group-item h6"><i class="fas fa-motorcycle mr-2"></i>удобная зона отдыха с
                            отличным кофе и PlayStation;
                        </li>
                        <li class="list-group-item h6"><i class="fas fa-motorcycle mr-2"></i>опытные консультанты,
                            которые помогут в выборе мототехники, и ответят на все интересующие мото-вопросы.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3 no-gutters">
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