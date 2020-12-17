$(document).ready(function(){

    //Banner owl Carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        autoplay: 3

    });

    //top sale owl carousel

    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav:true,
        dots: false,
        responsive : {
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:
            {
                items:5
            }
        }
    });

    //Isoptpe plugin

    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    $(".button-group").on("click", "button", function(){
        var filterValues = $(this).attr('data-filter');
        $grid.isotope({filter: filterValues});
    })


    //New Phones Section
    //top sale owl carousel

    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav:true,
        dots: false,
        responsive : {
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:
            {
                items:5
            }
        },
        autoplay: 1.5
    });

    //Blog Section
    $("#blog-section .owl-carousel").owlCarousel({
        loop: true,
        nav:true,
        dots: false,
        responsive : {
            0:{
                items:1
            },
            600:{
                items:3
            },
           
        },
        
    });


    //Product section

    let $qty_up =$(".qty .qty-up");
    let $qty_down =$(".qty .qty-down");
   // let $inputval =$(".qty .qty_input");

    $qty_up.click(function(e){
        let $inputval = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($inputval.val()>=1 && $inputval.val() <=9)
        {
            $inputval.val(function(i,oldval)
            {
                return ++oldval;
            });
        }
    });

    $qty_down.click(function(e){
        let $inputval = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($inputval.val()>1 && $inputval.val() <=10)
        {
            $inputval.val(function(i,oldval)
            {
                return --oldval;
            });
        }
    });
});