<html>
    <head>
        <style type="text/css">
            table {
                border-collapse: collapse;
                width: 100%;
                color: #eb4034;
                font-family: monospace;
                font-size: 25px;
                text-align: center;
            }
            th {
                background-color: #eb4034;
                color: white;}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>PRODUCT ID</th>
                <th>PRODUCT NAME</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
            </tr>
        <?php
        include("connect.php");
        $qry= "SELECT * FROM product;";
        $result= mysql_query($qry);
        if($result){
            if(mysql_num_rows($result)>0){
                while($row= mysql_fetch_assoc($result)){
                    echo "<tr><td>" . $row["product_id"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["quantity"] . "</td></tr>";
                }
            }
        }
        else{
            echo "No results";
        }
        ?>
        </table>
    </body>
</html>