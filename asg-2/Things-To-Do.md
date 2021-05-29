# Workflow

Saving data using Cookies/ Sessions/ AJAX
- index.html (header and footer, empty main page)
    - products.html (parse JSON files)
- booking.php (cart)
    - cancel.php (cancel reservation)
- checkout-form.php (user details)
    - success.php (you have successfully checkout a car)

## Things To Figure Out:
1. How to store User's Information on Success.php
2. How to repeat forms at booking.php
    - Javascript
3. Making everything Dynamic: 
    - Cards for products.html
    - Tables for booking.php
    - Pass in JSON using AJAX and Store information using JS (or jQuery) or PHP

### Storing User Data Information:
- PHP Cookies???
- PHP Sessions???
- AJAX file for GET- REQUEST server connection 

### boilerplate.html
- Make sure that nav-bar and footer have the same styles and colors (done)

### index.html
- Make Static Header and Footer (done)
- Shows products.html into body of index.html
- index.html complete

### products.html
- Make card to store / show JSON file
- Show all cards into products.html
- Make Book Button
- Book button will send information to booking.php
- Card complete

### booking.php
- Static Table Information (done)
- Try to Parse in JSON file
- Parse in JSON file base on User's Selection using Cookies and Sessions

### cancel.php
- Remove Cart Selection

### checkout-form.php
- Static User Information (done)
- Save it inside session and cookies
- Confirm Button (done)
- Back Button (done)
- Both button activates its own functionality [0/2]

### success.php
- You have successfully rental our car(s)
