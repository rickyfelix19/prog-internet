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
            <form action ='cart.php' name='cart' method='GET' target='bottom-right' onSubmit='quantityNotification();'>  
                <table>
                <tr>
                    <!-- Label Names  -->
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Unit Price</th>
                    <th>Unit Quantity</th>
                    <th>In Stock</th>
                </tr>
                <tr>
                    <!-- Values -->
                    <td>testing</td>
                    <td>testing</td>
                    <td>testing</td>
                    <td>testing</td>
                    <td>testing</td>
                    <!-- Button -->
                    <td><input type='number' id='quantityNotification' min='1' value='1'></td>
                </tr>
                <tr>
                    <td><input type='submit' value='add' class='buy' name='add to cart' target='cart'></button></td>
                </tr>
                </table>
            </form>

            <!-- ?php
            
                // 0. Check if product_id has been called from catalogue.php
                if (isset($_POST['product_id']) && isset($_GET['product_id'])){
                    $id = $_GET['product_id'];
                }

                // check if a session has already been created, if not make new session
                if (!isset($_SESSION['cart'])){
                    $_SESSION['cart'] = [];
                }
                // $_SESSION["currentID"] = $id;

                $quantity = $_POST['unit_quantity'];
                
                $item = [
                    "id" -> $product_id,
                    "name" -> $product_name,
                    "price" -> $unit_price,
                    "quantity" -> $unit_quantity,
                    "stock" -> $in_stock
                ];

                array_push($_SESSION['cart'], $item);

                // 1. Connect to Database
                $conn = mysqli_connect("localhost", "uts", "internet", "assignment1"); // server host, username, password, database name
                //  aax5grlzdab4wq.cldcl6stxuy9.us-east-1.rds.amazonaws.com

                // Check connection
                if (!$conn) {
                die("Connection failed, could not connect to the server");
                }

                // 2. Run a query
                $query_string = "select * from  products where product_id = $product_id";

                // 3. Execute a query
                $result = mysqli_query($conn, $query_string);

                // 4. Number of return rows
                $num_rows = mysqli_num_rows($result);
                // echo $num_rows; // check and see if the code above runs properly or not

                // 5. Display values
                if ($num_rows > 0 ) {
                    if ( $a_row = mysqli_fetch_array($result) ) { // 4. To retrieve the rows
                    // this form comes from catalogue to product
                    echo"<form action ='cart.php' name='cart' method='GET' target='bottom-right' onSubmit='quantityNotification();' >";  
                    echo"<table id>";
                    echo"<tr>\n";
                        // Label Names 
                        echo"<th>Product Id</th>";
                        echo"<th>Product Name</th>";
                        echo"<th>Unit Price</th>";
                        echo"<th>Unit Quantity</th>";
                        echo"<th>In Stock</th>";
                    echo"</tr>";
                    echo"<tr>\n";
                        // Values
                        echo"<td>".$a_row['product_id']."</td>";
                        echo"<td>".$a_row['product_name']."</td>";
                        echo"<td>".$a_row['unit_price']."</td>";
                        echo"<td>".$a_row['unit_quantity']."</td>";
                        echo"<td>".$a_row['in_stock']."</td>";
                        //Button
                        echo"<td><input type='number' id='quantityNotification' min='1' value='1'></td>";
                        echo"<td>input type='submit' value='add' class='buy' name='add to cart' target='cart'></button></td>";
                    echo"</tr>";
                    echo"</table>";
                    echo"</form>";
                }
                    mysqli_close($conn);
                }
                
                // if( $_REQUEST["checkout"] == 1 && (count($_SESSION["items"]) > 0) ) {
                //     require('checkout.php');
                // }

            ?> -->
        </main>
        <script src="../js/products.js"></script>
    </body>
</html>