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
                <th>PRODUCT NAME</th>
                <th>PRICE</th>
                <th>IN STOCK</th>
                <th>BUY</th>
            </tr>
        <?php
        include("connect.php");
        $qry= "SELECT * FROM product;";
        $result= mysql_query($qry);
        if($result){
            if(mysql_num_rows($result)>0){
                while($row= mysql_fetch_assoc($result)){
                    echo "<tr><td>" . $row["product_name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["quantity"] . "</td><td><a href='buyProduct.php?product_id=$row[product_id]&quantity=$row[quantity]'>Buy</td></tr>";
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