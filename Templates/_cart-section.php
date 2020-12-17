<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete-cart-submit']))
    {
        $deleterecord=$cart->deleteFromCart($_POST['item_id']);
    }

    if(isset($_POST['save-for-later']))
    {
        $wishlist=$cart->saveForLater($_POST['item_id']);
    }
}

?>
<!-- Cart Section -->
<section class="cart" class="py-3">
    <div class="container-fluid w-75">
        <h4 class="font-baloo font-size-20">Shopping Cart</h4>

        <!-- Shopping Cart Items -->
        <div class="row">
            <div class="col-sm-9">
                <?php


                foreach ($product->getData('cart') as $item):
                    $crt=$product->getProduct($item['item_id']);
                    $subTotal[]=array_map(function($item){
                ?>
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image']?? " ./assets/products/1.png"; ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-16"><?php echo $item['item_name']; ?></h5>
                        <small>by <?php echo $item['item_brand']; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <a href="#" class="font-size-12 font-raleway px-2">20,200 ratings</a>
                        </div>
                        <!-- Product Rating section end -->

                        <!-- Product Qty -->
                        <div class="d-flex qty pt-2">
                            <div class="d-flex w-25 font-rale">
                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id']??'0';?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id']??'0';?>" class="bg-light border px-2 qty_input w-50" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="<?php echo $item['item_id']??'0';?>"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input name="item_id" type="hidden" value="<?php echo $item['item_id']?? 0 ?>"/>
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo px-3 border-right text-danger font-size-14">Delete</button>
                            </form>

                            <form method="post">
                                <input name="item_id" type="hidden" value="<?php echo $item['item_id']?? 0 ?>"/>
                                <button type="submit" class="btn font-baloo px-3 text-danger font-size-14" name="save-for-later">Save for Later</button>
                            </form>

                        </div>
                        <!-- Product Qty End -->
                    </div>

                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">$ <span class="product_price" data-id="<?php echo $item['item_id']??'0';?>"><?php echo $item['item_price']; ?></span></div>
                    </div>
                </div>
                <?php
                        return $item['item_price'];
                    },$crt);
                    endforeach;
                ?>
            </div>


            <!-- Subtotal Section Start -->
            <div class="col-sm-3">
                <div class="sub-total text-center py-3 mt-3 border">
                    <h6 class="font-size-12 font-baloo text-primary"><i class="fa fas-check"></i> Your order is eligible for FREE Delivery.</h6>
                    <div class="py-4 border-top">
                        <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0; ?> items):&nbsp;<span class="text-danger">$<span id="deal-price" ><?php echo isset($subTotal) ? $cart->getSum($subTotal) : 0; ?></span></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Pay</button>
                    </div>
                </div>

            </div>
            <!-- Subtotal Section End -->


        </div>
        <!-- !Shopping Cart Items -->


    </div>
</section>
<!-- !Cart Section -->
