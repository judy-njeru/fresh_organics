@extends('app')

@section('content')

<section id="meal-recipe" class="module-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="recipe-image" style="background-image:url('{{asset('images/recipe.jpg') }}')"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="recipe-content">
                    <h1>Crispy Chicken Curry</h1>
                    <p>with sautéed zuchchini and nectarine rice</p>
                    <p>In this delicious, vibrant dish, chicken is dusted with a coating of cornstarch and warming vadouvan curry powder to create a delightfully flavorful, crispy crust—perfect for soaking up an irresistible combo of creamy mayo and tangy sweet chili sauce.</p>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
