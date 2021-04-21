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
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        
        <main>
            <div class ="checkout">
                <form method="POST" name="checkout" action="checkout_submission.php">
                    <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" required> <br>
                    <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" > <br>
                    <label for="address">Address:</label>
                        <input type="text" id="address" name="address" required> <br>
                    <label for="suburb" id="suburb">Suburb:</label>
                        <input type="text" id="suburb" name="suburb" required> <br>
                    <label for="state" id="state">State:</label>
                        <input type="text" id="state" name="state" required> <br>
                    <label for="country" id="country">Country:</label>
                        <input type="text" id="country" name="country" required> <br>
                    <label for="email" id="email">Email:</label>
                        <input type="email" id="email" name="email" required placeholder="me@example.com"> <br> 
                    <button type="submit" value="Purchase!" onclick="">Purchase</button>
                    <button type="reset">Clear Form</button>
                </form>
            </div>
        </main>
        <!-- <script src="../js/validation.js"></script> -->
    </body>
</html>