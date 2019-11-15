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
           <?php foreach ($mealBoxes as $mealBox)  : $boxPrice =  $mealBox->price; $boxPrice = floatval($boxPrice)?>
           
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <!-- Card Wider -->
                    <div class="card card-cascade wider">
                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="{{url('/uploads/boxes')}}/<?=$mealBox->image ?>" alt="meal box image">
                        </div>
                        <!-- Card content -->
                        <div class="card-body card-body-cascade">
                            <!-- Title -->
                            <h4 class="card-title"><strong><?= $mealBox->name ?></strong></h4>
                            <!-- Text -->
                            <p class="card-text"><?= $mealBox->description ?>  </p>
                            <!-- Price -->
                            <p class="price">from &nbsp <strong>  <?= $boxPrice ?> kr.</strong></p>
                            <a href="/meal-boxes/{{$mealBox->name}}">
                                <button class="button">Read More</button>
                            </a>
                        </div>
                    </div>
                    <!-- Card Wider -->
                </div>
           <?php  endforeach?>
       </div>
    </section>
</div>

@endsection