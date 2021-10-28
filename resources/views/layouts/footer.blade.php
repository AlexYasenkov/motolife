<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="display-4">
					<span class="h3 d-none d-md-inline-block">
						<i class="fas fa-motorcycle"></i>
					</span>
                    Компания Motolife
                    <span class="h3 d-none d-md-inline-block">
						<i class="fas fa-motorcycle"></i>
					</span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-left">{{ setting('site.footer_description') }}</p>
                <h4 class="text-center">Контактная информация:</h4>
            </div>
        </div>
        <div class="row align-items-center my-3">
            <div class="col-lg-6 text-lg-right">
                <p class="h6"><i class="fas fa-phone-square mr-2"></i>{{ setting('site.phone') }}</p>
                <p class="h6"><i class="fab fa-viber mr-2"></i>{{ setting('site.viber') }}</p>
            </div>
            <div class="col-lg-6 text-lg-left">
                <a href="https://www.facebook.com" target="_blank" class="social-icon"><img
                            src="{{ asset('img/facebook.png') }}" alt="facebook"></a>
                <a href="https://twitter.com" target="_blank" class="social-icon"><img
                            src="{{ asset('img/twitter.png') }}" alt="twitter"></a>
                <a href="https://www.youtube.com" target="_blank" class="social-icon"><img
                            src="{{ asset('img/youtube.png') }}" alt="youtube"></a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="h6">&copy; 2018 &ldquo;Motolife&rdquo; Company</p>
            </div>
        </div>
    </div>
</footer>
<!--Require Script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>