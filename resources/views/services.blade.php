<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')

<body class="antialiased">
    @include('header')
    <section id="services">
        <i class="fa fa-minus horizontal-line" id="sep-contact"></i>
        <h2 id="h2">Our <span class="span-text">Services</span></h2>
        <p id="p">Tagline</p>
        <div class="card">
            <div id="card-inner" class="card__inner" data-auth="{{ auth()->check() ? 'true' : 'false' }}">
                <div class="card__face card__face--front">
                    <h2>Telemedicine System</h2>
                </div>
                <div class="card__face card__face--back">
                    <div class="card__content">
                        <div class="card__header">
                            <img src="pp.jpg" alt="" class="pp" />
                            <h2>Telemedicine System</h2>
                        </div>
                        <div class="card__body">
                            <h3>Telemedicine System Wizard</h3>
                            <p>Lorem ipsum <strong>dolor</strong> sit amet, consectetur <strong>adipiscing</strong>
                                elit. Sed id erat a magna lobortis dictum. Nunc est arcu, <strong>lacinia</strong> quis
                                sapien placerat, <strong>laoreet</strong> tincidunt nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__inner">
                <div class="card__face card__face--front">
                    <h2>Website Telemedicine</h2>
                </div>
                <div class="card__face card__face--back">
                    <div class="card__content">
                        <div class="card__header">
                            <img src="pp.jpg" alt="" class="pp" />
                            <h2>Website Telemedicine</h2>
                        </div>
                        <div class="card__body">
                            <h3>Website Telemedicine Wizard</h3>
                            <p>Lorem ipsum <strong>dolor</strong> sit amet, consectetur <strong>adipiscing</strong>
                                elit. Sed id erat a magna lobortis dictum. Nunc est arcu, <strong>lacinia</strong> quis
                                sapien placerat, <strong>laoreet</strong> tincidunt nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card__inner">
                <div class="card__face card__face--front">
                    <h2>Mobile Telemedicine</h2>
                </div>
                <div class="card__face card__face--back">
                    <div class="card__content">
                        <div class="card__header">
                            <img src="pp.jpg" alt="" class="pp" />
                            <h2>Mobile Telemedicine</h2>
                        </div>
                        <div class="card__body">
                            <h3>Mobile Telemedicine</h3>
                            <p>Lorem ipsum <strong>dolor</strong> sit amet, consectetur <strong>adipiscing</strong>
                                elit. Sed id erat a magna lobortis dictum. Nunc est arcu, <strong>lacinia</strong> quis
                                sapien placerat, <strong>laoreet</strong> tincidunt nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <section>
                <div class="container py-5">

                    <header class="text-center mb-5 text-white">
                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                <h1>Laravel 9 Cashier Stripe Subscription</h1>
                                <h3>PRICING</h3>
                            </div>
                        </div>
                    </header>

                    <div class="row text-center align-items-end">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="bg-white p-5 rounded-lg shadow">
                                <h1 class="h6 text-uppercase font-weight-bold mb-4">FREE</h1>
                                <h2 class="h1 font-weight-bold">$0<span class="text-small font-weight-normal ml-2">/
                                        free</span></h2>

                                <div class="custom-separator my-4 mx-auto bg-primary"></div>

                                <ul class="list-unstyled my-5 text-small text-left">
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Lorem ipsum dolor sit amet
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i> At vero eos et accusamus
                                    </li>
                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>Nam libero tempore</del>
                                    </li>
                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>Sed ut perspiciatis</del>
                                    </li>
                                    <li class="mb-3 text-muted">
                                        <i class="fa fa-times mr-2"></i>
                                        <del>Sed ut perspiciatis</del>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-block shadow rounded-pill">Buy Now</a>
                            </div>
                        </div>
                        @foreach ($services as $service)
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="bg-white p-5 rounded-lg shadow">
                                    <h1 class="h6 text-uppercase font-weight-bold mb-4">{{ $service->name }}</h1>
                                    <h2 class="h1 font-weight-bold">${{ $service->price }}<span
                                            class="text-small font-weight-normal ml-2">/ month</span></h2>

                                    <div class="custom-separator my-4 mx-auto bg-primary"></div>

                                    <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i> Lorem ipsum dolor sit amet
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i> At vero eos et accusamus
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i> Nam libero tempore
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis
                                        </li>
                                        <li class="mb-3 text-muted">
                                            <i class="fa fa-times mr-2"></i>
                                            <del>Sed ut perspiciatis</del>
                                        </li>
                                    </ul>
                                    <a href="{{ route('services', $service->name) }}"
                                        class="btn btn-primary btn-block shadow rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        @endforeach
            </section>

            @include('tempochat')

            @include('footer')

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
