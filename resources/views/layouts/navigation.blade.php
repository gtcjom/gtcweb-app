<nav x-data="{ open: false }" class="bg-sky-300 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-0 px-0 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center no-left-margin">
                    <a href="{{ url('/') }}">
                        {{-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> --}}
                        <img src="img/gtc-logo.png" alt="" srcset="" width="50px;" style="left: 0; position: relative;">
                    </a>
                </div>

                <!-- Navigation Links -->
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> --}}
            </div>
            <div class="flex space-x-2">
            <div class="nav flex">
                <ul class="flex bg-sky-300">
                    <li class="nav-settings mr-2">
                        <div class="font-icon text-white">
                            <i class="fa fa-tasks"></i>
                        </div>
                    </li>
                    <li class="nav-mail mr-2">
                        <div class="font-icon text-white">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                    </li>
                    <li class="nav-calendar mr-2">
                        <div class="font-icon text-white">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </li>
                    <li class="nav-chat mr-2">
                        <div class="font-icon text-white">
                            <i class="fa fa-comments-o"></i>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="message-popup" id="messagePopup">
                <div id="receivedMessage"></div>
                <button onclick="closeMessage()">Close</button>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 nav-profile">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-white hover:text-gray-200 focus:outline-none transition ease-in-out duration-150 nav-profile">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            </div>
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<section id="sidebar">
    <div id="sidebar-nav">
        <ul>
            <li class="active"><a href="#" onclick="showContent('dashboard')"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#" onclick="showContent('website')"><i class="fa fa-desktop"></i> My Website</a></li>
            <li><a href="#" onclick="showContent('ecommerce')"><i class="fa fa-usd"></i> Ecommerce</a></li>
            <li><a href="#" onclick="showContent('blog')"><i class="fa fa-pencil-square-o"></i> My Blog</a></li>
            <li><a href="#" onclick="showContent('seo')"><i class="fa fa-sitemap"></i> SEO Tools</a></li>
            <li><a href="#" onclick="showContent('reporting')"><i class="fa fa-line-chart"></i> Reporting</a></li>
            <li><a href="#" onclick="showContent('social')"><i class="fa fa-comments-o"></i> Social Marketing</a></li>
            <li><a href="#" onclick="showContent('traffic')"><i class="fa fa-map-marker"></i> Get Traffic</a></li>
            <li><a href="#" onclick="showContent('employees')"><i class="fa fa-users"></i> Employees</a></li>
            <li><a href="#" onclick="showContent('reservations')"><i class="fa fa-calendar-o"></i> Reservations</a></li>
            <li><a href="#" onclick="showContent('calendar')"><i class="fa fa-calendar"></i> Calendar</a></li>
        </ul>
    </div>
