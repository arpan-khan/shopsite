<?php
include("connect.php");
$key= $_POST['key'];
if($key=='123'){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $qry= "insert into admin(username,password) values('$username', '$password')";
    $result= mysql_query($qry);
    if(!$result)
        echo '<script>alert("Unable to enter records.")</script>';
    else
        echo '<script>alert("Record entered.")</script>';
}
else
    echo "Try again!!";
?>