<?php
include("connect.php");
$product_id= $_GET['product_id'];
$quantity= $_GET['quantity'];
$qty= $quantity-1;
$qry= "UPDATE product SET quantity='$qty' where product_id= '$product_id'";
$result= mysql_query($qry);
if(!$result)
    echo '<script>alert("Could not buy")</script>';
else
    echo '<script>alert("Thanks for buying our product.")</script>';
?>