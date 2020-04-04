function showNav() {
    var x = document.getElementById("navbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } 
    else {
        x.className = "navbar";
    }
} 

function changePrice(clicked_label) {
    if(clicked_label === "iron30") {
        document.getElementById('ironCena').innerHTML = "2&euro;"
    }else if(clicked_label === "iron1") {
        document.getElementById('ironCena').innerHTML = "5&euro;";
    }

    if(clicked_label === "gold30") {
        document.getElementById('goldCena').innerHTML = "3&euro;"
    }else if(clicked_label === "gold1") {
        document.getElementById('goldCena').innerHTML = "6&euro;";
    }

    if(clicked_label === "dia30") {
        document.getElementById('diaCena').innerHTML = "5&euro;"
    }else if(clicked_label === "dia1") {
        document.getElementById('diaCena').innerHTML = "8&euro;";
    }
}