<?php
ob_start();
//Header Php
include('header.php');

?>

<?php

$var1=count($product->getData('cart'));

if($var1>0)
{
    /* Cart Section Section*/
    include('Templates/_cart-section.php');
    /* !Cart Section Section*/

}
else
{
    /* Cart Section Section*/
    include('Templates/notFound/_cart_notFound.php');
    /* !Cart Section Section*/
}


$var2=count($product->getData('wishlist'));

if($var2>0)
{
    /* Cart Section Section*/
    include('Templates/_wishlist.php');
    /* !Cart Section Section*/

}
else
{
    /* Cart Section Section*/
    include('Templates/notFound/_wishlist_notFound.php');
    /* !Cart Section Section*/
}

/*New Phones Starts*/
include ('Templates/_new-phones.php');
/*New Phones End*/

?>

<?php
//Footer Php
include('footer.php');
?>
