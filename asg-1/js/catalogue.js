/*
    function testing () {
        // document.getElementById("#hover").onclick(function() {
        // });
        document.getElementById("hover").addEventListener("mouseover", function() {
            document.getElementById("myimg").style.display = "block"
        });
        document.getElementById("hover").addEventListener("mouseout", function() {
            document.getElementById("myimg").style.display = "block"
        });
        // document.getElementById("myimg").style.display = "block";
    }
*/

/*
    lists:
    Frozen Food
    Fresh Food
    Beverages
    Home Health
    Pet Food
*/

function frozenOut() {
    document.getElementById("frozen").addEventListener("mouseout", function() {
        document.getElementById("frozen-map").style.display = "none"
    });
}
function frozenOver() {
    document.getElementById("frozen").addEventListener("mouseover", function() {
        document.getElementById("frozen-map").style.display = "block"
    });
}

function freshOut() {
    document.getElementById("fresh").addEventListener("mouseout", function() {
        document.getElementById("fresh-map").style.display = "none"
    });
}

function freshOver() {
    document.getElementById("fresh").addEventListener("mouseover", function() {
        document.getElementById("fresh-map").style.display = "block"
    });
}

function beveragesOut() {
    document.getElementById("beverages").addEventListener("mouseout", function() {
        document.getElementById("beverages-map").style.display = "none"
    });
}

function beveragesOver() { 
    document.getElementById("beverages").addEventListener("mouseover", function() {
        document.getElementById("beverages-map").style.display = "block"
    });
}
function healthOut() {
    document.getElementById("health").addEventListener("mouseout", function() {
        document.getElementById("health-map").style.display = "none"
    });
}

function healthOver() {
    document.getElementById("health").addEventListener("mouseover", function() {
        document.getElementById("health-map").style.display = "block"
    });
}

function petOut() {
    document.getElementById("pet").addEventListener("mouseout", function() {
        document.getElementById("pet-map").style.display = "none"
    });

}

function petOver() {
    document.getElementById("pet").addEventListener("mouseover", function() {
        document.getElementById("pet-map").style.display = "block"
    });
}
