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
            <h1>Add Product to Cart</h1>
            
            <?php
            // 0. Get Values from Pages
            // $GET_REQUEST = 

            // 1. Connect to Database
            $conn = new mysqli_connect("localhost", "", "", "assignment1"); // server host, username, password, database name

            // Check connection
            if (!$conn) {
            die("Connection failed, could not connect to the server" . $conn->connect_error);
            }
            echo "Connected successfully";

            // 2. Run a query
            $product_id = $_REQUEST['product_id'];
            $query_string = "select * from products where product_id = $product_id";

            // 3. Execute a query
            $result = mysqli_query($conn, $query_string);

            // 4. Number of return rows
            $num_rows = mysqli_num_rows($result);
            // echo $num_rows; // check and see if the code above runs properly or not

            // 5. Display values
            if ($num_rows > 0 ) {
                print "<form name='product' action='cart.php' onsubmit='return productsCart();'>";
                print "<table>";
                print"<tr>\n";
                    print"<th>Product Id</th>";
                    print"<th>Product Name</th>";
                    print"<th>Product Quantity</th>";
                    print"<th>Unit Quantity</th>";
                print"</tr>";
                        // get the index from the array
                while ( $a_row = mysqli_fetch_array($result) ) { // 4. To retrieve the rows
                    print "<input type='hidden' name='product_id' value=$product_id >";
                    print "<input type='hidden' name='product_name' value=\"" . $a_row[product_name] . "\">";
                    print "<input type='hidden' name='unit_price' value=\"" . $a_row[unit_price] . "\">";
                    print "<input type='hidden' name='unit_quantity' value=\"" . $a_row[unit_quantity] . "\">";
                        print "<tr>/n";
                    print "<td class='productForm'>".$a_row['product_id']."</td>";
                    print "<td class='productForm'>".$a_row['product_name']."</td>";
                    print "<td class='productForm'>".$a_row['unit_price']."</td>";
                    print "<td class='productForm'>".$a_row['unit_quantity']."</td>";
                    print "<td class='productForm'>".$a_row['in_stock']."</td>";
            }
                print"</table>";
                print"</form>";
            }

            mysqli_close($conn);
            
            ?>
    </main>
        <script src="../js/"></script>
    </body>
</html>