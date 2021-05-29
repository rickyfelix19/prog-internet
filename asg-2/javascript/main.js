let cars_array = [] 
let shopping_cart = window.sessionStorage.getItem("hertz@cart") ? JSON.parse(window.sessionStorage.getItem("hertz@cart")) : [] // store shopping cart
$(document).ready(function(){
    $.getJSON("./data/cars.json", function(result){
        cars_array = result;
      $.each(result, function(i, field){
          let carComponent = 
          `
           <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
            <div class="card-body">
              <div class="card-text card-img-container"><img style= "width:300px; height=300px;" src="${field.images}" alt=${field.brand}-${field.model}> </div>
                <br>
                <p class="card-text"><b>Car Name: </b> ${field.model_year} ${field.brand} ${field.model}</p>
                <p class="card-text"><b>Mileage: </b>${field.mileage} kms</p>
                <p class="card-text"><b>Fuel Type: </b>${field.fuel_type}</p>
                <p class="card-text"><b>Seats: </b>${field.seats}</p>
                <p class="card-text"><b>Price/day: </b>$ ${field.price_per_day}</p>
                <p class="card-text" hidden><b>Availability: </b>${field.availability}</p>
                <p class="card-text"><b>Description: </b>${field.description}</p>
            <button type="button" class="btn btn-primary d-grid gap-2 col-6 mx-auto" onClick="addCart(${field.id})">Add to cart</button>
           </div>
          `
          $(".wall").append(carComponent);
        });
    });
});

function addCart(id){
    let car = cars_array.find(car => car.id == id)
    let cart = shopping_cart.find(car => car.id == id)
    let message = `Sorry ${car.brand} ${car.model} is not available now. Please rent other cars.`;
    if(cart){
        message = `Sorry you have added ${cart.brand} ${cart.model} in your cart before.`
    } else if(car.availability == "TRUE"){ 
        shopping_cart.push(car)
        console.log("shopping cart", shopping_cart)
        message = `${car.brand} ${car.model} added to cart successfully!`
    }
    alert(message)
    return true;
}

function checkCart(){
    window.sessionStorage.setItem("hertz@cart", JSON.stringify(shopping_cart));
    window.location.href="./pages/booking.html"
}   