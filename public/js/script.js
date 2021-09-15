$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    dots:false,
    responsive:{
        0:{
            nav:false,
            items:1
        },
        600:{
            nav:false,
            items:3
        },
        1000:{
            items:5
        }
    }
})