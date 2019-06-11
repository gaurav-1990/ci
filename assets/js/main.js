$(document).ready(function(){

  
  $('#owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,

            loop:true
        }
    }
})

$('#owl_me_2').owlCarousel({
    
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,  loop:true,
            nav:true
        },
        600:{
            items:2,  loop:true,
            nav:true
        },
        1000:{
            items:4,
            nav:true,

          
        }
    }
})


});


