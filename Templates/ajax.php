<?php
//Include DBControoler
include ("../database/DBController.php");
//Include Product
include ("../database/Product.php");

//DBController Object
$db= new DBController();
$product= new Product($db);

if(isset($_POST['itemid'])){
    $result=$product->getProduct($_POST['itemid']);
    echo json_encode($result);
}
