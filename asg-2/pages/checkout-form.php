<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Hertz-UTS">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- local css -->
    <link rel="stylesheet" href="../css/styles.css">
      <!-- CSS Bootstrap v5.0  -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <!-- Bootswatch, Pulse  -->
      <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.css" integrity="sha384-uvREVKhmY1/Y+Jl+/xTE1JTNVycUxQNgGN8Wbjp7z+eOVibvJVJiy+6Fn8szL8va" crossorigin="anonymous">
      <!-- https://getbootstrap.com/docs/5.0/examples/cheatsheet/ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script> <!-- jQuery library-->
    <title>Hertz-UTS</title>
  </head>
  <body>
    <header>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Hertz-UTS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./booking.php">Cart</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <main> <!-- shows user details forms here-->
        <form action ='./success.php' method ="POST">
            <fieldset>
                <legend>User Details Form</legend> 
                <div class="form-group"> <!-- First Name -->
                    <label for="firstname" class="form-label mt-4">First Name</label>
                    <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter your first name">
                </div>
                <div class="form-group"> <!-- Last Name -->
                    <label for="lastname" class="form-label mt-4">Last Name</label>
                    <input type="text" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter your last name">
                </div>
                <div class="form-group"> <!-- Email Address -->
                    <label for="email" class="form-label mt-4">Email Address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group"> <!-- Address Line 1 -->
                    <label for="address1" class="form-label mt-4">Address Line 1</label>
                    <input type="text" class="form-control" id="address1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group"> <!-- Address Line 2 -->
                    <label for="address2" class="form-label mt-4">Address Line 2</label>
                    <input type="text" class="form-control" id="address2" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group"> <!-- State -->
                    <label for="state" class="form-label mt-4">State</label>
                    <input type="text" class="form-control" id="state" aria-describedby="emailHelp" placeholder="Enter your State">
                </div>
                <div class="form-group"> <!-- City -->
                    <label for="city" class="form-label mt-4">City</label>
                    <input type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="Enter your City">
                </div>
                <div class="form-group"> <!-- Postcode -->
                    <label for="postcode" class="form-label mt-4">Postcode</label>
                    <input type="number" class="form-control" id="postcode" aria-describedby="emailHelp" placeholder="Enter your Postcode">
                </div>
                <div class="form-group"> <!-- Payment Type -->
                    <label for="payment" class="form-label mt-4">Payment Type</label>
                    <select class="form-select" id="exampleSelect1">
                        <option>VISA</option>
                        <option>MASTERCARD</option>
                        <option>PAYPAL</option>
                        <option>AMERICAN EXPRESS</option>
                        <option>APPLE PAY</option>
                        <option>GOOGLE PAY</option>
                    </select>
                    </div>
                <!-- Continue Selection - go back to booking.php -->
                <button type="button" class="btn btn-primary">Add More</button>
                <!-- Booking  - continue to success.php -->
                <button type="button" class="btn btn-primary">Finish</button>
            </fieldset>
        </form>
    </main>

  <footer class="footer mt-auto bg-primary">
    <div class="container-fluid">
      <p class="text-center fw-bold">Hertz-UTS, 2021</p>
    </div>
  </footer>

    <!-- Bootstrap Bundle with Popper --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>