function products() {
    var testing = document.getElementById("quantity").value;
    if (quantity > 20 ) {
        alert("Quantity should be less than 20");
            return false;
    }
    else { return true;}
}