<?php
    session_start();
?> 

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>Grocery System Store</title>

        <!-- description -->
        <meta name="author" content="Ricky Felix">
        <meta name="description" content="Grocery System Store">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <main>
            <?php
            
                // 0. Get Values from Pages (if necessary)
                // $GET_REQUEST = 
                
                // 1. Connect to Database
                $conn = new mysqli_connect("localhost", "uts", "internet", "assignment1"); // server host, username, password, database name

                // Check connection
                if (!$conn) {
                die("Connection failed, could not connect to the server");
                }

                // 2. Run a query
                $product_id = $_REQUEST['product_id'];
                $_SESSION["currentID"] = $ID;
                $query_string = "select * from  products where product_id = $product_id";

                // 3. Execute a query
                $result = mysqli_query($conn, $query_string);

                // 4. Number of return rows
                $num_rows = mysqli_num_rows($result);
                // echo $num_rows; // check and see if the code above runs properly or not

                // 5. Display values
                if ($num_rows > 0 ) {
                    if ( $a_row = mysqli_fetch_array($result) ) { // 4. To retrieve the rows
                    print"<form action ='checkout.php' name='checkout' method='GET'>";
                    print"<table>";
                    print"<tr>\n";
                        print"<th>Product Id</th>";
                        print"<th>Product Name</th>";
                        print"<th>Unit Price</th>";
                        print"<th>Unit Quantity</th>";
                        print"<th>In Stock</th>";
                    print"</tr>";
                    print"<tr>\n";
                        print"<td>$a_row[product_id]</td>";
                        print"<td>$a_row[product_name]</td>";
                        print"<td>$a_row[unit_price]</td>";
                        print"<td>$a_row[unit_quantity]</td>";
                        print"<td>$a_row[in_stock]</td>";
                        print"<td>button type='submit' class='buy'>Add to Cart</button></td>";
                    print"</tr>";
                    print"</table>";
                    print"</form>";
                }
                    $_SESSION["currentProduct"] =$a_row;
                    mysqli_close($conn);
                }
            ?>
        </main>
        <script src="../js/products.js"></script>
    </body>
</html>