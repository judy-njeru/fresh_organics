@extends('app')

@section('content')


<div class="container">
    <section id="meal-boxes" class="module-padding">
        <div class="row">
            <div class="col-md-12">
                <h2>Meal Boxes</h2>
            </div>
        </div>
        <div class="row cards">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Keto Box</strong></h4>
                        <!-- Text -->
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry.   </p>
                        <!-- Price -->
                        <p class="price">from &nbsp <strong>  450 kr.</strong></p>
                        <button class="button">Read More</button>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Keto Box</strong></h4>
                        <!-- Text -->
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry.   </p>
                        <!-- Price -->
                        <p class="price">from &nbsp <strong>  450 kr.</strong></p>
                        <button class="button">Read More</button>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src=" {{ asset('images/keto-buffalo-chicken.jpg') }}" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong>Keto Box</strong></h4>
                        <!-- Text -->
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry.   </p>
                        <!-- Price -->
                        <p class="price">from &nbsp <strong>  450 kr.</strong></p>
                        <button class="button">Read More</button>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>
         
       </div>
    </section>
</div>

@endsection