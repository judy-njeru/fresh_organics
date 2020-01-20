<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fresh Organics</title>

    <link href="/img/favicon.ico" rel="SHORTCUT ICON" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" />

    <!-- Styles -->
    @yield('extra-css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="landing">
    @include('components.header')
    <section class="hero">
        <div class="hero-banner">
            <div id="hero-image" style="background-image:url('{{asset('images/cuisine.jpg') }}')"></div>
        </div>
        <div class=" contents">
            <div class="col-md-12 content">
                <h1>A premium And Authentic Mealhouse</h1>
                <button class="button">Discover</button>
            </div>
        </div>
    </section>

    <section class="container module-padding" id="how-it-works">
        <div class="row">
            <div class="col-md-12">
                <h2>How It Works</h2>
            </div>
        </div>
        <div class="row cards">
            <div class="hiw-card">
                <svg width="46px" height="46px" viewBox="0 0 46 46" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Landing-Page" transform="translate(-278.000000, -1074.000000)">
                            <g id="24px" transform="translate(270.000000, 1066.000000)">
                                <path d="M40.8759291,36.9308176 L38.7981704,36.9308176 L38.0617496,36.2206975 C40.6392224,33.2224128 42.1909663,29.3299028 42.1909663,25.0954831 C42.1909663,15.6535163 34.53745,8 25.0954831,8 C15.6535163,8 8,15.6535163 8,25.0954831 C8,34.53745 15.6535163,42.1909663 25.0954831,42.1909663 C29.3299028,42.1909663 33.2224128,40.6392224 36.2206975,38.0617496 L36.9308176,38.7981704 L36.9308176,40.8759291 L50.0811893,54 L54,50.0811893 L40.8759291,36.9308176 Z M25.0954831,36.9308176 C18.5465981,36.9308176 13.2601487,31.6443682 13.2601487,25.0954831 C13.2601487,18.5465981 18.5465981,13.2601487 25.0954831,13.2601487 C31.6443682,13.2601487 36.9308176,18.5465981 36.9308176,25.0954831 C36.9308176,31.6443682 31.6443682,36.9308176 25.0954831,36.9308176 Z" id="Shape" fill="#00AE00" fill-rule="nonzero"></path>
                                <polygon id="Path" points="0 0 62 0 62 62 0 62"></polygon>
                            </g>
                        </g>
                    </g>
                </svg>
                <h5>Choose</h5>
                <p>Choose from our wide variety of deliciously clean meal plans at manageable prices, with options to feed two people or a family of four.</p>
            </div>
            <div class="hiw-card">
                <svg width="62px" height="46px" viewBox="0 0 62 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Landing-Page" transform="translate(-551.000000, -1076.000000)" fill="#00AE00" fill-rule="nonzero">
                            <g id="truck-delivery" transform="translate(551.000000, 1076.000000)">
                                <path d="M5.63636364,0 C2.52348596,0 0,2.51839828 0,5.625 L0,36.5625 L5.63636364,36.5625 C5.63636364,41.2224026 9.42159257,45 14.0909091,45 C18.7602256,45 22.5454545,41.2224026 22.5454545,36.5625 L39.4545455,36.5625 C39.4545455,41.2224026 43.2397744,45 47.9090909,45 C52.5784074,45 56.3636364,41.2224026 56.3636364,36.5625 L62,36.5625 L62,22.5 L53.5454545,11.25 L45.0909091,11.25 L45.0909091,0 L5.63636364,0 Z M25.3636364,5.625 L36.6363636,16.875 L25.3636364,28.125 L25.3636364,19.6875 L8.45454545,19.6875 L8.45454545,14.0625 L25.3636364,14.0625 L25.3636364,5.625 Z M45.0909091,15.46875 L52.1363636,15.46875 L57.6881818,22.5 L45.0909091,22.5 L45.0909091,15.46875 Z M14.0909091,32.34375 C16.4255674,32.34375 18.3181818,34.2325487 18.3181818,36.5625 C18.3181818,38.8924513 16.4255674,40.78125 14.0909091,40.78125 C11.7562508,40.78125 9.86363636,38.8924513 9.86363636,36.5625 C9.86363636,34.2325487 11.7562508,32.34375 14.0909091,32.34375 L14.0909091,32.34375 Z M47.9090909,32.34375 C50.2437492,32.34375 52.1363636,34.2325487 52.1363636,36.5625 C52.1363636,38.8924513 50.2437492,40.78125 47.9090909,40.78125 C45.5744326,40.78125 43.6818182,38.8924513 43.6818182,36.5625 C43.6818182,34.2325487 45.5744326,32.34375 47.9090909,32.34375 L47.9090909,32.34375 Z" id="Shape"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <h5>Delivery</h5>
                <p>Stand by for perfectly measured ingredients delivered to your door, any day you like.</p>
            </div>
            <div class="hiw-card">
                <svg width="58px" height="46px" viewBox="0 0 58 58" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Landing-Page" transform="translate(-832.000000, -1068.000000)" fill="#00AE00" fill-rule="nonzero">
                            <g id="pot-mix" transform="translate(832.000000, 1068.000000)">
                                <path d="M51.5555556,51.530396 C51.5555556,55.1034596 48.6702795,58 45.1111111,58 L12.8888889,58 C9.3297205,58 6.44444444,55.1034596 6.44444444,51.530396 L6.44444444,32.1215839 L0,32.1215839 L0,22.4171779 L35.4444444,22.4171779 L48.3333333,0 L53.9077778,3.23480201 L42.8877778,22.4171779 L58,22.4171779 L58,32.1215839 L51.5555556,32.1215839 L51.5555556,51.530396 Z" id="Path"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <h5>Cook</h5>
                <p>Our premium ingredients come pre-measured and prepped, saving you time. All you have to do is follow easy step-by-step instructions with photos.</p>
            </div>
            <div class="hiw-card">
                <svg width="68px" height="46px" viewBox="0 0 68 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Landing-Page" transform="translate(-1108.000000, -1072.000000)" fill="#00AE00" fill-rule="nonzero">
                            <g id="noun_Plate_33859-(1)" transform="translate(1108.000000, 1071.000000)">
                                <g id="Group">
                                    <g transform="translate(44.000000, 14.000000)">
                                        <path d="M11.841,5.928 C11.601,2.74 8.813,0.341 5.624,0.581 C2.435,0.823 0.036,3.612 0.276,6.799 C0.474,9.427 2.42,11.579 4.969,12.061 L6.304,29.813 C6.377,30.662 7.125,31.301 7.973,31.237 C8.388,31.206 8.767,31.014 9.037,30.696 C9.308,30.38 9.438,29.979 9.404,29.569 L8.063,11.801 C10.466,10.918 12.036,8.512 11.841,5.928 Z M5.851,3.609 C7.361,3.495 8.681,4.63 8.795,6.139 C8.908,7.648 7.773,8.968 6.264,9.081 C4.754,9.195 3.434,8.06 3.321,6.551 C3.206,5.042 4.342,3.723 5.851,3.609 Z" id="Shape"></path>
                                        <path d="M22.085,12.15 C21.673,12.081 21.26,12.176 20.92,12.419 C20.581,12.661 20.358,13.019 20.292,13.424 L19.87,15.914 C19.71,16.855 19.161,17.575 18.38,17.914 L19.175,13.227 C19.313,12.384 18.739,11.582 17.901,11.44 C17.49,11.37 17.076,11.466 16.733,11.71 C16.395,11.954 16.173,12.312 16.109,12.714 L15.316,17.395 C14.689,16.817 14.407,15.957 14.568,15.016 L14.993,12.516 C15.127,11.674 14.555,10.874 13.717,10.732 C13.306,10.662 12.893,10.757 12.553,11 C12.214,11.242 11.991,11.601 11.925,12.006 L11.5,14.515 C11.059,17.113 12.429,19.67 14.788,20.752 L11.809,38.303 C11.675,39.145 12.248,39.945 13.085,40.087 C13.496,40.156 13.909,40.061 14.249,39.818 C14.588,39.576 14.811,39.218 14.877,38.813 L17.854,21.244 C20.398,20.964 22.502,18.999 22.936,16.433 L23.36,13.937 C23.496,13.095 22.924,12.292 22.085,12.15 Z" id="Path"></path>
                                    </g>
                                    <path d="M47.314,44.039 L47.049,40.522 C46.238,41.92 45.255,43.245 44.059,44.442 C36.636,51.865 24.601,51.865 17.179,44.442 C9.755,37.017 9.755,24.983 17.179,17.561 C24.066,10.673 34.919,10.188 42.379,16.083 C42.781,15.365 43.283,14.709 43.864,14.13 C35.441,7.502 23.209,8.057 15.443,15.824 C7.061,24.205 7.061,37.793 15.443,46.176 C23.823,54.557 37.413,54.557 45.795,46.176 C46.364,45.607 46.887,45.009 47.379,44.396 C47.359,44.276 47.325,44.162 47.314,44.039 Z" id="Path"></path>
                                    <path d="M53.512,47.91 C53.095,48.073 52.66,48.195 52.2,48.229 C52.086,48.237 51.971,48.242 51.857,48.242 C50.6,48.242 49.455,47.705 48.622,46.851 C48.286,47.231 47.963,47.619 47.6,47.982 C38.221,57.36 23.015,57.36 13.637,47.982 C4.258,38.602 4.258,23.398 13.637,14.019 C22.498,5.158 36.556,4.681 45.991,12.566 C47.019,12.027 48.17,11.683 49.399,11.589 C49.623,11.572 49.844,11.564 50.064,11.564 C51.639,11.564 53.124,11.996 54.414,12.738 C53.626,11.714 52.771,10.724 51.833,9.785 C40.117,-1.93 21.121,-1.93 9.406,9.785 C-2.31,21.501 -2.31,40.496 9.406,52.213 C21.121,63.928 40.117,63.927 51.833,52.212 C52.233,51.812 52.617,51.401 52.99,50.985 L53.512,47.91 Z" id="Path"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <h5>Enjoy</h5>
                <p>Go ahead, pat yourself on the back. You'll be amazed by the tasty, restaurant-worthy meal you cooked. New recipes every week!</p>
            </div>
        </div>
    </section>

    <section class="container module-padding" id="find-recipes">
        <div class="row">
            <div class="col-md-12">
                <h2>Find Recipes</h2>
            </div>
        </div>
        <div class="row cards">
            @foreach($mealRecipes as $recipe)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{url('/uploads/recipes')}}/{{$recipe->image}}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>{{$recipe->name}}</strong></h4>
                        <!-- Text -->
                        <p class="card-text">{{$recipe->accompaniment}}. </p>
                        <a href="/recipe/{{$recipe->id}}" class="button">View Recipe</a>

                    </div>
                </div>
                <!-- Card Wider -->
            </div>
            @endforeach;
        </div>
    </section>

    <section class="container module-padding" id="ingredients">
        <div class="row">
            <div class="col-md-12">
                <h1>Discover</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>The Best Ingredients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('images/ingredients.png') }}">
            </div>
        </div>
    </section>

    <section class="module-padding" id="get-to-cooking">
        <div class="row">
            <div class="hero-video">
                <div class="overlay"></div>
                <div class="row text">
                    <div class="col-md-12">
                        <h1>Discover</h1>
                    </div>
                </div>
                <div class="row text">
                    <div class="col-md-12">
                        <h2>Get To Cooking</h2>
                    </div>
                </div>
                <video id="video" muted autoplay loop>
                    <source src="{{asset('images/video.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>


    <section class="container module-padding" id="our-story">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Story</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="wrapper">
                    <div class="box a" style="background-image:url('{{asset('images/us1.jpg') }}')">
                        <div class="box-text">
                            <h6>Expert Team</h6>
                            <p>We are a team with expertise in various fields dedicated to give you a great experience in home cooking using the best products the market has to offer.</p>
                        </div>
                    </div>
                    <div class="box b" style="background-image:url('{{asset('images/us2.jpg') }}')">
                        <div class="box-text">
                            <h6>Top Service</h6>
                            <p>We are dedicated to give you the best service from the time you start to the meal selection process to when we deliver the meal to your door.</p>
                        </div>
                    </div>
                    <div class="box d" style="background-image:url('{{asset('images/us3.jpg') }}')">
                        <div class="box-text">
                            <h6>Best Ingredients</h6>
                            <p>We work with farms all over the country to ensure we acquire the best healthy, organic products the market has to offer at a pocket friendly price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container module-padding" id="instagram">
        <div class="row">
            <div class="col-md-12">
                <h2>Find us on instagram</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-slider">
                    <div id="carousel" class="owl-carousel"></div>
                </div>
            </div>
        </div>
    </section>

    @include('cart')
    @include('components.footer')