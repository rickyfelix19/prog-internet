<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>Grocery System Store</title>

        <!-- descriptipn -->
        <meta name="author" content="Ricky Felix">
        <meta name="description" content="Grocery System Store">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/style.css">

    </head>
    <body>
        
        <main>
            <h2>Online Grocery</h2>
                <div class="grid-container">
                    <div class="grid-area: left-hand"> <!-- left hand pane  -->
                        <?php include './pages/left-hand.php';?>
                    </div>
                    <div class="right-hand"> 
                        <div style="grid-area: top-right"><?php include './pages/top-right.php';?></div>
                        <div class="grid-area: bottom-right"><?php include './pages/bottom-right.php';?></div>
                    </div>
                </div>
        </main>
        
        <!-- include all javascript -->
        <script src="./js/"></script> 
    </body>
</html>