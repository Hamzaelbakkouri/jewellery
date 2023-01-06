
 function toggle() {
   var b = document.querySelector(".cnt");
   b.style.display = "flex";
   var c = document.querySelector("#icon0");
   c.style.display = "grid";
   var d = document.querySelector("#icon");
   d.style.display = "none";
 }
 function toggle0() {
   var b = document.querySelector(".cnt");
   b.style.display = "none";
   var c = document.querySelector("#icon0");
   c.style.display = "none";
   var d = document.querySelector("#icon");
   d.style.display = "grid";
 }

// to get current year

/** google_map js **/

function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
