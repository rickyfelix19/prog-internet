<!-- ?php

    // if user press reset button, reset the session
    if(isset($_GET['reset'])) {
            session_start();
        unset($_SESSION['cart']);
            session_destroy();
    }

    session_start();

    // Check Cart Session exist or not
    if(isset($_SESSION['cart']) && count($_SESSION['cart'] != 0)) {
        $list = $_SESSION['cart'];

        foreach ($list as $item) {
            $id = $item['product_id'];
        }
    }

?>  -->

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
            $conn = mysqli_connect("localhost", "uts", "internet", "assignment1"); 
            // aax5grlzdab4wq.cldcl6stxuy9.us-east-1.rds.amazonaws.com
            // server host, username, password, database name
            
            if (!$conn) {
                die("Could  not connect to the server");
            }
            
            // 2. Run a query
            // $product_id = $_REQUEST['product_id'];
            $query_string = "select * from products where product_id = $id;";

            // 3. Execute a query
            $result = mysqli_query($conn, $query_string);

            // 4. Number of return rows
            $num_rows = mysqli_num_rows($result);
            // echo $num_rows; // check and see if the code above runs properly or not

            // 5. Display values
            if ($num_rows > 0 ) {
                if ( $a_row = mysqli_fetch_array($result) ) { // 4. To retrieve the rows
                // this form comes from cart to checkout
                echo "<form name='cart' action='checkout.php' method='POST' target='top-right'>";
                echo "<table>";
                    echo "<tr>";
                        // Table Header
                        echo "<th>Product Name</th>";
                        echo "<th>Unit Price</th>";
                        echo "<th>Unit Quantity</th>"  ;
                        echo "<th>Required Quantity</th>";
                        echo "<th>Total Cost</th>";
                    echo "</tr>";
                    echo "<tr>";
                        // Values
                        echo "<td>"."$a_row"."['product_name']"."</td>";
                        echo "<td>"."$a_row"."['unit_price']"."</td>";
                        echo "<td>"."$a_row"."['unit_quantity']"."</td>";
                        // echo "<td>required_quantity</td>";
                        echo "<td>"."$a_row"."['total']"."</td>";
                    echo "</tr>";
                    echo "<tr>";
                        // Total Products
                        echo "<th colspan='4'>Number of Products</th>";
                        echo "<th colspan='4'>testing</th>";
                    echo "</tr>";
                    echo "<tr>";
                        //  Total Products
                        echo "<th colspan='4'>Shopping Cart Total</th>";
                        echo "<th colspan='4'>testing</th>";
                    echo "</tr>";
                echo "</table>";
                    echo "<td class='cartForm'><button type='submit' value='Purchase' id='checkout' target='checkout.php'>Checkout</button>";
                    echo "<td class='cartForm'><button type='reset' value='reset' name='reset' id='reset'>Reset</td>";
                echo "</form>";
                }
            }
            
        mysqli_close($conn);

        ?>
            <!-- ?php
                // 1. Connect to DB
                $conn = mysqli_connect("localhost", "uts", "internet", "assignment1"); 
                // aax5grlzdab4wq.cldcl6stxuy9.us-east-1.rds.amazonaws.com
                // server host, username, password, database name
                
                if (!$conn) {
                    die("Could  not connect to the server");
                }
                
                // 2. Run a query
                // $product_id = $_REQUEST['product_id'];
                $query_string = "select * from products where product_id = $id";

                // 3. Execute a query
                $result = mysqli_query($conn, $query_string);

                // 4. Number of return rows
                $num_rows = mysqli_num_rows($result);
                // echo $num_rows; // check and see if the code above runs properly or not

                // 5. Display values
                if ($num_rows > 0 ) {
                    if ( $a_row = mysqli_fetch_array($result) ) { // 4. To retrieve the rows
                    // this form comes from cart to checkout
                    echo "<form name='checkout' action='checkout.php' method='POST' target='top-right'>";
                        echo "<table>";
                            echo"<tr>\n";
                                echo"<th>Product Name</th>";
                                echo"<th>Unit Price</th>";
                                echo"<th>Unit Quantity</th>";  
                                echo"<th>Required Quantity</th>";
                                echo"<th>Total Cost</th>";
                            echo"</tr>";
                            echo"<tr>\n";
                                echo"<td>".$a_row['product_name']."</td>";
                                echo"<td>".$a_row['unit_price']."</td>";
                                echo"<td>".$a_row['unit_quantity']."</td>";
                                // echo"<td>$a_row[required-quantity]</td>";
                                // echo"<td>$a_row[total-cost]</td>";
                            echo"</tr>";
                            echo"<tr>\n";
                            echo"<tr>\n";
                                echo"<th>Number of Products</th>";
                            echo"</tr>";
                            echo"<tr>";
                                echo"<th>Shopping Cart Total</th>";
                            echo"</tr>";
                            echo"<tr>\n";
                                echo "<td class='cartForm'><button type='submit' value='Purchase' id='checkout' target='checkout.php'></button>";
                                echo "<td class='cartForm'><button type='reset' value='reset' name='reset' id='reset'>Reset</td>";
                            echo"</tr>";
                        echo "</table>";
                    echo"</form>";
                }
            
            ?> -->
        </main>
        
        <script src="../js/cart.js"></script>
    </body>
</html>

<!-- 
    if product_id exists in cart
     temp = new_quantity
     quantity += temp
     return quantity
      // dont show new quantity
 -->

 <!-- 
     check cart if its empty but not null
  -->