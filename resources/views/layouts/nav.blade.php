<nav class="nav-top sticky-top">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <a href="{{ url('/') }}" class="navbar-brand"><i class="fas fa-home h3"></i></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-center" id="navbarContent">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown mx-4">
                                <a href="#" class="nav-btn dropdown-toggle" role="button" data-toggle="dropdown">Мототехника</a>
                                <div class="dropdown-menu">
                                    @foreach($brands as $brand)
                                        <a href="{{ route('bikeBrand', $brand->slug) }}"
                                           class="dropdown-item">{{ $brand->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item mx-4">
                                <a href="{{ url('/news') }}" class="nav-btn">Мотоновости</a>
                            </li>
                            <li class="nav-item dropdown mx-4">
                                <a href="#" class="nav-btn dropdown-toggle" role="button"
                                   data-toggle="dropdown">Салоны</a>
                                <div class="dropdown-menu">
                                    @foreach($towns as $town)
                                        <a href="{{ route('showTown', $town->slug) }}"
                                           class="dropdown-item">{{ $town->contact->town }}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item mx-4">
                                <a href="{{ url('/contacts') }}" class="nav-btn">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</nav>