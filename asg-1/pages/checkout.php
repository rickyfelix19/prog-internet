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
            <div class ="checkout" id="validate">
                <form method="POST" name="checkout" action="checkout_submission.php">
                    <h2>Contact Details:</h2>
                    <p>Please enter your user information</p>
                    <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" required placeholder="John"></input><br>
                    <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname"></input><br>
                    <label for="address">Address:</label>
                        <input type="text" id="address" name="address" required placeholder="542 W. 15th Street" ></input><br>
                    <label for="suburb" id="suburb">Suburb:</label>
                        <input type="text" id="suburb" name="suburb" required placeholder="NSW"></input><br>
                    <label for="state" id="state">State:</label>
                        <input type="text" id="state" name="state" required placeholder="Sydney"></input><br>
                    <label for="country" id="country">Country:</label>
                        <input type="text" id="country" name="country" required placeholder="Australia"></input><br>
                    <label for="email" id="validateEmail">Email:</label>
                        <input type="email" id="email" name="email" required placeholder="me@example.com></input><br> 
                    <button type="submit" value="Purchase!">Purchase</button>
                    <button type="reset">Clear Form</button>
                </form>
            </div>
        </main>
        <script src="../js/validation.js"></script>
    </body>
</html>