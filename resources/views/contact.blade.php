<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('https://unpkg.com/boxicons@latest/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>

<body>
    @include('header')

    <section id="contact">
        <i class="fa fa-minus horizontal-line" style="text-align: center;" id="sep-contact"></i>
        <h2 id="h2">Get in Touch with Us</h2>
        <p id="p">Lorem Lorem Sinta Buko ng Papaya</p>
        <div id="iframe-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d436.29327309156105!2d125.6131617487894!3d7.109356318474348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d0aa609ca67%3A0xe12ad0873b3f033c!2sThe%20Grand%20Citygate!5e0!3m2!1sen!2sph!4v1711010407745!5m2!1sen!2sph"
                width="100%" height="300" style="border:0; filter: sepia(10%) hue-rotate(180deg) saturate(150%);"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-container-form">
            <div class="form-left">
                <form action="" class="contact-form">
                    <h2 style="color: gray; text-align: center; margin-bottom: 10px; position: relative; top: -20px">
                        Send Message</h2>
                    <div class="input-container">
                        <input type="text" id="name" name="name" class="input-name" placeholder="Name">
                        <input type="email" id="email" name="email" class="input-email mobile-email"
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
            <div class="form-right">
                <div class="contact-icons">
                    <div class="icon icon-mark" id="icon-mark">
                        <i class="fa fa-map-marker" id="mobile-marker" style="margin-right: 15px;"></i><a
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

    @include('tempochat')

    @include('footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
