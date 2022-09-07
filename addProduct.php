<?php
include("connect.php");
$product_id= $_POST['product_id'];
$product_name= $_POST['product_name'];
$price= $_POST['price'];
$quantity= $_POST['quantity'];
$qry= "insert into product(product_id, product_name, price, quantity) values('$product_id', '$product_name', '$price', '$quantity')";
$result= mysql_query($qry);
if(!$result){
    echo '<script>alert("Unable to add product.")</script>';
}
else{
    echo '<script>alert("Product added.")</script>';
}
?>