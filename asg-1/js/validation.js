function validate()
{
    //get the values of username textbox
    if (document.getElementById("fname").value == "")
    {
        alert("Please enter your first name");
        return false;
    }
    if (document.getElementById("lname").value == "")
    {
        alert("Please enter your last name");
        return false;
    }
    if (document.getElementById("address").value == "")
    {
        alert("Please enter your address");
        return false;
    }
    if (document.getElementById("suburb").value == "")
    {
        alert("Please enter your suburb");
        return false;
    }
    if (document.getElementById("state").value == "")
    {
        alert("Please enter your state");
        return false;
    }
    if (document.getElementById("country").value == "")
    {
        alert("Please enter your country");
        return false;
    }
    if (document.getElementById("email").value == "")
    {
        alert("Please enter your email");
        return false;
    }
    if (document.getElementById("email").value.match(emailregex))
    {
        return true;
    }
    alert("Please enter proper email address");
    return false;
}

function validateEmail(email) {
    const emailregex = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
    return emailregex.test(String(email).toLowerCase());
}