<?php

shuffle($product_shuffle);
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['new-phone-submit']))
    {
        $cart->addToCart($_POST['user_id'], $_POST['item_id']);

    }
}
?>
<!-- nEW pHONES -->
<section id="new-phones">
    <div class="container py-3">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>
        <!-- Owl Carousel Start -->
        <div class="owl-carousel owl-theme">
            <?php
            foreach ($product_shuffle as $item){
                ?>
                <!-- Item Started -->
                <div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=<?php echo $item['item_id']; ?>"><img src="<?php echo $item['item_image']?? " ./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknown";?></h6>
                            <div class="rating text-warning font-size-12">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price py-2">
                                <span><?php echo $item['item_price'] ??"0" ;?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? '1';  ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;  ?>">
                                <?php
                                if(in_array($item['item_id'],$cart->getCartId($product->getData('cart'))??[]))
                                {
                                    echo '<button type="submit" class="btn btn-primary font-size-12" disabled>In the Cart</button>';
                                }
                                else{
                                    echo '<button type="submit" class="btn btn-warning font-size-12" name="new-phone-submit">Add to Cart</button>';
                                }
                                ?>                            </form>
                        </div>
                    </div>
                </div>
                <!-- Item Ended -->

                <?php
            }
            ?>






        </div>
        <!-- Owl Carousel End -->
    </div>
</section>
<!-- nEW pHONES End -->
