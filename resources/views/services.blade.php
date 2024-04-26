<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('https://unpkg.com/boxicons@latest/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
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
                          <p>Lorem ipsum <strong>dolor</strong> sit amet, consectetur <strong>adipiscing</strong> elit. Sed id erat a magna lobortis dictum. Nunc est arcu, <strong>lacinia</strong> quis sapien placerat, <strong>laoreet</strong> tincidunt nulla.</p>
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
                          <p>Lorem ipsum <strong>dolor</strong> sit amet, consectetur <strong>adipiscing</strong> elit. Sed id erat a magna lobortis dictum. Nunc est arcu, <strong>lacinia</strong> quis sapien placerat, <strong>laoreet</strong> tincidunt nulla.</p>
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
                          <p>Lorem ipsum <strong>dolor</strong> sit amet, consectetur <strong>adipiscing</strong> elit. Sed id erat a magna lobortis dictum. Nunc est arcu, <strong>lacinia</strong> quis sapien placerat, <strong>laoreet</strong> tincidunt nulla.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    @include('footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
