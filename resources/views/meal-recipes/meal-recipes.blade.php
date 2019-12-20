@extends('layouts.app', ['body_class' => 'recipes'])

@section('content')
<!-- Hero -->
<section class="meal-tabs">
    <div class="meal-tabs-container">
      <a class="meal-tab" href="#keto">KETO</a>
      <a class="meal-tab" href="#paleo">PALEO</a>
      <a class="meal-tab" href="#vegan">VEGAN</a>
      <span class="meal-tab-slider"></span>
    </div>
  </section>

  <!-- Main -->
  <main class="meals container">
    <section class="meal-recipes" id="keto">
      <h1>Keto</h1>
        <div class="row cards">
            <?php foreach ($mealRecipes as $mealRecipe) : ?>
                <?php if($mealRecipe->meal_boxes_fk === 1): ?>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{url('/uploads/recipes')}}/<?=$mealRecipe->image ?>" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong><?=$mealRecipe->name ?></strong></h4>
                        <!-- Text -->
                        <p class="card-text"><?=$mealRecipe->accompaniment ?></p>
                        <a href="/recipe/{{$mealRecipe->id}}" class="button">View Recipe </a>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>

            <?php endif; ?>
            <?php endforeach; ?>
       </div>
    </section>
    <section class="meal-recipes" id="paleo">
      <h1>Paleo</h1>
      <div class="row cards">
        <?php foreach ($mealRecipes as $mealRecipe) : ?>
            <?php if($mealRecipe->meal_boxes_fk === 2): ?>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{url('/uploads/recipes')}}/<?=$mealRecipe->image ?>" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong><?=$mealRecipe->name ?></strong></h4>
                        <!-- Text -->
                        <p class="card-text"><?=$mealRecipe->accompaniment ?></p>
                        <a href="/recipe/{{$mealRecipe->id}}" class="button">View Recipe </a>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>

            <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </section>
    <section class="meal-recipes" id="vegan">
      <h1>Vegan</h1>
      <div class="row cards">
        <?php foreach ($mealRecipes as $mealRecipe) : ?>
            <?php if($mealRecipe->meal_boxes_fk === 3): ?>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <!-- Card Wider -->
                <div class="card card-cascade wider">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{url('/uploads/recipes')}}/<?=$mealRecipe->image ?>" alt="recipe image">
                    </div>
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <!-- Title -->
                        <h4 class="card-title"><strong><?=$mealRecipe->name ?></strong></h4>
                        <!-- Text -->
                        <p class="card-text"><?=$mealRecipe->accompaniment ?></p>
                        <a href="/recipe/{{$mealRecipe->id}}" class="button">View Recipe</a>
                    </div>
                </div>
                <!-- Card Wider -->
            </div>

            <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </section>
  
  </main>

  @include('cart')

@endsection