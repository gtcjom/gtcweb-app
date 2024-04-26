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
  {{-- <img src="img/webd.jpg" class="bg-home" alt="" srcset=""> --}}
  <section id="home" class=".blur">
    <div class="home-container">
        <div class="home-left">
            <h2>LOREM IPSUM DOLOR SIT AMET</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
                <button class="inquire-now"><a href="">Inquire now</a></button>
        </div>
        <div class="eclipse"></div>
    </div>
    <div class="highlighted-text">See why Global Telemedicine Corporation is trusted by over 1 million users
        <i class="ri-star-fill"></i>
        <i class="ri-star-fill"></i>
        <i class="ri-star-fill"></i>
        <i class="ri-star-fill"></i>
        <i class="ri-star-half-fill"></i>
        <a href="">Read reviews</a>
    </div>
    <div class="discover-text">
        Discover what's so amazing about GTC
    </div>
    {{-- <div class="polis">
      <img src="img/avatar-male.png" alt="Character" srcset="" width="50px">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
    </div>
    <div class="home-img">
      <img src="img/doctor.png" alt="Subject" srcset="">
    </div>
    <div class="rectangle-container">
      <div class="rectangle">
        <div class="box1">
          <span>icon</span>
          <h2>LOREM IPSUM DOLOR</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
            sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
          </p>
          <div class="rd-arrow-container">
            <a class="{{ Request::is('home') }}" href="{{ route('home') }}"><i class="fa fa-long-arrow-right fa-lg" aria-hidden="true" id="rd-arrow"></i></a>
          </div>
        </div>
      </div>
      <div class="rectangle">
        <div class="box1">
          <span>icon</span>
          <h2>LOREM IPSUM DOLOR</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
            sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
          </p>
          <div class="rd-arrow-container">
            <a class="{{ Request::is('home') }}" href="{{ route('home') }}"><i class="fa fa-long-arrow-right fa-lg" aria-hidden="true" id="rd-arrow"></i></a>
          </div>
        </div>
      </div>
      <div class="rectangle">
        <div class="box1">
          <span>icon</span>
          <h2>LOREM IPSUM DOLOR</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
            sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
          </p>
          <div class="rd-arrow-container">
            <a class="{{ Request::is('home') }}" href="{{ route('home') }}"><i class="fa fa-long-arrow-right fa-lg" aria-hidden="true" id="rd-arrow"></i></a>
          </div>
        </div>
      </div>
      <div class="rectangle">
        <div class="box1">
          <span>icon</span>
          <h2>LOREM IPSUM DOLOR</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
            sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
          </p>
          <div class="rd-arrow-container">
            <a class="{{ Request::is('home') }}" href="{{ route('home') }}"><i class="fa fa-long-arrow-right fa-lg" aria-hidden="true" id="rd-arrow"></i></a>
          </div>
        </div>
      </div>
      <div class="rectangle">
        <div class="box1">
          <span>icon</span>
          <h2>LOREM IPSUM DOLOR</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
            sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
          </p>
          <div class="rd-arrow-container">
            <a class="{{ Request::is('home') }}" href="{{ route('home') }}"><i class="fa fa-long-arrow-right fa-lg" aria-hidden="true" id="rd-arrow"></i></a>
          </div>
        </div>
      </div>
    </div> --}}
  </section>

  <section id="about">
    <i class="fa fa-minus horizontal-line"></i>
    <h2 id="h2"><span class="span-text">About</span> Our Company</h2>
    <p id="p">Tagline</p>
    <div class="about-container">
      <div class="about-left-content">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
      sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nis ut aliquip ex ea commodo consequat.
      <br><br>
      Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
      sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nis ut aliquip ex ea commodo consequat.
      <br><br>
      Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
      sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nis ut aliquip ex ea commodo consequat.
      </p>
      </div>
      <div class="about-right-content">
        <img src="About Image" alt="About Image" srcset="">
        <a style="text-decoration: none; color: red;" href="{{ route('about') }}">Read more...</a>
      </div>
    </div>
  </section>

  {{-- <section id="products">
    <i class="fa fa-minus horizontal-line"></i>
    <h2 id="h2">Our <span class="span-text">Products</span></h2>
    <p>Tagline</p>
    <div class="product-container">
      <div class="product">
        <div class="product-item">
            <img src="img/sample-product.jpg" alt="Product 1" class="product-img">
            <div class="product-info">
              <h2 class="product-title">Product</h2>
              <div class="stars">
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-half-fill"></i>
                  <p class="star-result">4.5/5</p>
              </div>

              <div class="row-in">
                  <div class="row-left">
                      <a href="#" class="btn-add-to-cart">Add to Cart <i class="ri-shopping-cart-fill"></i></a>
                  </div>

                  <div class="row-right">
                      <h6 class="product-price">₱99.99</h6>
                      <h6 class="price-crashout">₱299.99</h6>
                  </div>
              </div>
            </div>
          </div>
          <div class="product-item">
            <img src="img/sample-product.jpg" alt="Product 1" class="product-img">
            <div class="product-info">
              <h2 class="product-title">Product</h2>
              <div class="stars">
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-half-fill"></i>
                  <p class="star-result">4.5/5</p>
              </div>

              <div class="row-in">
                  <div class="row-left">
                      <a href="#" class="btn-add-to-cart">Add to Cart <i class="ri-shopping-cart-fill"></i></a>
                  </div>

                  <div class="row-right">
                      <h6 class="product-price">₱99.99</h6>
                      <h6 class="price-crashout">₱299.99</h6>
                  </div>
              </div>
            </div>
          </div>
          <div class="product-item">
            <img src="img/sample-product.jpg" alt="Product 1" class="product-img">
            <div class="product-info">
              <h2 class="product-title">Product</h2>
              <div class="stars">
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-half-fill"></i>
                  <p class="star-result">4.5/5</p>
              </div>

              <div class="row-in">
                  <div class="row-left">
                      <a href="#" class="btn-add-to-cart">Add to Cart <i class="ri-shopping-cart-fill"></i></a>
                  </div>

                  <div class="row-right">
                      <h6 class="product-price">₱99.99</h6>
                      <h6 class="price-crashout">₱299.99</h6>
                  </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section> --}}

  <section id="services">
  <i class="fa fa-minus horizontal-line"></i>
    <h2 id="h2">Our <span class="span-text">Services</span></h2>
    <p id="p">Tagline</p>
    <div class="card">
		<div class="card__inner">
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
				<h2>Mobile Telemedicine Dev</h2>
			</div>
			<div class="card__face card__face--back">
				<div class="card__content">
					<div class="card__header">
						<img src="pp.jpg" alt="" class="pp" />
						<h2>Mobile Telemedicine</h2>
					</div>
					<div class="card__body">
						<h3>Mobile Telemedicine Wizard</h3>
						<p>Lorem ipsum <strong>dolor</strong> sit amet, consectetur <strong>adipiscing</strong> elit. Sed id erat a magna lobortis dictum. Nunc est arcu, <strong>lacinia</strong> quis sapien placerat, <strong>laoreet</strong> tincidunt nulla.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  </section>

  <section id="contact">
  <i class="fa fa-minus horizontal-line" style="text-align: center;"></i>
  <div class="contact-container">
      <div class="contact-left-content">
        <h2 id="h2">Get in Touch with Us</h2>
        <p id="p">Lorem Lorem Sinta Buko ng Papaya</p>
        <form action="" class="contact-form">
          <h2 style="color: gray; text-align: center; margin-bottom: 10px; position: relative; top: -20px">Send Message</h2>
          <div class="input-container">
            <input type="text" id="name" name="name" class="input-name" placeholder="Name">
            <input type="email" id="email" name="email" class="input-email" placeholder="Email">
          </div>

          <div class="input-container">
            <textarea id="message" name="message" rows="4" cols="50" class="input" placeholder="Message"></textarea><br>
          </div>

          <div class="btn-send">
            <button class="btn btn-gradient btn-shadow btn-rounded btn-transition">Submit</button>
          </div>
        </form>

      </div>
      <div class="contact-right-content">
        <div class="iframe-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d436.29327309156105!2d125.6131617487894!3d7.109356318474348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d0aa609ca67%3A0xe12ad0873b3f033c!2sThe%20Grand%20Citygate!5e0!3m2!1sen!2sph!4v1711010407745!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-icons">
          <div class="icon icon-mark">
            <i class="fa fa-map-marker"></i><a href="https://www.google.com/maps/place/Amani+Grand+Citygate+Davao/@7.1125052,125.6105146,18z/data=!4m10!1m2!2m1!1scity+gate+buhangin+davao+city!3m6!1s0x32f96da2d63c1f29:0xa217a81700c9f200!8m2!3d7.1125051!4d125.612751!15sCh1jaXR5IGdhdGUgYnVoYW5naW4gZGF2YW8gY2l0eZIBE2NvbmRvbWluaXVtX2NvbXBsZXjgAQA!16s%2Fg%2F11h8jvqyd3?entry=ttu" target="_blank" class="location-link">City Gate Buhangin, Davao City 8000 Philippines, Southeast Asia</a>
          </div>
          <div class=" icon icon-phone">
            <i class="fa fa-phone"></i>
            <a href="tel:(082)123-4567" class="phone-link">(082)1234567</a>
          </div>
          <div class="icon icon-mail">
            <i class="fa fa-envelope"></i><a href="mailto:info@gtctelemedicinecorp.com" class="mail-link">info@gtctelemedicinecorp.com</a>
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
