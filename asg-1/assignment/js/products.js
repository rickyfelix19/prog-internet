function quantityNotification() {
    var number = document.getElementById("quantity").value;
    if (number > 20 ) {
        alert("Quantity should be less than 20");
            return false;
    }
    else { return true;}
}