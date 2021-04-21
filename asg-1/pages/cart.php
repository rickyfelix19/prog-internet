<?php
session_start();

// 0. Get Values from Other Pages


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
                // 1. Connect to DB
                $conn = new mysqli_connect("localhost", "uts", "internet", "assignment1"); // server host, username, password, database name
                if (!$conn) {
                    die("Could  not connect to the server");
                }

                
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
                    print "<form name='product' action='cart.php' method="POST">";
                        print "<table>";
                            print"<tr>\n";
                                print"<th>Product Name</th>";
                                print"<th>Unit Price</th>";
                                print"<th>Unit Quantity</th>";
                                print"<th>Required Quantity</th>";
                                print"<th>Total Cost</th>";
                            print"</tr>";
                            print"<tr>\n";
                                // automatically add here
                            print"</tr>";
                            print"<tr>\n";
                            print"<tr>\n";
                                print"<th>Number of Products</th>";
                            print"</tr>";
                            print"<tr>";
                                print"<th>Shopping Cart Total</th>";
                            print"</tr>";
                            print"<tr>\n";
                                print "<td class='cartForm'><button type='submit' value='Purchase' class='buy'>Add to Cart</button>";
                                print "<td class='cartForm'><button type='reset'>Clear Form</td>";
                            print"</tr>";
                        print "</table>";
                    print"</form>";
                }
            ?>
        </main>
        
        <script src="../js/cart.js"></script>
    </body>
</html>