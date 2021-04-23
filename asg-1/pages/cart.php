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
            <h2>Shopping Cart</h2>
            <?php
                // 1. Connect to DB
                $conn = mysqli_connect("127.0.0.1", "uts", "internet", "assignment1"); 
                // aax5grlzdab4wq.cldcl6stxuy9.us-east-1.rds.amazonaws.com
                // server host, username, password, database name
                
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
                
                // 5. Make an Array
                

                // 6. Display values
                if ($num_rows > 0 ) {
                    // this form comes from cart to checkout
                    print "<form name='checkout' action='checkout.php' method='POST' target='top-right'>";
                        print "<table>";
                            print"<tr>\n";
                                print"<th>Product Name</th>";
                                print"<th>Unit Price</th>";
                                print"<th>Unit Quantity</th>";  
                                print"<th>Required Quantity</th>";
                                print"<th>Total Cost</th>";
                            print"</tr>";
                            print"<tr>\n";
                                print"<td>".$a_row['product_name']."</td>";
                                print"<td>".$a_row['unit_price']."</td>";
                                print"<td>".$a_row['unit_quantity']."</td>";
                                // print"<td>$a_row[required-quantity]</td>";
                                // print"<td>$a_row[total-cost]</td>";
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