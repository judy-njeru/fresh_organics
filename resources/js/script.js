/* --------------------------------
    GET INSTAGRAM IMAGES
   ------------------------------ */

const token = "21658901004.ad7f7b4.2fa97652d483404ea2f243ee928d6503";
const instaImagesUrl =
    "https://api.instagram.com/v1/users/self/media/recent/?access_token=21658901004.ad7f7b4.2fa97652d483404ea2f243ee928d6503";

$.ajax({
    url: instaImagesUrl,
    method: "GET",
    dataType: "JSON"
}).done(function(data) {
    let imageCarousel = " ";
    imageCarousel += '<div id="owl-demo" class="owl-carousel">';

    const images = data.data;
    for (let i = 0; i < images.length; i++) {
        const image = images[i].images.standard_resolution.url;
        const imageUrl = images[i].link;
        const imgID = images[i].id;
        imageCarousel += `
                        <div class="item">
                            <a href="${imageUrl}" class="thumbnail" id="${imgID}">
                                <img src="${image}"  alt="Location Logo" />
                            </a>
                         </div>
                         `;

        imageCarousel += "</div>";
    }

    $("#carousel").html(imageCarousel);

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

            500: {
                items: 2
            },

            767: {
                items: 2
            },

            900: {
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
});

/* ---------------------
CARD HOVER
--------------------- */

$(".button")
    .on("mouseover", function() {
        $(this)
            .parent()
            .parent(".card")
            .addClass("is-hover");
    })
    .on("mouseout", function() {
        $(this)
            .parent()
            .parent(".card")
            .removeClass("is-hover");
    });

/* ---------------------------------------------------
    CART FUNCTIONALITY
   ------------------------------------------------- */

/* ------------- Add meal to Cart ------------------ */

$(".btnOrderMeal").on("click", function(e) {
    e.preventDefault();

    const url = $(this).attr("href");
    const selectedPeople = $(".people-active").attr("data-attr");
    const selectedDays = $(".day-active").attr("data-attr");
    const totalMealPrice = $("span.total-price").text();
    $.ajax({
        url: url,
        data: {
            selectedPeople: selectedPeople,
            selectedDays: selectedDays,
            totalMealPrice: totalMealPrice
        },
        dataType: "JSON"
    }).done(function(data) {
        console.log("data", data);
        getCart();

        $(".order-info").css("right", "0px");
        $(".complete-order").addClass("overlay");
        $(".complete-order").css("opacity", "1");
        $("body").addClass("full-height");
    });
});

/* ------------- Show Cart Contents ------------------ */

const csrfVar = $('meta[name="csrf-token"]').attr("content");

function getCart() {
    const base_url = window.location.origin + "/showCart";
    const selectedPeople = $(".people-active").attr("data-attr");
    const selectedDays = $(".day-active").attr("data-attr");

    $.ajax({
        url: base_url,
        data: { selectedPeople: selectedPeople, selectedDays: selectedDays },
        dataType: "JSON"
    }).done(function(data) {
        $("#cart-qty").text(data.totalQty);
        const cartQuantity = parseInt($("#cart-qty").text());

        if (cartQuantity == 0) {
            $("p.empty").text("cart is empty");
            $("#cart-order").css("display", "none");
        } else {
            $("#cart-order").empty();
            const cart = `<div id="cart-total"><div>Total</div> <div>${data.totalPrice} kr.</div></div>`;
            for (const key in data) {
                if (data.hasOwnProperty(key)) {
                    const meals = data[key];
                    for (let key in meals) {
                        const cartElement = ` 
                            <div class="row meal" id="${key}">
                                <div class="col-md-5">
                                    <div class="image" style="background-image:url('/uploads/boxes/${meals[key].item.image}')">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h6>${meals[key].item.name} Meal Box</h6>
                                    <p ><span class="total-days">Meal Days: <span id="md">${meals[key].item.days} Days</span> </span> </p>
                                    <p><span class="total-persons">No. of People:  <span id="nop">${meals[key].item.people} Persons</span></span> </p>
                                    <p><span class="meal-price">Meal Box Price: <span id="mbp"> ${meals[key].mealTotalPrice} </span></span> </p>
                                    <a type="submit" href= {{ route('cart.delete') }} id="${key}">
                                    <svg class="btnDeleteCartItem" style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="#383535 " d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                    </svg>
                                    </a>
                                </div>
                            </div>     
                            <hr>`;

                        $("#frmDeleteCartItem").append(
                            "<input name='_token' value='" +
                                csrfVar +
                                "' type='hidden'>"
                        );

                        $("#cart-order").prepend(cartElement);
                    }
                }
            }
            $("#cart-order").append(cart);
        }
    });
}

/* ------------- Delete Cart Item ------------------ */

$(document).on("click", ".btnDeleteCartItem", function(e) {
    e.preventDefault();
    const id = $(this)
        .parent()
        .attr("id");

    const base_url = window.location.origin + `/cart/delete/${id}`;
    // const token = $('meta[name="csrf-token"]').attr("content");

    $.ajax({
        url: base_url,
        data: { id: id },
        dataType: "JSON"
    }).done(function(data) {
        if (data.status === "success") {
            getCart();
        }
    });
});

/* ------------- Close Cart Overlay ------------------ */

$(".btnCloseOrder").on("click", function() {
    $(".order-info").css("right", "-600px");
    $(".complete-order").removeClass("overlay");
    $("body").removeClass("full-height");
});

/* ------------- Checkout Cart Order ------------------ */

$(".complete-order").on("click", function() {
    $(this).removeClass("overlay");
    $(".order-info").css("right", "-600px");
    $("body.meal-box").removeClass("full-height");
});

/* ---------------------------------------------------
    MEAL BOX VIEW
   ------------------------------------------------- */

$(document).ready(function() {
    const mealBoxId = $(".meal-box-info").attr("data-attr");
    const mealPrice = $("#meal-price").text();
    $(".total-price").text(mealPrice);

    $(".day").on("click", function() {
        const notClicked = $(".day").not(this);
        notClicked.removeClass("day-active");
        $(this).addClass("day-active");
        recipesPerWeek = $(".day-active").text();
        const noOfDays = recipesPerWeek;
        const selectedPeople = $(".people-active").attr("data-attr");

        //Keto Box
        if (mealBoxId == 1) {
            if (noOfDays == 5 && selectedPeople == 2) {
                $(".total-price").text(835);
                $(".total-persons").text(2);
                $(".total-days").text(5);
            }
            if (noOfDays == 3 && selectedPeople == 2) {
                $(".total-price").text(645);
                // $("#meal-price").text(645);
                $(".total-persons").text(2);
                $(".total-days").text(3);
            }
            if (noOfDays == 3 && selectedPeople == 4) {
                $(".total-price").text(800);
                // $("#meal-price").text(800);
                $(".total-persons").text(4);
                $(".total-days").text(3);
            }
            if (noOfDays == 5 && selectedPeople == 4) {
                $(".total-price").text(1200);
                // $("#meal-price").text(1200);
                $(".total-persons").text(4);
                $(".total-days").text(5);
            }
        }

        //Paleo Box
        if (mealBoxId == 2) {
            if (noOfDays == 5 && selectedPeople == 2) {
                $(".total-price").text(989);
                // $("#meal-price").text(989);
                $(".total-persons").text(2);
                $(".total-days").text(5);
            }
            if (noOfDays == 3 && selectedPeople == 2) {
                $(".total-price").text(620);
                // $("#meal-price").text(620);
                $(".total-persons").text(2);
                $(".total-days").text(3);
            }
            if (noOfDays == 3 && selectedPeople == 4) {
                $(".total-price").text(735);
                // $("#meal-price").text(800);
                $(".total-persons").text(4);
                $(".total-days").text(3);
            }
            if (noOfDays == 5 && selectedPeople == 4) {
                $(".total-price").text(1197);
                // $("#meal-price").text(1197);
                $(".total-persons").text(4);
                $(".total-days").text(5);
            }
        }

        //Vegan Box
        if (mealBoxId == 3) {
            if (noOfDays == 5 && selectedPeople == 2) {
                $(".total-price").text(499);
                // $("#meal-price").text(499);
            }
            if (noOfDays == 3 && selectedPeople == 2) {
                $(".total-price").text(299);
                // $("#meal-price").text(299);
            }
            if (noOfDays == 3 && selectedPeople == 4) {
                $(".total-price").text(600);
                // $("#meal-price").text(600);
            }
            if (noOfDays == 5 && selectedPeople == 4) {
                $(".total-price").text(975);
                // $("#meal-price").text(975);
            }
        }
    });

    $(".user-icon").on("click", function() {
        const notClicked = $(".user-icon").not(this);
        notClicked.removeClass("people-active");
        $(this).addClass("people-active");
        let noOfPeople = $(this).attr("data-attr");

        var selectedDays = $(".day-active").attr("data-attr");

        //Keto Box
        if (mealBoxId == 1) {
            if (selectedDays == 5 && noOfPeople == 2) {
                $(".total-price").text(835);
                // $("#meal-price").text(835);
                $(".total-persons").text(2);
                $("#total-days").text(5);
            }
            if (selectedDays == 3 && noOfPeople == 2) {
                $(".total-price").text(645);
                // $("#meal-price").text(645);
                $(".total-persons").text(2);
                $("#total-days").text(3);
            }
            if (selectedDays == 3 && noOfPeople == 4) {
                $(".total-price").text(800);
                // $("#meal-price").text(800);
                $(".total-persons").text(4);
                $("#total-days").text(3);
            }
            if (selectedDays == 5 && noOfPeople == 4) {
                $(".total-price").text(1200);
                // $("#meal-price").text(1200);
                $(".total-persons").text(4);
                $("#total-days").text(5);
            }
        }

        //Paleo Box
        if (mealBoxId == 2) {
            if (selectedDays == 5 && noOfPeople == 2) {
                $(".total-price").text(989);
                // $("#meal-price").text(989);
                $(".total-persons").text(2);
                $("#total-days").text(5);
            }
            if (selectedDays == 3 && noOfPeople == 2) {
                $(".total-price").text(620);
                // $("#meal-price").text(620);
                $(".total-persons").text(2);
                $("#total-days").text(3);
            }
            if (selectedDays == 3 && noOfPeople == 4) {
                $(".total-price").text(735);
                // $("#meal-price").text(800);
                $(".total-persons").text(4);
                $("#total-days").text(3);
            }
            if (selectedDays == 5 && noOfPeople == 4) {
                $(".total-price").text(1197);
                // $("#meal-price").text(1197);
                $(".total-persons").text(4);
                $("#total-days").text(5);
            }
        }

        //Vegan Box
        if (mealBoxId == 3) {
            if (selectedDays == 5 && noOfPeople == 2) {
                $(".total-price").text(989);
                // $("#meal-price").text(989);
                $(".total-persons").text(2);
                $(".total-days").text(5);
            }
            if (selectedDays == 3 && noOfPeople == 2) {
                $(".total-price").text(620);
                // $("#meal-price").text(620);
                $(".total-persons").text(2);
                $(".total-days").text(3);
            }
            if (selectedDays == 3 && noOfPeople == 4) {
                $(".total-price").text(735);
                // $("#meal-price").text(800);
                $(".total-persons").text(4);
                $(".total-days").text(3);
            }
            if (selectedDays == 5 && noOfPeople == 4) {
                $(".total-price").text(1197);
                // $("#meal-price").text(1197);
                $(".total-persons").text(4);
                $(".total-days").text(5);
            }
        }
    });

    $("select.meal-box-select").change(function() {
        var MealBoxID = $(this)
            .children("option:selected")
            .val();
        $("#mealBoxID").val(MealBoxID);
        // console.log(MealBoxID);
    });

    //NUTRITION INFO OVERLAY
    $(".nutrition-info").click(function() {
        $(".nutrition-overlay").css("display", "block");
    });

    $(".close-nutrition-overlay").click(function() {
        $(".nutrition-overlay").css("display", "none");
    });

    //cart
    if ($(".alert-success")[0]) {
        $(".order-info").css("right", "0px");
        $(".complete-order").addClass("overlay");
        $(".complete-order").css("opacity", "1");
    } else {
        // Do something if class does not exist
    }

    $("li.view-cart a").click(function(e) {
        e.preventDefault();

        $(".order-info").css("right", "0px");
        $(".complete-order").addClass("overlay");
        $(".complete-order").css("opacity", "1");
        $("body").addClass("full-height");

        const cartQty = $("#cart-qty").text();

        getCart(cartQty);
    });
});
