
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        document.getElementById("loc").innerHTML = "Geolocation doesnt work in this browser.";
    }
}

function showPosition(position) {
    document.getElementById("loc").innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
