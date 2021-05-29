let cart; // current cart
$(document).ready(function(){

    // get sessionStorage
    cart = JSON.parse(sessionStorage.getItem('hertz@cart'));
    console.log("shopping cart", cart)
    for(let i=0; i < cart.length; i++){
        let cartComponent = 
        `
        <tr class="table-primary">
          <div id="${cart[i].id}">
            <th scope="row"><img style="width:120px;height:120px;" class="rounded mx-auto d-block" src="${cart[i].images}" alt="${cart[i].brand}-${cart[i].model}"</th>
            <th>${cart[i].model_year} ${cart[i].brand} ${cart[i].model}</th>
            <th>$ ${cart[i].price_per_day}</th>
            <th>
              <div class="form-group">
                <input value="1" min="0" type="number" id="car-input-${cart[i].id}" class="car-input">
              </div>
            </th>
            <th>
            <div class="form-group">
                <button type="submit" class="btn btn-danger" onClick="deleteItem(${cart[i].id})">Delete</button>
            </div>
            </th>
          </div>
        </tr>
        `
        $(".showRent").append(cartComponent)
    }
    if(cart.length > 0){ // there is something in cart: show checkout button
        $(".checkout-button").append(`<button type="submit" class="btn btn-primary" onClick="clickCheckout()">Checkout</button>`)
    }
});

function deleteItem(id){
    // filter removed car
    cart = cart.filter(car => car.id != id)
    // re-set storage
    window.sessionStorage.setItem('hertz@cart', JSON.stringify(cart))
    // remove html
    document.getElementById(`${id}`).innerHTML = ""
}

function clickCheckout(){
    if(cart.length <= 0){
        alert("No car has been reserved!")
        window.location.href='../index.html'
    } else {
        let inputClasses = document.getElementsByClassName(`car-input`)
        let value = validate(inputClasses)
        if(value){
            window.location.href=`../pages/checkout-form.html`
            window.sessionStorage.setItem("hertz@total", value)
        }
    }
}

function validate(input){
    let shopping_cart = [];
    let cartTotal = 0;
    for(let i=0; i < input.length; i++) {
        if(input[i].value <= 0 || !input[i].value){
            alert(`Please make sure that rental days are valid!`);
            return false;
        } else {
            let car = cart.find(car => input[i].id.split('-')[2] == car.id );
            cartTotal += input[i].value * car.price_per_day;
        }
    }
    return cartTotal;
}