@extends('app')

@section('content')
<!-- Hero -->
<section class="meal-tabs">
    <div class="meal-tabs-container">
      <a class="meal-tab" href="#keto">KETO</a>
      <a class="meal-tab" href="#paleo">PALEO</a>
      <a class="meal-tab" href="#vegan">VEGAN</a>
      <a class="meal-tab" href="#family">FAMILY</a>
      <a class="meal-tab" href="#cocktail">COCKTAIL</a>
      <span class="meal-tab-slider"></span>
    </div>
  </section>

  <!-- Main -->
  <main class="meals container">
    <section class="meal-recipes" id="keto">
      <h1>Keto</h1>
        <div class="row cards">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Buffalo drumsticks</strong></h4>
                        <!-- Text -->
                        <p class="card-text">With  garlic and chili aioli. </p>
                        <a href="/recipe">
                            <svg width="88px" height="22px" viewBox="0 0 88 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <filter x="-3.9%" y="-3.8%" width="107.7%" height="106.9%" filterUnits="objectBoundingBox" id="filter-1">
                                        <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                        <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                        <feMerge>
                                            <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                        </feMerge>
                                    </filter>
                                    <filter x="-1.8%" y="-1.7%" width="103.6%" height="102.9%" filterUnits="objectBoundingBox" id="filter-2">
                                        <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                        <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                        <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                        <feMerge>
                                            <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                        </feMerge>
                                    </filter>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Landing-Page" transform="translate(-388.000000, -1861.000000)" fill="#00AE00" fill-rule="nonzero">
                                        <g id="Group-3-Copy-3" filter="url(#filter-1)" transform="translate(175.000000, 1546.000000)">
                                            <g id="Group-8" filter="url(#filter-2)">
                                                <g id="Group-7-Copy-2" transform="translate(21.000000, 192.000000)">
                                                    <path id="Line-2" d="M261.769231,127 L275.769231,134 L261.769231,141 L261.769,135 L196,135 L196,133 L261.769,133 L261.769231,127 Z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Buffalo drumsticks</strong></h4>
                        <!-- Text -->
                        <p class="card-text">With  garlic and chili aioli. </p>
                        <svg width="88px" height="22px" viewBox="0 0 88 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-3.9%" y="-3.8%" width="107.7%" height="106.9%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter x="-1.8%" y="-1.7%" width="103.6%" height="102.9%" filterUnits="objectBoundingBox" id="filter-2">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Landing-Page" transform="translate(-388.000000, -1861.000000)" fill="#00AE00" fill-rule="nonzero">
                                    <g id="Group-3-Copy-3" filter="url(#filter-1)" transform="translate(175.000000, 1546.000000)">
                                        <g id="Group-8" filter="url(#filter-2)">
                                            <g id="Group-7-Copy-2" transform="translate(21.000000, 192.000000)">
                                                <path id="Line-2" d="M261.769231,127 L275.769231,134 L261.769231,141 L261.769,135 L196,135 L196,133 L261.769,133 L261.769231,127 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Buffalo drumsticks</strong></h4>
                        <!-- Text -->
                        <p class="card-text">With  garlic and chili aioli. </p>
                        <svg width="88px" height="22px" viewBox="0 0 88 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-3.9%" y="-3.8%" width="107.7%" height="106.9%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter x="-1.8%" y="-1.7%" width="103.6%" height="102.9%" filterUnits="objectBoundingBox" id="filter-2">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Landing-Page" transform="translate(-388.000000, -1861.000000)" fill="#00AE00" fill-rule="nonzero">
                                    <g id="Group-3-Copy-3" filter="url(#filter-1)" transform="translate(175.000000, 1546.000000)">
                                        <g id="Group-8" filter="url(#filter-2)">
                                            <g id="Group-7-Copy-2" transform="translate(21.000000, 192.000000)">
                                                <path id="Line-2" d="M261.769231,127 L275.769231,134 L261.769231,141 L261.769,135 L196,135 L196,133 L261.769,133 L261.769231,127 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
       </div>
    </section>
    <section class="meal-recipes" id="paleo">
      <h1>Paleo</h1>
      <div class="row cards">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Buffalo drumsticks</strong></h4>
                        <!-- Text -->
                        <p class="card-text">With  garlic and chili aioli. </p>
                        <svg width="88px" height="22px" viewBox="0 0 88 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-3.9%" y="-3.8%" width="107.7%" height="106.9%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter x="-1.8%" y="-1.7%" width="103.6%" height="102.9%" filterUnits="objectBoundingBox" id="filter-2">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Landing-Page" transform="translate(-388.000000, -1861.000000)" fill="#00AE00" fill-rule="nonzero">
                                    <g id="Group-3-Copy-3" filter="url(#filter-1)" transform="translate(175.000000, 1546.000000)">
                                        <g id="Group-8" filter="url(#filter-2)">
                                            <g id="Group-7-Copy-2" transform="translate(21.000000, 192.000000)">
                                                <path id="Line-2" d="M261.769231,127 L275.769231,134 L261.769231,141 L261.769,135 L196,135 L196,133 L261.769,133 L261.769231,127 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Buffalo drumsticks</strong></h4>
                        <!-- Text -->
                        <p class="card-text">With  garlic and chili aioli. </p>
                        <svg width="88px" height="22px" viewBox="0 0 88 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-3.9%" y="-3.8%" width="107.7%" height="106.9%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter x="-1.8%" y="-1.7%" width="103.6%" height="102.9%" filterUnits="objectBoundingBox" id="filter-2">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Landing-Page" transform="translate(-388.000000, -1861.000000)" fill="#00AE00" fill-rule="nonzero">
                                    <g id="Group-3-Copy-3" filter="url(#filter-1)" transform="translate(175.000000, 1546.000000)">
                                        <g id="Group-8" filter="url(#filter-2)">
                                            <g id="Group-7-Copy-2" transform="translate(21.000000, 192.000000)">
                                                <path id="Line-2" d="M261.769231,127 L275.769231,134 L261.769231,141 L261.769,135 L196,135 L196,133 L261.769,133 L261.769231,127 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Buffalo drumsticks</strong></h4>
                        <!-- Text -->
                        <p class="card-text">With  garlic and chili aioli. </p>
                        <svg width="88px" height="22px" viewBox="0 0 88 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-3.9%" y="-3.8%" width="107.7%" height="106.9%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter x="-1.8%" y="-1.7%" width="103.6%" height="102.9%" filterUnits="objectBoundingBox" id="filter-2">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Landing-Page" transform="translate(-388.000000, -1861.000000)" fill="#00AE00" fill-rule="nonzero">
                                    <g id="Group-3-Copy-3" filter="url(#filter-1)" transform="translate(175.000000, 1546.000000)">
                                        <g id="Group-8" filter="url(#filter-2)">
                                            <g id="Group-7-Copy-2" transform="translate(21.000000, 192.000000)">
                                                <path id="Line-2" d="M261.769231,127 L275.769231,134 L261.769231,141 L261.769,135 L196,135 L196,133 L261.769,133 L261.769231,127 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
       </div>
    </section>
    <section class="meal-recipes" id="vegan">
      <h1>Vegan</h1>
      <div class="row cards">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Buffalo drumsticks</strong></h4>
                        <!-- Text -->
                        <p class="card-text">With  garlic and chili aioli. </p>
                        <svg width="88px" height="22px" viewBox="0 0 88 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-3.9%" y="-3.8%" width="107.7%" height="106.9%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter x="-1.8%" y="-1.7%" width="103.6%" height="102.9%" filterUnits="objectBoundingBox" id="filter-2">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Landing-Page" transform="translate(-388.000000, -1861.000000)" fill="#00AE00" fill-rule="nonzero">
                                    <g id="Group-3-Copy-3" filter="url(#filter-1)" transform="translate(175.000000, 1546.000000)">
                                        <g id="Group-8" filter="url(#filter-2)">
                                            <g id="Group-7-Copy-2" transform="translate(21.000000, 192.000000)">
                                                <path id="Line-2" d="M261.769231,127 L275.769231,134 L261.769231,141 L261.769,135 L196,135 L196,133 L261.769,133 L261.769231,127 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Buffalo drumsticks</strong></h4>
                        <!-- Text -->
                        <p class="card-text">With  garlic and chili aioli. </p>
                        <svg width="88px" height="22px" viewBox="0 0 88 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-3.9%" y="-3.8%" width="107.7%" height="106.9%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter x="-1.8%" y="-1.7%" width="103.6%" height="102.9%" filterUnits="objectBoundingBox" id="filter-2">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Landing-Page" transform="translate(-388.000000, -1861.000000)" fill="#00AE00" fill-rule="nonzero">
                                    <g id="Group-3-Copy-3" filter="url(#filter-1)" transform="translate(175.000000, 1546.000000)">
                                        <g id="Group-8" filter="url(#filter-2)">
                                            <g id="Group-7-Copy-2" transform="translate(21.000000, 192.000000)">
                                                <path id="Line-2" d="M261.769231,127 L275.769231,134 L261.769231,141 L261.769,135 L196,135 L196,133 L261.769,133 L261.769231,127 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Buffalo drumsticks</strong></h4>
                        <!-- Text -->
                        <p class="card-text">With  garlic and chili aioli. </p>
                        <svg width="88px" height="22px" viewBox="0 0 88 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-3.9%" y="-3.8%" width="107.7%" height="106.9%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter x="-1.8%" y="-1.7%" width="103.6%" height="102.9%" filterUnits="objectBoundingBox" id="filter-2">
                                    <feOffset dx="0" dy="0" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.437952899   0 0 0 0 0.437952899   0 0 0 0 0.437952899  0 0 0 0.3 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Landing-Page" transform="translate(-388.000000, -1861.000000)" fill="#00AE00" fill-rule="nonzero">
                                    <g id="Group-3-Copy-3" filter="url(#filter-1)" transform="translate(175.000000, 1546.000000)">
                                        <g id="Group-8" filter="url(#filter-2)">
                                            <g id="Group-7-Copy-2" transform="translate(21.000000, 192.000000)">
                                                <path id="Line-2" d="M261.769231,127 L275.769231,134 L261.769231,141 L261.769,135 L196,135 L196,133 L261.769,133 L261.769231,127 Z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
       </div>
    </section>
    <section class="meal-recipes" id="family">
      <h1>Family</h1>
      <h3>something about FAMILY</h3>
    </section>
    <section class="meal-recipes" id="cocktail">
      <h1>Cocktail</h1>
      <h3>something about COCKTAIL</h3>
    </section>
  </main>



@endsection