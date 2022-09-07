<?php
include("connect.php");
$product_id= $_POST['product_id'];
$qry= "DELETE FROM product WHERE product_id='$product_id'";
$result= mysql_query($qry);
if(!$result)
    echo '<script>alert("Unable to delete product")</script>';
else
    echo '<script>alert("Product deleted.")</script>';
?>