# prog-internet
An Online Car Rental System using AJAX and JSON

## Requirements
1. Done individually and marks 35%
2. The website should be dynamic which means everything is loaded from JSON file
3. The vehicles available for renting cars can be divided into 3 categories (and has 10 attributes each): Sedan, Wagon, SUV 
4. Car image samples are available and already named (should be put inside images folder and all types are jpg)

## Specification
1. Design a JSON file "cars.json" with the structure specified in requirements 3 and store at least 10+ car data items in JSON file
70% are setup as true and and 30% are false
2. Use AJAX to load the JSON file "cars.json" and extract the data and save it as arrays in your webpage
3. Display the cars oin a nice tabular format using the above arrays on your webpage for users to select
4. Provide a “button” to add the car to the reservation “shopping cart”. 
Use AJAX to check the availability  of  the  car  after  clicking  the  button  (the field  “availability” is include in cars.json). 
    - If the availability is “True” then add the car to the reservation  shopping  cart and prompt  success; 
    - If  the availability  is  “False”  then  alert  that  “Sorry,  the  car  is  not available now. Please try other cars”.
5. Provide a button/link to view the reservation shopping cart. Display the cars which have been added into the reservation shopping cart. Users can set the "rent days" or delete cars in the shopping cart
    - (HINT: use session to store the data) 
6. Provide the checkout button to check if there are cars in the shopping cart.
    - If no, then alert "No car has been reserved" and jump to the first pag (products)
    - If yes, validate the "rental days" (integer > 0) using JavaScript and navigate to the next page
7. Design the checkout page, which displays a purchase form asking the user to fill in their delivery details
    - name
    - email address (validate email address)
    - city
    - state
    - post-code
    - payment type
    (all fields must be completed to go ahead)
If all details are filled correctly, then direct the user to a page showing delivery details and the cost
