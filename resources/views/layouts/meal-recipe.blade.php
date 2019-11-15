@extends('app')

@section('content')
<div id="meal-recipe" class="module-padding">
    <div class="container">
        <div class="row mb-4">
            <?php foreach( $mealRecipe as $recipe) : ?>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="recipe-image" style="background-image:url('{{url('/uploads/recipes')}}/<?=$recipe->image?>')"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 recipe">
                <div class="recipe-content mb-4">
                    <h1><?=$recipe->name ?></h1>
                    <p><?= $recipe->accompaniment ?></p>
                    <p><?=$recipe->description ?></p>
                </div>
                <div class="row info">
                    <div class="col-lg-4 col-md-4 col-sm-4 time">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#000000" d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" />
                        </svg>
                            
                        <p>Time</p>
                        <p><?=$recipe->time ?></p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 servings">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#000000" d="M11,9H9V2H7V9H5V2H3V9C3,11.12 4.66,12.84 6.75,12.97V22H9.25V12.97C11.34,12.84 13,11.12 13,9V2H11V9M16,6V14H18.5V22H21V2C18.24,2 16,4.24 16,6Z" />
                        </svg>
                            
                        <p>Servings</p>
                        <p>2</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 nutrition">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#000000" d="M17.55,11.2C17.32,10.9 17.05,10.64 16.79,10.38C16.14,9.78 15.39,9.35 14.76,8.72C13.3,7.26 13,4.85 13.91,3C13,3.23 12.16,3.75 11.46,4.32C8.92,6.4 7.92,10.07 9.12,13.22C9.16,13.32 9.2,13.42 9.2,13.55C9.2,13.77 9.05,13.97 8.85,14.05C8.63,14.15 8.39,14.09 8.21,13.93C8.15,13.88 8.11,13.83 8.06,13.76C6.96,12.33 6.78,10.28 7.53,8.64C5.89,10 5,12.3 5.14,14.47C5.18,14.97 5.24,15.47 5.41,15.97C5.55,16.57 5.81,17.17 6.13,17.7C7.17,19.43 9,20.67 10.97,20.92C13.07,21.19 15.32,20.8 16.93,19.32C18.73,17.66 19.38,15 18.43,12.72L18.3,12.46C18.1,12 17.83,11.59 17.5,11.21L17.55,11.2M14.45,17.5C14.17,17.74 13.72,18 13.37,18.1C12.27,18.5 11.17,17.94 10.5,17.28C11.69,17 12.39,16.12 12.59,15.23C12.76,14.43 12.45,13.77 12.32,13C12.2,12.26 12.22,11.63 12.5,10.94C12.67,11.32 12.87,11.7 13.1,12C13.86,13 15.05,13.44 15.3,14.8C15.34,14.94 15.36,15.08 15.36,15.23C15.39,16.05 15.04,16.95 14.44,17.5H14.45Z" />
                        </svg>
                            
                        <p>Nutrition</p>
                        <p>500 Calories 
                            <span>
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="#000000" d="M20,16V4H8V16H20M22,16A2,2 0 0,1 20,18H8C6.89,18 6,17.1 6,16V4C6,2.89 6.89,2 8,2H20A2,2 0 0,1 22,4V16M16,20V22H4A2,2 0 0,1 2,20V7H4V20H16Z" />
                                </svg>
                            </span>
                        </p>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="row rc-ing">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 ">
                <h1>Ingredients</h1>
                <div class="ingredients">
                    <?php foreach( $ingredients as $ingredient) : ?>
                        
                        <div class="ingredient">
                            <img src="<?= $ingredient->ingredient_image ?>"> 
                            <p><?= $ingredient->ingredient_name ?></p>
                        </div>
                    
                    <?php endforeach; ?>
              
                </div>
            </div>
        </div>
       
    </div>

</div>

@endsection
