<?php
ob_start();
//Header Php
include('header.php');
?>

<?php

/*Banner Area Starts*/
include ('Templates/_banner-area.php');
/*Banner Area End*/

/*Top Sale Starts*/
include ('Templates/_top-sale.php');
/*Top Sale End*/

/*Special Price Starts*/
include ('Templates/_special-price.php');
/*Special Price End*/

/*Banner adds Starts*/
include ('Templates/_banner-adds.php');
/*Banner adds End*/

/*New Phones Starts*/
include ('Templates/_new-phones.php');
/*New Phones End*/

/* Blog Section Starts*/
include ('Templates/_blog-section.php');
/* Blog Section End*/

?>




<?php
//Footer Php
include('footer.php');


?>

