<section class="moto-caption">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="display-4">
					<span class="h3 d-none d-md-inline-block">
						<i class="fas fa-motorcycle"></i>
					</span>
                    Выбрать мотоцикл
                    <span class="h3 d-none d-md-inline-block">
						<i class="fas fa-motorcycle"></i>
					</span>
                </h2>
            </div>
        </div>
    </div>
</section>
<section class="moto-info">
    <div class="container">
        <div class="row">
            @foreach($brands as $brand)
                <div class="col-lg-6">
                    <div class="card my-3">
                        <img class="card-img" src="{{ Voyager::image($brand->image) }}" alt="moto">
                        <div class="card-img-overlay">
                            <h3 class="card-title">{{ $brand->name }}</h3>
                            <p class="card-text d-none d-sm-block">{{ $brand->description }}</p>
                            <a href="{{ route('bikeBrand', $brand->slug) }}" class="btn btn-outline-light">Купить</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>