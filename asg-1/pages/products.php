<?php

// 0. Get Values from Pages


// 1. Connect to Database
$conn = new mysqli_connect("localhost", "RickyFelix", "internet", "assignment1"); // server host, username, password, database name

// Check connection
if (!$link) {
  die("Connection failed, could not connect to the server" . $conn->connect_error);
}
echo "Connected successfully";

// 2. Run a query
$query_string = "select * from products";

// 3. Execute a query
$result = mysqli_query($conn, $query_string);

// 4. Number of return rows
$num_rows = mysqli_num_rows($result);
// echo $num_rows; // check and see if the code above runs properly or not

// 5. Display values
if ($num_rows > 0 ) {
    print "<table>";
            // get the index from the array
    while ( $product_name = mysqli_fetch_array($result) ) { // 4. To retrieve the rows
        print "<tr>";
           print "<td>".$product_name['id']."</td>";
           print "<td>".$product_name['name']."</td>";
           print "<td>".$product_name['price']."</td>";
           print "<td>".$product_name['quantity']."</td>";
           print "<td>".$product_name['stock']."</td>";
       // get the columns in each row
       //  foreach ($a_row as $field) 
       //      print "\t<td>$field</td>\n";
        
       print "</tr>";
   }
    print"</table>";
}

mysqli_close($link);
?> 