<?php

//Include DBControoler
include ("database/DBController.php");
//Include Product
include ("database/Product.php");
//Include Cart
include ("database/Cart.php");

//DBController Object
$db= new DBController();
$product= new Product($db);
$product_shuffle=$product->getData();
$cart =new Cart($db);



