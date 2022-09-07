<?php
$db_url="localhost";
$db_name="stock";
$db_username="root";
$db_password="";
mysql_connect($db_url, $db_username, $db_password);
mysql_select_db("$db_name");
?>