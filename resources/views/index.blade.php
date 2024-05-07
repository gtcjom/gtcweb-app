<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.head')

<body class="antialiased">
    @include('header')
    {{-- <img src="img/webd.jpg" class="bg-home" alt="" srcset=""> --}}
    <section id="home" class=".blur">
        <div class="home-container">
            <div class="home-left">
                <div>
                    <img src="img/arrow-right.png" alt="" class="home-arrow">
                    &nbsp;
                </div>
                <h2><b>S H I M S</b></h2><br>
                <h3 class="h3"><b>S</b>arangani <b>H</b>ospital <b>I</b>nformation & <b>M</b>anagement
                    <b>S</b>ystem<br />
                </h3><br>
                <p class="health-care-text">Healthcare for all.</p><br>
                <button class="get-started"><a href="">Get started for free</a></button>
                <button class="schedule"><a href="">Schedule a Clinic demo</a></button>
            </div>

            <div class="eclipse">
                <img src="img/Gov1.png" alt="" srcset="" class="gov1">
            </div>
        </div>
        <div class="highlighted-text">"We've got you covered..."</div>
        <div class="discover-text">
            - Governor Ruel Pacquiao -
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

    @include('tempochat')

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
                            <p>Lorem ipsum <strong>dolor</strong> sit amet, consectetur <strong>adipiscing</strong>
                                elit. Sed id erat a magna lobortis dictum. Nunc est arcu, <strong>lacinia</strong> quis
                                sapien placerat, <strong>laoreet</strong> tincidunt nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <form action="/checkout" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Checkout</button>
    </form>

    <section id="testimonial">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="{{ asset('img/img1.jpg') }}" class="mySlideImg">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/img2.jpg" class="mySlideImg">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/img3.jpg" class="mySlideImg">
                <div class="text">Caption Three</div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>

    <div class="sponsors">
        <div class="sponsors-img">
            <img src="img/ihp-logo.jpg" alt="">
        </div>
        <div class="sponsors-img">
            <img src="img/ihp-logo.jpg" alt="">
        </div>
        <div class="sponsors-img">
            <img src="img/ihp-logo.jpg" alt="">
        </div>
        <div class="sponsors-img">
            <img src="img/ihp-logo.jpg" alt="">
        </div>
        <div class="sponsors-img">
            <img src="img/ihp-logo.jpg" alt="">
        </div>
        <div class="sponsors-img">
            <img src="img/ihp-logo.jpg" alt="">
        </div>
    </div>

    <section id="contact">
        <i class="fa fa-minus horizontal-line" style="text-align: center;"></i>
        <div class="contact-container">
            <div class="contact-left-content">
                <h2 id="h2">Get in Touch with Us</h2>
                <p id="p">Lorem Lorem Sinta Buko ng Papaya</p>
                <form action="" class="contact-form">
                    <h2 style="color: gray; text-align: center; margin-bottom: 10px; position: relative; top: -20px">
                        Send Message</h2>
                    <div class="input-container">
                        <input type="text" id="name" name="name" class="input-name" placeholder="Name">
                        <input type="email" id="email" name="email" class="input-email"
                            placeholder="Email">
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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d436.29327309156105!2d125.6131617487894!3d7.109356318474348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d0aa609ca67%3A0xe12ad0873b3f033c!2sThe%20Grand%20Citygate!5e0!3m2!1sen!2sph!4v1711010407745!5m2!1sen!2sph"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-icons">
                    <div class="icon icon-mark">
                        <i class="fa fa-map-marker"></i><a
                            href="https://www.google.com/maps/place/Amani+Grand+Citygate+Davao/@7.1125052,125.6105146,18z/data=!4m10!1m2!2m1!1scity+gate+buhangin+davao+city!3m6!1s0x32f96da2d63c1f29:0xa217a81700c9f200!8m2!3d7.1125051!4d125.612751!15sCh1jaXR5IGdhdGUgYnVoYW5naW4gZGF2YW8gY2l0eZIBE2NvbmRvbWluaXVtX2NvbXBsZXjgAQA!16s%2Fg%2F11h8jvqyd3?entry=ttu"
                            target="_blank" class="location-link">City Gate Buhangin, Davao City 8000 Philippines,
                            Southeast Asia</a>
                    </div>
                    <div class=" icon icon-phone">
                        <i class="fa fa-phone"></i>
                        <a href="tel:(082)123-4567" class="phone-link">(082)1234567</a>
                    </div>
                    <div class="icon icon-mail">
                        <i class="fa fa-envelope"></i><a href="mailto:info@gtctelemedicinecorp.com"
                            class="mail-link">info@gtctelemedicinecorp.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="empower">
        <div class="empower-container">
            <div class="empower-content">
                <h1>Empower your clinic today</h1>
                <p>And experience the impact of telemedicine within your organization.</p>
                <br> <br />
                <button class="get-started"><a href="">Get started for free</a></button>
                <button class="schedule"><a href="">&nbsp;Contact Sales&nbsp;</a></button>
            </div>
        </div>
    </section>



    @include('footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
