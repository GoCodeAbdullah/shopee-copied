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
    let $deal_price=$("#deal-price");
    // let $inputval =$(".qty .qty_input");

    $qty_up.click(function(e){
        let $inputval = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //Call product prize by AJAx
        $.ajax({url:'Templates/ajax.php',type:'post',data: {itemid: $(this).data("id")},success:function(result){
            let obj=JSON.parse(result);
            let item_price=obj[0]["item_price"];
            console.log(item_price);

            if($inputval.val()>=1 && $inputval.val() <=9)
            {
                $inputval.val(function(i,oldval)
                {
                    return ++oldval;
                });

                $price.text(parseInt(item_price * $inputval.val()).toFixed(2));

                let subtoal= parseInt($deal_price.text())+ parseInt(item_price);
                $deal_price.text(subtoal.toFixed(2));
            }


        }});



    });

    $qty_down.click(function(e){
        let $inputval = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({url:'Templates/ajax.php',type:'post',data: {itemid: $(this).data("id")},success:function(result){
                let obj=JSON.parse(result);
                let item_price=obj[0]["item_price"];
                console.log(item_price);

                if($inputval.val()>1 && $inputval.val() <=10)
                {
                    $inputval.val(function(i,oldval)
                    {
                        return --oldval;
                    });
                    $price.text(parseInt(item_price * $inputval.val()).toFixed(2));

                    let subtoal= parseInt($deal_price.text())- parseInt(item_price);
                    $deal_price.text(subtoal.toFixed(2));
                }


            }});

    });
});