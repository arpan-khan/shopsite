<?php
include("connect.php");
$product_id= $_POST['prouct_id'];
$product_name= $_POST['product_name'];
$price= $_POST['price'];
$quantity= $_POST['quantity'];
if(isset($_POST['submit'])){
    $qry= "UPDATE product SET product_name='$product_name', price= '$price', quantity='$quantity' where product_id= '$product_id'";
    $result= mysql_query($qry);
    if(!$result)
        echo '<script>alert("Unable to update record.")</script>';
    else
        echo '<script>alert("Record updated.")</script>';
}
?>