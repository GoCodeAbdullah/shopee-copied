<?php
$item_id=$_GET['item_id']??1;
foreach ($product->getData() as $item):
    if($item_id==$item['item_id']):
?>

<!-- Product section -->
<section id="product">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']?? " ./assets/products/1.png"; ?>" alt="" class="img-fluid">
                <div class="form-row pt-4 form-size-16 font-baloo">
                    <div class="col ">
                        <button class="btn btn-danger form-control">Proceed to Purchase</button>
                    </div>
                    <div class="col ">
                        <button class="btn btn-warning form-control">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 pt-5">
                <h4 class="font-size-20 font-rubik"><?php echo $item['item_name'] ?? "Unknown";?></h4>
                <small>by <?php echo $item['item_brand'] ?? "Unknown";?></small>

                <div class="d-flex mb-0">
                    <div class="rating text-warning font-size-12">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>

                    <a href="#" class="font-raleway font-size-12 px-3 ">20,534 ratings | 1000+ answered questions</a>

                </div>
                <hr class="m-0">

                <!-- Table Area -->
                <table class="my-3">
                    <tr class="font-size-14 font-raleway">
                        <td>M.R.P</td>
                        <td><strike>$<?php echo ($item['item_price']+10) ??"0" ;?></strike></td>
                    </tr>
                    <tr class="font-size-14 font-raleway">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ??"0" ;?></span><small>&nbsp; &nbsp;Inclusive all Taxes</small></td>
                    </tr>
                    <tr class="font-size-14 font-raleway">
                        <td>Save Price:</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ??"0" ;?></span></td>
                    </tr>

                </table>
                <!-- Table Area! -->

                <!-- #policy -->
                <div class="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 color-second my-2">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-size-14 font-raleway">10 Days <br>Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 color-second my-2">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-size-14 font-raleway">10 Days <br>Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 color-second my-2">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-size-14 font-raleway">10 Days <br>Replacement</a>
                        </div>
                    </div>
                </div>
                <!-- !policy -->

                <hr>
                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Mar 29  - Apr 1</small>
                    <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>
                <!-- !order-details -->

                <!-- Color and Size -->
                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="bg-light border px-2 qty_input w-50" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>
                <!-- !Color and Size -->

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->

            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
            </div>


        </div>
    </div>
</section>
<!-- !Product section -->
<?php
endif;
endforeach;
?>
