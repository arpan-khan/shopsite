<?php
include("connect.php");
$username= $_POST['username'];
$password= $_POST['password'];
$qry= "select * from user where username='$username' and password='$password'";
$result= mysql_query($qry);
if($result){
    if(mysql_num_rows($result)==1){
        header("location: shopList.php");
        exit();
    }
    else{
        echo "fail";
        exit();
    }
}
else
    die("Query failed.")
?>