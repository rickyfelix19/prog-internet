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
                print"<div class ='checkout' id='validate'>";
                    print "<form method='POST' name='checkout' action='checkout_submission.php'>";
                        print "<h2>Contact Details:</h2>";
                        print "<p>Please enter your user information</p>";
                        print "<label for='fname'>First Name:</label>";
                            print "<input type='text' id='fname' name='fname' required placeholder='John'></input><br>";
                        print "<label for='lname'>Last Name:</label>";
                            print "<input type='text' id='lname' name='lname'></input><br>";
                        print "<label for='address'>Address:</label>";
                            print "<input type='text' id='address' name='address' required placeholder='542 W. 15th Street' ></input><br>";
                        print "<label for='suburb' id='suburb'>Suburb:</label>";
                            print "<input type='text' id='suburb' name='suburb' required placeholder='NSW'></input><br>";
                        print "<label for='state' id='state'>State:</label>";
                            print "<input type='text' id='state' name='state' required placeholder='Sydney'></input><br>";
                        print "<label for='country' id='country'>Country:</label>";
                            print "<input type='text' id='country' name='country' required placeholder='Australia'></input><br>";
                        print "<label for='email' id='validateEmail'>Email:</label>";
                            print "<input type='email' id='email' name='email' required placeholder='me@example.com'></input><br>"; 
                        print "<button type='submit' value='Sent!' target='checkout_submission'></button>";
                        print "<button type='reset' name='clear'></button>";
                    print "</form>";
                ?>
            </div>
        </main>
        <script src="../js/validation.js"></script>
    </body>
</html>