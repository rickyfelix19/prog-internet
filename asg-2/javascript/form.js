let cart;
$(document).ready(function(){
    let cartTotal = window.sessionStorage.getItem("hertz@total")
    $(".cartTotal").append(`<h5>You are required to pay: $ ${cartTotal}</h5>`)
})

function backButton(){
    window.location.href="../index.html"
}

function form(){
      let emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
      let email = document.getElementById("email").value
      if(emailRegex.test(email)){
        window.location.href="./success.html"
        window.sessionStorage.clear();
      } else{
        alert("Invalid email!")
      }
}