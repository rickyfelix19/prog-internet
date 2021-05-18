 <!-- Reading the JSON file  -->
    $strJSONContents = file_get_contents("../data/cars.JSON");  

    <!-- Initialize the JSON string -->
    strJSONContents = '{"Peter":35,"Ben":37,"Joe":43}';

<!-- JSON decode -->
    $array = json_decode($strJSONContents, true);  
    var_dump($array);

<!-- Access the Array -->
    <?php
        $strJSONContents = file_get_contents("../data/cars.JSON");
        $array = json_decode($strJSONContents, true);  
        echo $array = ['Peter'] . "\n";
    ?>

<!-- Return the JSON output -->
    <?php
        $array = array(
            "Peter" => 35,
            "Ben" => 37,
            "Joe" => 43
        );
        header('Content-Type: application/json');
        echo json_encode($array, JSON_PRETTY_PRINT); // JSON_PRETTY_PRINT (int) Use whitespace in returned data to format it. 
    ?>
    
<!-- Return the JSON output - multiple array -->
    $array = array(
            "status" => "OK",
            "products" => array(
                array("product_name" => "BMW", "availability" => 'Y');
                array("product_name" => "Toyota", "availability" => 'N');
            )
        );
    
    header('Content-Type: application/json');
    echo json_encode($array, JSON_PRETTY_RIGHT);
    
<!-- Return the JSON output -->
    class Cars {
        var $product_name;
        car $availability;

    function __construct($name, $avai) {
        $this => $name;
        $this => $avai; 
        }
    }

    $bmw = new Cars("BMW", 1);
    $toyota = new Toyota("Toyota", 0);
    
    $array = array(
            "status" => "OK",
            "products" => array( $bmw, $toyota");
        );

    header('Content-Type: application/json');
    echo json_encode($array, JSON_PRETTY_RIGHT);

<!-- Load JSON-encoded data from the server using HTTP request -->
    jQuery.getJSON(url, [,data], [,success])
    Description: Load JSON-encoded data from the server using a GET HTTP request
    https:api.jquery.com/jquery.getjson/

<!-- PHP based Open Source Software Suites -->
    Joomla - Content Management Style 
    Droopal - Content Management Style
    OSCommerce - E-Commerce System