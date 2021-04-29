/* function testing () {
    // document.getElementById("#hover").onclick(function() { } );
    // document.getElementById("myimg").style.display = "block";

    document.getElementById("hover").addEventListener("mouseover", function() {
        document.getElementById("myimg").style.display = "block"
    });

    document.getElementById("hover").addEventListener("mouseout", function() {
        document.getElementById("myimg").style.display = "block"
    });
} */

/*maybe use css hover? lists:
    Frozen Food
    Fresh Food
    Beverages
    Home Health
    Pet Food
*/

// function showImage() {
//     var parent = (document.getElementById("category-image"));
//     var child = parent.firstChild;
//     if (child != null ) {
//         parent.removeChild(child);
//     }
    
//     var showImageMap = document.createElement("img");
//     showImageMap.setAttribute("id", categoryID);
//     showImageMap.setAttribute("src", "img/", + categoryID + ".png");
//     showImageMap.setAttribute("alt", categoryID);
//     showImageMap.setAttribute("align", "middle");
//     showImageMap.setAttribute("usemap", "#", + categoryID + "map");
//     showImageMap.appendChild(pic);
// }

/*
function frozenOut() {
    document.getElementById("frozen").addEventListener("mouseout", function() {
        document.getElementById("frozen-map").style.display = "none"
    });
}

function freshOut() {
    document.getElementById("fresh").addEventListener("mouseout", function() {
        document.getElementById("fresh-map").style.display = "none"
    });
}

function beveragesOut() {
    document.getElementById("beverages").addEventListener("mouseout", function() {
        document.getElementById("beverages-map").style.display = "none"
    });
}

function healthOut() {
    document.getElementById("health").addEventListener("mouseout", function() {
        document.getElementById("health-map").style.display = "none"
    });
}
function petOut() {
    document.getElementById("pet").addEventListener("mouseout", function() {
        document.getElementById("pet-map").style.display = "none"
    });
}

*/


// function resetMaps() {
//     document.getElementById("frozen-map").style.display = "none"
    
// }

function hardReset() {
    document.getElementById("frozen-map").style.display = "none";
    document.getElementById("fresh-map").style.display = "none";
    document.getElementById("beverages-map").style.display = "none";
    document.getElementById("health-map").style.display = "none";
    document.getElementById("pet-map").style.display = "none";
};

function frozenOver() {
    hardReset();
    document.getElementById("frozen-map").style.display = "block";
};

function freshOver() {
    hardReset();
    document.getElementById("fresh-map").style.display = "block";
};

function beveragesOver() { 
    hardReset();
    document.getElementById("beverages-map").style.display = "block";
};

function healthOver() {
    hardReset();
    document.getElementById("health-map").style.display = "block";
};

function petOver() {
    hardReset();
    document.getElementById("pet-map").style.display = "block";
};