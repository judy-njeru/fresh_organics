
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

