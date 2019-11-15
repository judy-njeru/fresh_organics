@extends('app')

@section('content')

<?php 
   
?>

<div class="meal-box-md module-padding ">
    <div class="row">
        <div class="col-md-8">   
            <?php foreach($mealBox as $box):  $price =  $box['price']; $price = floatval($price);?>             
        <div class="row meal-box-info" data-attr=<?=$box['id']?>>
            <div class="col-md-6 image" style="background-image:url('{{url('/uploads/boxes')}}/<?=$box['image']?>')"></div>
            <div class="col-md-6 info">
                <h1><?=$box['name']?> Box</h1>
                <div class="delivery">
                    <svg style="width:30px;height:28px" viewBox="0 0 24 24">
                        <path fill="#f7ca1a" d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.47,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z" />
                    </svg>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                </div>
                <div class="order-day">
                <svg style="width:30px;height:28px" viewBox="0 0 24 24">
                    <path fill="#f7ca1a" d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z" />
                </svg>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                </div>
                <div class="delivery-day">
                    <svg style="width:30px;height:28px" viewBox="0 0 24 24">
                        <path fill="#f7ca1a" d="M9,10V12H7V10H9M13,10V12H11V10H13M17,10V12H15V10H17M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5A2,2 0 0,1 5,3H6V1H8V3H16V1H18V3H19M19,19V8H5V19H19M9,14V16H7V14H9M13,14V16H11V14H13M17,14V16H15V14H17Z" />
                    </svg>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry.</p>
                </div>

                <div class="weekly-recipes">
                    <h6>Recipes Per Week</h6>
                    <div class="days">
                        <div>
                            <svg class="day day-active" data-attr="3" width="35px" height="32px" viewBox="0 0 35 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-497.000000, -474.000000)" fill="#a0a0a0">
                                        <g transform="translate(497.000000, 474.000000)">
                                            <text id="3" font-family="SourceSansPro-Semibold, Source Sans Pro" font-size="14" font-weight="500" letter-spacing="0.326666667">
                                                <tspan x="14" y="24">3</tspan>
                                            </text>
                                            <g fill-rule="nonzero">
                                                <path d="M31.1111111,28.8 L3.88888889,28.8 L3.88888889,11.2 L31.1111111,11.2 M25.2777778,0 L25.2777778,3.2 L9.72222222,3.2 L9.72222222,0 L5.83333333,0 L5.83333333,3.2 L3.88888889,3.2 C1.73055556,3.2 0,4.624 0,6.4 L0,28.8 C0,30.5673112 1.74111486,32 3.88888889,32 L31.1111111,32 C33.2588851,32 35,30.5673112 35,28.8 L35,6.4 C35,4.624 33.25,3.2 31.1111111,3.2 L29.1666667,3.2 L29.1666667,0" id="Shape"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div>
                            <svg class="day" data-attr="5" width="35px" height="32px" viewBox="0 0 35 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-497.000000, -474.000000)" fill="#a0a0a0">
                                        <g transform="translate(497.000000, 474.000000)">
                                            <text id="5" font-family="SourceSansPro-Semibold, Source Sans Pro" font-size="14" font-weight="500" letter-spacing="0.326666667">
                                                <tspan x="14" y="24">5</tspan>
                                            </text>
                                            <g fill-rule="nonzero">
                                                <path d="M31.1111111,28.8 L3.88888889,28.8 L3.88888889,11.2 L31.1111111,11.2 M25.2777778,0 L25.2777778,3.2 L9.72222222,3.2 L9.72222222,0 L5.83333333,0 L5.83333333,3.2 L3.88888889,3.2 C1.73055556,3.2 0,4.624 0,6.4 L0,28.8 C0,30.5673112 1.74111486,32 3.88888889,32 L31.1111111,32 C33.2588851,32 35,30.5673112 35,28.8 L35,6.4 C35,4.624 33.25,3.2 31.1111111,3.2 L29.1666667,3.2 L29.1666667,0" id="Shape"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="no-of-people">
                    <h6>Number Of People</h6>
                    <div class="people">
                        <div class="user-icon people-active" data-attr="2">
                            <svg width="30px" height="20px" viewBox="0 0 24 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Meal-Box" transform="translate(-463.000000, -585.000000)" fill="#757575" fill-rule="nonzero">
                                        <g id="Group-16" transform="translate(444.000000, 569.000000)">
                                            <g id="Group-14" transform="translate(19.000000, 16.000000)">
                                                <g id="account">
                                                    <path d="M5.5,0 C7.01878306,0 8.25,1.23121694 8.25,2.75 C8.25,4.26878306 7.01878306,5.5 5.5,5.5 C3.98121694,5.5 2.75,4.26878306 2.75,2.75 C2.75,1.23121694 3.98121694,0 5.5,0 M5.5,6.875 C8.53875,6.875 11,8.105625 11,9.625 L11,11 L0,11 L0,9.625 C0,8.105625 2.46125,6.875 5.5,6.875 Z" id="Shape"></path>
                                                </g>
                                                <g id="account-copy-4" transform="translate(13.000000, 0.000000)">
                                                    <path d="M5.5,0 C7.01878306,0 8.25,1.23121694 8.25,2.75 C8.25,4.26878306 7.01878306,5.5 5.5,5.5 C3.98121694,5.5 2.75,4.26878306 2.75,2.75 C2.75,1.23121694 3.98121694,0 5.5,0 M5.5,6.875 C8.53875,6.875 11,8.105625 11,9.625 L11,11 L0,11 L0,9.625 C0,8.105625 2.46125,6.875 5.5,6.875 Z" id="Shape"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="user-icon" data-attr="4">
                            <svg width="65px" height="20px" viewBox="0 0 50 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Meal-Box" transform="translate(-540.000000, -585.000000)" fill="#757575" fill-rule="nonzero">
                                        <g id="Group-15" transform="translate(523.000000, 569.000000)">
                                            <g id="Group-13" transform="translate(17.000000, 16.000000)">
                                                <g id="account">
                                                    <path d="M5.5,0 C7.01878306,0 8.25,1.23121694 8.25,2.75 C8.25,4.26878306 7.01878306,5.5 5.5,5.5 C3.98121694,5.5 2.75,4.26878306 2.75,2.75 C2.75,1.23121694 3.98121694,0 5.5,0 M5.5,6.875 C8.53875,6.875 11,8.105625 11,9.625 L11,11 L0,11 L0,9.625 C0,8.105625 2.46125,6.875 5.5,6.875 Z" id="Shape"></path>
                                                </g>
                                                <g id="account-copy" transform="translate(13.000000, 0.000000)">
                                                    <path d="M5.5,0 C7.01878306,0 8.25,1.23121694 8.25,2.75 C8.25,4.26878306 7.01878306,5.5 5.5,5.5 C3.98121694,5.5 2.75,4.26878306 2.75,2.75 C2.75,1.23121694 3.98121694,0 5.5,0 M5.5,6.875 C8.53875,6.875 11,8.105625 11,9.625 L11,11 L0,11 L0,9.625 C0,8.105625 2.46125,6.875 5.5,6.875 Z" id="Shape"></path>
                                                </g>
                                                <g id="account-copy-2" transform="translate(26.000000, 0.000000)">
                                                    <path d="M5.5,0 C7.01878306,0 8.25,1.23121694 8.25,2.75 C8.25,4.26878306 7.01878306,5.5 5.5,5.5 C3.98121694,5.5 2.75,4.26878306 2.75,2.75 C2.75,1.23121694 3.98121694,0 5.5,0 M5.5,6.875 C8.53875,6.875 11,8.105625 11,9.625 L11,11 L0,11 L0,9.625 C0,8.105625 2.46125,6.875 5.5,6.875 Z" id="Shape"></path>
                                                </g>
                                                <g id="account-copy-3" transform="translate(39.000000, 0.000000)">
                                                    <path d="M5.5,0 C7.01878306,0 8.25,1.23121694 8.25,2.75 C8.25,4.26878306 7.01878306,5.5 5.5,5.5 C3.98121694,5.5 2.75,4.26878306 2.75,2.75 C2.75,1.23121694 3.98121694,0 5.5,0 M5.5,6.875 C8.53875,6.875 11,8.105625 11,9.625 L11,11 L0,11 L0,9.625 C0,8.105625 2.46125,6.875 5.5,6.875 Z" id="Shape"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                      
                    </div>
                </div>

                <div class="price">
                    <p>Price:<span id="meal-price">&nbsp;<?=$price?></span>kr.</p>
                </div>
            </div>
            <div class="description">
                <p> <?=$box['description']?></p>
            </div>
            <?php endforeach; ?>
        </div>
        

        <div class="row meal-boxes">
            <div class="col-md-12 boxes">
                <h4>Other Meal Boxes</h4>    

                <div class="row cards">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <!-- Card Wider -->
                        <div class="card card-cascade wider">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src=" //localhost:3000/images/keto-buffalo-chicken.jpg" alt="recipe image">
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Title -->
                                <h4 class="card-title"><strong>Keto Box</strong></h4>
                                <!-- Text -->
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry.   </p>
                                <!-- Price -->
                                <a href="/box">
                                    <button class="button">Read More</button>
                                </a>
                            </div>
                        </div>
                        <!-- Card Wider -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <!-- Card Wider -->
                        <div class="card card-cascade wider">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src=" //localhost:3000/images/keto-buffalo-chicken.jpg" alt="recipe image">
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Title -->
                                <h4 class="card-title"><strong>Vegan Box</strong></h4>
                                <!-- Text -->
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry.   </p>
                                <!-- Price -->
                                <a href="/box">
                                    <button class="button">Read More</button>
                                </a>
                            </div>
                        </div>
                        <!-- Card Wider -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <!-- Card Wider -->
                        <div class="card card-cascade wider">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src=" //localhost:3000/images/keto-buffalo-chicken.jpg" alt="recipe image">
                            </div>
                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Title -->
                                <h4 class="card-title"><strong>Paleo Box</strong></h4>
                                <!-- Text -->
                                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the printing and typesetting industry.   </p>
                                <!-- Price -->
                                <a href="/box">
                                    <button class="button">Read More</button>
                                </a>
                            </div>
                        </div>
                        <!-- Card Wider -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3 order-details">
            <h4>your meal box:</h4>
            <hr>
            <div class="icons">
              <div class="person">
                <svg style="width:30px;height:28px" viewBox="0 0 24 24">
                    <path fill="#757575" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                </svg>
                <p> <span class="total-persons">2 </span> PERS</p>
              </div>
              <div class="days">
                <svg style="width:30px;height:28px" viewBox="0 0 24 24">
                    <path fill="#757575" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1" />
                </svg>

                <p ><span class="total-days">3 </span> DAYS</p>
              </div>
            </div>

            <hr>
            <p>You’ll be getting <span class="total-days">3</span> keto friendly recipes per week for <span class="total-persons">2</span> people. Sound great?</p>

            <div class="price">
                <div>Total Price:</div>
                <div><span class="total-price"></span> kr.</div>
            </div>

            <div class="order">
                <button class="button btnOrderMeal">Order Now</button>
            </div>
        </div>
    </div>


    <div class="complete-order">
        <div class="order-info">
        <div class="header">
            <div>Shopping Cart</div>
            <div class="close btnCloseOrder">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="#000000" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                </svg>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-5">
                <div class="image" style="background-image:url('{{asset('images/recipe.jpg') }}')">
                    image
                </div>
            </div>
            <div class="col-md-7">
                <h6>Keto Box</h6>
                <p ><span class="total-days">3</span> Days</p>
                <p><span class="total-persons">2</span> Persons</p>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="total">
                    <div>Total:</div>
                    <div><span class="total-price">600</span> kr.</div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12">
            <a class="order" href="/checkout">
                <button class="button btnOrderMeal">Complete Order</button>
            </a>
            </div>
        </div>    
        </div>
      

    </div>
</div>

@endsection