
/* ---------------------
    GET INSTAGRAM IMAGES
   --------------------- */ 

const token = '21658901004.ad7f7b4.2fa97652d483404ea2f243ee928d6503';
const instaImagesUrl = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=21658901004.ad7f7b4.2fa97652d483404ea2f243ee928d6503';

$.ajax({
    url: instaImagesUrl,
    method: "GET",
    dataType: "JSON"
}).done(function(data){
    let imageCarousel = ' ';
    imageCarousel += '<div id="owl-demo" class="owl-carousel">';
                    
    const images = data.data
    for (let i = 0; i < images.length; i++) {
        const image = images[i].images.standard_resolution.url;
        const imageUrl = images[i].link;
        const imgID = images[i].id;
        imageCarousel+=`
                        <div class="item">
                            <a href="${imageUrl}" class="thumbnail" id="${imgID}">
                                <img src="${image}"  alt="Location Logo" />
                            </a>
                         </div>
                         `;
       
        imageCarousel += '</div>';  
    }

    $('#carousel').html(imageCarousel);

    $("#carousel").owlCarousel({
        // autoplay: true,
        // lazyLoad: true,
        // loop: true,
        margin: 20,
        responsiveClass: true,
        // autoHeight: true,
        dots: false,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
            items: 1
            },
        
            600: {
            items: 3
            },
        
            1024: {
            items: 4
            },
        
            1366: {
            items: 4
            }
        }
    });

})

/* ---------------------
    CARD HOVER
   --------------------- */ 

$('.button').on('mouseover', function(){
    $(this).parent().parent('.card').addClass('is-hover');
  }).on('mouseout', function(){
    $(this).parent().parent('.card').removeClass('is-hover');
})


// var duplicateChk = {};
// $('.inst-img').each(function (x) {
// if (duplicateChk.hasOwnProperty(this.id)) {
//     $(this).remove();
// } else {
//     duplicateChk[this.id] = 'true';
// }
// });   




/* --------------------------------------------------
    MEAL BOX
   ------------------------------------------------ */ 

$(".btnOrderMeal").on("click", function(){
    $(".order-info").css("right", "0px")
    $(".complete-order").addClass("overlay")
    $(".complete-order").css("opacity", "1")
})


$(".btnCloseOrder").on("click", function(){
    $(".order-info").css("right", "-600px")
    $(".complete-order").removeClass("overlay")
})

