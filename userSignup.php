<?php
include("connect.php");
$username= $_POST['username'];
$password= $_POST['password'];
$qry= "insert into user(username,password) values('$username', '$password')";
$result= mysql_query($qry);
if(!$result)
    echo '<script>alert("Unable to enter record.")</script>';
else
    echo '<script>alert("Record inserted.")</script>';
?>