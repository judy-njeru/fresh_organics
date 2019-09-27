require('./bootstrap');

$("#adminDropdown").click(function(e){
    e.preventDefault()
    $('.dropdown-menu').css('display', 'block')
    console.log('lll')
})

// $(document).ready(function() {
//     const url = window.location.href; 
//  console.log("url ", url);
// })
