<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete-submit']))
    {
        $deleterecord=$cart->deleteFromCart($_POST['item_id'],wishlist);
    }
    if(isset($_POST['add-to-cart']))
    {
        $deleterecord=$cart->saveForLater($_POST['item_id'],cart,wishlist);
    }
}

?>
<!-- Cart Section -->
<section class="cart" class="py-3">
    <div class="container-fluid w-75">
        <h4 class="font-baloo font-size-20">Wishlist</h4>

        <!-- Shopping Cart Items -->
        <div class="row">
            <div class="col-sm-9">
                <?php


                foreach ($product->getData('wishlist') as $item):
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
                                    <form method="post">
                                        <input name="item_id" type="hidden" value="<?php echo $item['item_id']?? 0 ?>"/>
                                        <button type="submit" name="delete-submit" class="btn font-baloo px-3 border-right text-danger font-size-14">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input name="item_id" type="hidden" value="<?php echo $item['item_id']?? 0 ?>"/>
                                        <button type="submit" class="btn font-baloo px-3 text-danger font-size-14" name="add-to-cart">Add to Cart</button>
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
        </div>
        <!-- !Shopping Cart Items -->


    </div>
</section>
<!-- !Cart Section -->

