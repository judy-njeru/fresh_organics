@extends('layouts.app', ['body_class' => 'meal_boxes'])

@section('content')

<div class="container">
    <section id="meal-boxes" class="module-padding">
        <div class="row">
            <div class="col-md-12">
                <h2>Meal Boxes</h2>
            </div>
        </div>
        <div class="row cards">
            @foreach($mealBoxes as $mealBox)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card card-cascade wider">
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{url('/uploads/boxes')}}/{{$mealBox->image}}" alt="meal box image">
                    </div>
                    <div class="card-body card-body-cascade">
                        <h4 class="card-title"><strong>{{$mealBox->name}}</strong></h4>
                        <p class="card-text">{{$mealBox->description}}</p>
                        <p class="price">from &nbsp <strong> {{floatval($mealBox->price) }} kr.</strong></p>
                        <a href="/meal-boxes/{{$mealBox->name}}">
                            <button class="button">Read More</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>

@include('cart')

@endsection