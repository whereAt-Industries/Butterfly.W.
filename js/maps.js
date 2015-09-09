$(document).ready(function(e) {
    var opts = {
        center: new google.maps.LatLng(51.993102, 4.386495),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true
    };
    var map = new google.maps.Map(document.getElementById("map"), opts);
});