</section>
<section id="content">
    <div class="content" id="dashboard-content">
        <div class="widget-box sample-widget">
            <div class="widget-header">
                <h2>Widget Header</h2>
                <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
                <div class="widget" id="widget1">
                    Widget 1 Content
                </div>
                <div class="widget" id="widget2">
                    Widget 2 Content
                </div>
                <img
                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png"
                />
            </div>
        </div>
        <div class="widget-box sample-widget">
            <div class="widget-header">
                <h2>Widget Header</h2>
                <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
                <img
                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png"
                />
            </div>
        </div>
        <div class="widget-box sample-widget">
            <div class="widget-header">
                <h2>Widget Header</h2>
                <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
                <img
                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png"
                />
            </div>
        </div>
        <div class="widget-box sample-widget">
            <div class="widget-header">
                <h2>Widget Header</h2>
                <i class="fa fa-cog"></i>
            </div>
            <div class="widget-content">
                <img
                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png"
                />
            </div>
        </div>
    </div>
    <div class="content" id="website-content" style="display: none;">
        <header class="app-header">
            <div class="app-header-navigation">
                <div class="tabs">
                    <a href="#">
                        Overview
                    </a>
                    <a href="#" class="active">
                        Payments
                    </a>
                    <a href="#">
                        Cards
                    </a>
                    <a href="#">
                        Account
                    </a>
                    <a href="#">
                        System
                    </a>
                    <a href="#">
                        Business
                    </a>
                </div>
            </div>
            <div class="app-header-actions">
                <button class="user-profile">
                    <span>Anonymous User</span>
                    <span>
                        <img src="img/avatar-male.png" alt="Avatar" class="avatar">
                    </span>
                </button>
                <div class="app-header-actions-buttons">
                    <button class="icon-button large">
                        <i class="ph-magnifying-glass"></i>
                    </button>
                    <button class="icon-button large">
                        <i class="ph-bell"></i>
                    </button>
                </div>
            </div>
            <div class="app-header-mobile">
                <button class="icon-button large">
                    <i class="ph-list"></i>
                </button>
            </div>
        </header>
        <div class="app-body">
            <div class="app-body-main-content">
                <section class="service-section">
                    <h2>Service</h2>
                    <div class="service-section-header">
                        <div class="search-field">
                            <i class="ph-magnifying-glass"></i>
                            <input type="text" placeholder="Account number">
                        </div>
                        <div class="dropdown-field">
                            <select>
                                <option>Home</option>
                                <option>Work</option>
                            </select>
                            {{-- <i class="ph-caret-down"></i> --}}
                        </div>
                        <button class="flat-button">
                            Search
                        </button>
                    </div>
                    <div class="mobile-only">
                        <button class="flat-button">
                            Toggle search
                        </button>
                    </div>
                    <div class="tiles">
                        <article class="tile">
                            <div class="tile-header">
                                <i class="fa fa-desktop"></i>
                                <h3>
                                    <span>Telemedicine System</span>
                                    <span>Made by GTC</span>
                                </h3>
                            </div>
                            <a href="{{ route('services') }}">
                                <span>Go to service</span>
                                <span class="icon-button">
                                    <i class="ph-caret-right-bold"></i>
                                </span>
                            </a>
                        </article>
                        <article class="tile">
                            <div class="tile-header">
                                <i class="fa fa-external-link"></i>
                                <h3>
                                    <span>Website Telemedicine</span>
                                    <span>Made by GTC</span>
                                </h3>
                            </div>
                            <a href="{{ route('services') }}">
                                <span>Go to service</span>
                                <span class="icon-button">
                                    <i class="ph-caret-right-bold"></i>
                                </span>
                            </a>
                        </article>
                        <article class="tile">
                            <div class="tile-header">
                                <i class="fa fa-mobile"></i>
                                <h3>
                                    <span>Mobile Telemedicine</span>
                                    <span>Made by GTC</span>
                                </h3>
                            </div>
                            <a href="{{ route('services') }}">
                                <span>Go to service</span>
                                <span class="icon-button">
                                    <i class="ph-caret-right-bold"></i>
                                </span>
                            </a>
                        </article>
                    </div>
                    <div class="service-section-footer">
                        <p>Services are paid according to the current state of the currency and tariff.</p>
                    </div>
                </section>
                <section class="transfer-section">
                    <div class="transfer-section-header">
                        <h2>Latest transfers</h2>
                        <div class="filter-options">
                            <p>Filter selected: more than 100 $</p>
                            <button class="icon-button">
                                <i class="ph-funnel"></i>
                            </button>
                            <button class="icon-button">
                                <i class="ph-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="transfers">
                        <div class="transfer">
                            <div class="transfer-logo">
                                <img src="https://assets.codepen.io/285131/apple.svg" />
                            </div>
                            <dl class="transfer-details">
                                <div>
                                    <dt>Apple Inc.</dt>
                                    <dd>Apple ID Payment</dd>
                                </div>
                                <div>
                                    <dt>4012</dt>
                                    <dd>Last four digits</dd>
                                </div>
                                <div>
                                    <dt>28 Oct. 21</dt>
                                    <dd>Date payment</dd>
                                </div>
                            </dl>
                            <div class="transfer-number">
                                - $ 550
                            </div>
                        </div>
                        <div class="transfer">
                            <div class="transfer-logo">
                                <img src="https://assets.codepen.io/285131/pinterest.svg" />
                            </div>
                            <dl class="transfer-details">
                                <div>
                                    <dt>Pinterest</dt>
                                    <dd>2 year subscription</dd>
                                </div>
                                <div>
                                    <dt>5214</dt>
                                    <dd>Last four digits</dd>
                                </div>
                                <div>
                                    <dt>26 Oct. 21</dt>
                                    <dd>Date payment</dd>
                                </div>
                            </dl>
                            <div class="transfer-number">
                                - $ 120
                            </div>
                        </div>
                        <div class="transfer">
                            <div class="transfer-logo">
                                <img src="https://assets.codepen.io/285131/warner-bros.svg" />
                            </div>
                            <dl class="transfer-details">
                                <div>
                                    <dt>Warner Bros.</dt>
                                    <dd>Cinema</dd>
                                </div>
                                <div>
                                    <dt>2228</dt>
                                    <dd>Last four digits</dd>
                                </div>
                                <div>
                                    <dt>22 Oct. 21</dt>
                                    <dd>Date payment</dd>
                                </div>
                            </dl>
                            <div class="transfer-number">
                                - $ 70
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="app-body-sidebar">
                <section class="payment-section">
                    <h2>New Payment</h2>
                    <div class="payment-section-header">
                        <p>Choose a card to transfer money</p>
                        <div>
                            <button class="card-button mastercard">
                                <i class="fa fa-cc-mastercard"></i>
                            </button>
                            <button class="card-button visa active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" viewBox="0 0 141.732 141.732">
                                    <g fill="currentColor">
                                        <path d="M62.935 89.571h-9.733l6.083-37.384h9.734zM45.014 52.187L35.735 77.9l-1.098-5.537.001.002-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s4.691.976 10.181 4.273l8.456 32.479h10.141l15.485-37.385H45.014zM121.569 89.571h8.937l-7.792-37.385h-7.824c-3.613 0-4.493 2.786-4.493 2.786L95.881 89.571h10.146l2.029-5.553h12.373l1.14 5.553zm-10.71-13.224l5.114-13.99 2.877 13.99h-7.991zM96.642 61.177l1.389-8.028s-4.286-1.63-8.754-1.63c-4.83 0-16.3 2.111-16.3 12.376 0 9.658 13.462 9.778 13.462 14.851s-12.075 4.164-16.06.965l-1.447 8.394s4.346 2.111 10.986 2.111c6.642 0 16.662-3.439 16.662-12.799 0-9.72-13.583-10.625-13.583-14.851.001-4.227 9.48-3.684 13.645-1.389z" />
                                    </g>
                                    <path d="M34.638 72.364l-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s7.373 1.528 14.445 7.253c6.762 5.472 8.967 12.292 8.967 12.292z" fill="currentColor" />
                                    <path fill="none" d="M0 0h141.732v141.732H0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="payments">
                        <div class="payment">
                            <div class="card green">
                                <span>01/22</span>
                                <span>
                                    •••• 4012
                                </span>
                            </div>
                            <div class="payment-details">
                                <h3>Internet</h3>
                                <div>
                                    <span>$ 2,110</span>
                                    <button class="icon-button">
                                        <i class="ph-caret-right-bold"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="card olive">
                                <span>12/23</span>
                                <span>
                                    •••• 2228
                                </span>
                            </div>
                            <div class="payment-details">
                                <h3>Universal</h3>
                                <div>
                                    <span>$ 5,621</span>
                                    <button class="icon-button">
                                        <i class="ph-caret-right-bold"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="card gray">
                                <span>03/22</span>
                                <span>
                                    •••• 5214
                                </span>
                            </div>
                            <div class="payment-details">
                                <h3>Gold</h3>
                                <div>
                                    <span>$ 3,473</span>
                                    <button class="icon-button">
                                        <i class="ph-caret-right-bold"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq">
                        <p>Most frequently asked questions</p>
                        <div>
                            <label>Question</label>
                            <input type="text" placeholder="Type here">
                        </div>
                    </div>
                    <div class="payment-section-footer">
                        <button class="save-button">
                            Save
                        </button>
                        <button class="settings-button">
                            <i class="ph-gear"></i>
                            <span>More settings</span>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    <div class="content" id="ecommerce-content" style="display: none;">
        123
    </div>
    <div class="content" id="blog-content" style="display: none;">
        abc
    </div>
    <div class="content" id="seo-content" style="display: none;">
        123qwe
    </div>
    <div class="content" id="reporting-content" style="display: none;">
        qwe123
    </div>
    <div class="content" id="marketing-content" style="display: none;">
        wsad123
    </div>
    <div class="content" id="traffic-content" style="display: none;">
        asdqwe
    </div>
    <div class="content" id="employees-content" style="display: none;">
        ewqdsa
    </div>
    <div class="content" id="reservations-content" style="display: none;">
        321
    </div>
    <div class="content" id="calendar-content" style="display: none;">
        bnm
    </div>
</section>
