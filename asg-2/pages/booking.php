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
    
    <main>
      <!-- shows the list of your reservations here-->
      <form method="GET">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Thumbnail</th>
              <th scope="col">Vehicle</th>
              <th scope="col">Price per Day</th>
              <th scope="col">Rental Days</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-primary">
                <th scope="row">First Loop</th>
                <th>Image of cars</th>
                <th>Vehicle Name</th>
                <th>Price per day</th>
                <th>
                  <div class="form-group">
                    <input type="number" class="form-control" id="rentaldays">
                  </div>
                </th>
                <button type="button" class="btn btn-primary btn-sm">Delete</button>
            </tr>

            <tr class="table-warning">
                <th scope="row">Second Loop</th>
                <th>Image of cars</th>
                <th>Vehicle Name</th>
                <th>Price per day</th>
                <th>
                  <div class="form-group">
                    <input type="number" class="form-control" id="rentaldays">
                  </div>
                </th>
                <button type="button" class="btn btn-primary btn-sm">Delete</button>
            </tr>

            <tr class="table-success">
                <th scope="row">Third Loop</th>
                <th>Image of cars</th>
                <th>Vehicle Name</th>
                <th>Price per day</th>
                <th>
                  <div class="form-group">
                    <input type="number" class="form-control" id="rentaldays">
                  </div>
                </th>
                <button type="button" class="btn btn-primary btn-sm">Delete</button>
            </tr>
            <!-- repeat the same format, idk how-->
          </tbody>
            <button type="button" class="btn btn-primary">Checkout</button> <!-- checkout button -->
        </table>
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