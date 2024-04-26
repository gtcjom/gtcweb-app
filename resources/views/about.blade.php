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
    <section id="about" class="about">
        <i class="fa fa-minus horizontal-line"></i>
        <h2 id="h2"><span class="span-text">About</span> Our Company</h2>
        <p id="p" style="margin-bottom: 75px;">Tagline</p>
        <div class="about-container">
        <div class="about-left-content">
            <h1>Our Team</h1>
            <h3 style="margin-bottom: 15px;">Meet the entire team</h3>
        <p style="color: #657786;">
        Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
        sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nis ut aliquip ex ea commodo consequat.
        <br><br /><br><br />
        </p>
        <div class="onetwo" style="position: relative; display: flex; justify-content: space-between">
            <div class="one">
                <h2 style="font-weight: normal; margin-bottom: 15px;">Culture</h2>
                <hr style="border-top: 2px solid #84CDEE; width: 25%; margin-bottom: 15px;">
                <p style="color: #657786;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
                    sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nis ut aliquip ex ea commodo consequat.
                    <br><br />
                    Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
                    sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nis ut aliquip ex ea commodo consequat.
                    <br><br>
                </p>
            </div>
            <div class="two">
                <h2 style="font-weight: normal; margin-bottom: 15px;">Workplace</h2>
                <hr style="border-top: 2px solid #84CDEE; width: 25%; margin-bottom: 15px;">
                <p style="color: #657786;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
                    sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nis ut aliquip ex ea commodo consequat.
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
                    sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nis ut aliquip ex ea commodo consequat.
                    <br><br><br><br>
                </p>
            </div>
            </div>
        </div>
        <div class="about-right-content">
            <img src="img/team.png" alt="About Image" srcset="" style="width: 75%; z-index: -1; margin-bottom: 35px;">
            <div class="onetwo" style="position: relative; display: flex; justify-content: space-between; align-items: left; text-align: left;">
                <div class="one" style="background-color: #fff; border-radius: 5px; margin: 10px; margin-right: 25px; padding: 10px; box-shadow: 0 31px 32px rgba(0, 0, 0, 0.1);">
                    <h2 style="font-weight: normal; margin-bottom: 15px;">Our Lives</h2>
                    <hr style="border-top: 2px solid #84CDEE; width: 25%; margin-bottom: 15px;">
                    <button class="btn-play"><i class="fa fa-play" aria-hidden="true"></i></button>
                    <p style="color: #657786;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
                        sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nis ut aliquip ex ea commodo consequat.
                    </p>
                    <button class="btn btn-gradient btn-shadow btn-rounded btn-transition" id="btn-Details">Full Details</button>
                </div>
                <div class="two" style="background-color: #fff; border-radius: 5px; margin: 10px; margin-right: 25px; padding: 10px; box-shadow: 0 31px 32px rgba(0, 0, 0, 0.1);">
                    <h2 style="font-weight: normal; margin-bottom: 15px;">Product Testing</h2>
                    <hr style="border-top: 2px solid #84CDEE; width: 25%; margin-bottom: 15px;">
                    <p style="color: #657786;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit,
                        sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nis ut aliquip ex ea commodo consequat.
                    </p>
                    <i class="fa fa-long-arrow-right fa-lg" aria-hidden="true" style="padding: 10px; color: #00bfff; cursor: pointer;"></i>
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