$(document).ready(function() {

    let mealBoxId = $(".meal-box-info").attr("data-attr")
 console.log("mealBoxId ", mealBoxId);
    let mealPrice = $("#meal-price").text()
    $(".total-price").text(mealPrice)

    $('.day').on('click', function(){
        const notClicked =  $('.day').not(this);
        notClicked.removeClass("day-active");
        $(this).addClass("day-active")
        recipesPerWeek = $('.day-active').text();
        let noOfDays = recipesPerWeek

        var selectedPeople = $('.people-active').attr('data-attr')

        //Keto Box
        if( mealBoxId == 1 ) {
            if( noOfDays == 5 && selectedPeople == 2 ){
                $(".total-price").text(835);
                $("#meal-price").text(835);
                $(".total-persons").text(2);
                $(".total-days").text(5);
            } 
            if( noOfDays == 3  && selectedPeople == 2 ){
                $(".total-price").text(645);
                $("#meal-price").text(645);
                $(".total-persons").text(2);
                $(".total-days").text(3);
            }
            if( noOfDays == 3 && selectedPeople == 4 ){
                $(".total-price").text(800);
                $("#meal-price").text(800);
                $(".total-persons").text(4);
                $(".total-days").text(3);
            }
            if( noOfDays == 5 && selectedPeople == 4 ){
                $(".total-price").text(1200);
                $("#meal-price").text(1200);
                $(".total-persons").text(4);
                $(".total-days").text(5);
            }
        }

         //Paleo Box
         if( mealBoxId == 2 ) {
            if( noOfDays == 5 && selectedPeople == 2 ){
                $(".total-price").text(989);
                $("#meal-price").text(989);
                $(".total-persons").text(2);
                $(".total-days").text(5);
            } 
            if( noOfDays == 3  && selectedPeople == 2 ){
                $(".total-price").text(620);
                $("#meal-price").text(620);
                $(".total-persons").text(2);
                $(".total-days").text(3);
            }
            if( noOfDays == 3 && selectedPeople == 4 ){
               $(".total-price").text(735);
               $("#meal-price").text(800);
               $(".total-persons").text(4);
                $(".total-days").text(3);
            }
            if( noOfDays == 5 && selectedPeople == 4 ){
                $(".total-price").text(1197);
                $("#meal-price").text(1197);
                $(".total-persons").text(4);
                $(".total-days").text(5);
            }
        }


         //Vegan Box
         if( mealBoxId == 3 ) {
            if( noOfDays == 5 && selectedPeople == 2 ){
                $(".total-price").text(499);
                $("#meal-price").text(499);
            } 
            if( noOfDays == 3  && selectedPeople == 2 ){
               $(".total-price").text(299);
               $("#meal-price").text(299);
            }
            if( noOfDays == 3 && selectedPeople == 4 ){
               $(".total-price").text(600);
               $("#meal-price").text(600);
            }
            if( noOfDays == 5 && selectedPeople == 4 ){
               $(".total-price").text(975);
               $("#meal-price").text(975);
            }
        }
        
    })

    $('.user-icon').on('click', function(){
        const notClicked =  $('.user-icon').not(this);
        notClicked.removeClass("people-active");
        $(this).addClass("people-active")
        let noOfPeople = $(this).attr('data-attr')

        var selectedDays = $('.day-active').attr('data-attr')

         //Keto Box
         if( mealBoxId == 1 ) {
            if( selectedDays == 5 && noOfPeople == 2 ){
                $(".total-price").text(835);
                $("#meal-price").text(835);
                $(".total-persons").text(2);
                $("#total-days").text(5);
            } 
            if( selectedDays == 3  && noOfPeople == 2 ){
                $(".total-price").text(645);
                $("#meal-price").text(645);
                $(".total-persons").text(2);
                $("#total-days").text(3);
            }
            if( selectedDays == 3 && noOfPeople == 4 ){
                $(".total-price").text(800);
                $("#meal-price").text(800);
                $(".total-persons").text(4);
                $("#total-days").text(3);
            }
            if( selectedDays == 5 && noOfPeople == 4 ){
                $(".total-price").text(1200);
                $("#meal-price").text(1200);
                $(".total-persons").text(4);
                $("#total-days").text(5);
            }
        }

         //Paleo Box
         if( mealBoxId == 2 ) {
            if( selectedDays == 5 && noOfPeople == 2 ){
                $(".total-price").text(989);
                $("#meal-price").text(989);
                $(".total-persons").text(2);
                $("#total-days").text(5);
            } 
            if( selectedDays == 3  && noOfPeople == 2 ){
                $(".total-price").text(620);
                $("#meal-price").text(620);
                $(".total-persons").text(2);
                $("#total-days").text(3);
            }
            if( selectedDays == 3 && noOfPeople == 4 ){
               $(".total-price").text(735);
               $("#meal-price").text(800);
               $(".total-persons").text(4);
                $("#total-days").text(3);
            }
            if( selectedDays == 5 && noOfPeople == 4 ){
                $(".total-price").text(1197);
                $("#meal-price").text(1197);
                $(".total-persons").text(4);
                $("#total-days").text(5);
            }
        }


         //Vegan Box
         if( mealBoxId == 3 ) {
            if( selectedDays == 5 && noOfPeople == 2 ){
                $(".total-price").text(989);
                $("#meal-price").text(989);
                $(".total-persons").text(2);
                $(".total-days").text(5);
            } 
            if( selectedDays == 3  && noOfPeople == 2 ){
                $(".total-price").text(620);
                $("#meal-price").text(620);
                $(".total-persons").text(2);
                $(".total-days").text(3);
            }
            if( selectedDays == 3 && noOfPeople == 4 ){
               $(".total-price").text(735);
               $("#meal-price").text(800);
               $(".total-persons").text(4);
                $(".total-days").text(3);
            }
            if( selectedDays == 5 && noOfPeople == 4 ){
                $(".total-price").text(1197);
                $("#meal-price").text(1197);
                $(".total-persons").text(4);
                $(".total-days").text(5);
            }
        }

         
    })


  
    
    $("select.meal-box-select").change(function(){
        var MealBoxID = $(this).children("option:selected").val();
        $("#mealBoxID").val(MealBoxID)
        console.log(MealBoxID);
    });

    $(".meal-box-select").click(function(){
        console.log('yya')
        // var selectedCountry = $(this).children("option:selected").val();
        // alert("You have selected the country - " + selectedCountry);
    });

    
})



