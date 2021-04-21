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
        <link rel="stylesheet" href="./css/mystyle.css">

    </head>
    <body>
        
        <main>
            <div class="container">
                <div class="container__half"> <!-- left pane ; catalogue -->
                    <div><h1>Grocery System Store</h1></div> 
                    <!-- catalogue.php -->
                    <?php include ('./pages./container.php')?>
                </div>
                <div class="container__half"> <!-- right pane -->
                    <div class="top_right">
                        <div><h1>Add Product to Cart</h1></div>
                         <!-- products.php  -->
                         <?php include ('./pages/products.php')?>
                    </div> <!-- top right pane ; products-->
                    <div class="bottom_right">
                        <div><h1>Shopping Cart</h1></div>
                         <!-- cart.php -->
                         <?php include ('./pages/cart.php')?>
                    </div> <!-- bottom right pane ; cart -->
                </div>
            </div>
        </main>e
        
        <script src="./js"></script>
    </body>
</html>