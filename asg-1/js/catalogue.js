/*
    function testing () {
        // document.getElementById("#hover").onclick(function() {
        // });
        document.getElementById("hover").addEventListener("mouseover", function() {
            document.getElementById("myimg").style.visibility = "hidden"
        });
        document.getElementById("hover").addEventListener("mouseout", function() {
            document.getElementById("myimg").style.visibility = "visible"
        });
        // document.getElementById("myimg").style.visibility = "hidden";
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

function frozenOverOut() {
    document.getElementById("hover").addEventListener("mouseover", function() {
        document.getElementById("#frozen-map").style.visibility = "hidden"
    });
    document.getElementById("hover").addEventListener("mouseout", function() {
        document.getElementById("#frozen-map").style.visibility = "visible"
    });
}

function freshOverOut() {
    document.getElementById("hover").addEventListener("mouseover", function() {
        document.getElementById("#fresh-map").style.visibility = "hidden"
    });
    document.getElementById("hover").addEventListener("mouseout", function() {
        document.getElementById("#fresh-map").style.visibility = "visible"
    });
}

function beveragesOverOut() {
    document.getElementById("hover").addEventListener("mouseover", function() {
        document.getElementById("#beverages-map").style.visibility = "hidden"
    });
    document.getElementById("hover").addEventListener("mouseout", function() {
        document.getElementById("#beverages-map").style.visibility = "visible"
    });
}

function healthOverOut() {
    document.getElementById("hover").addEventListener("mouseover", function() {
        document.getElementById("#health-map").style.visibility = "hidden"
    });
    document.getElementById("hover").addEventListener("mouseout", function() {
        document.getElementById("#health-map").style.visibility = "visible"
    });
}

function petOverOut() {
    document.getElementById("hover").addEventListener("mouseover", function() {
        document.getElementById("#pet-map").style.visibility = "hidden"
    });
    document.getElementById("hover").addEventListener("mouseout", function() {
        document.getElementById("#pet-map").style.visibility = "visible"
    });
}
