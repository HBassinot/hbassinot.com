function initMap() {
  myCenter=new google.maps.LatLng(45.506672, -73.563891);
  var mapOptions= {
    center:myCenter,
    zoom:13,
    scrollwheel: true,
    draggable: true,
    mapTypeId: 'hybrid'
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
  map.setTilt(45);
  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var menubar = document.getElementById("hb-menu");
    var navbar = document.getElementById("hb-nav");
    if (document.body.scrollTop > 25 || document.documentElement.scrollTop > 25) {
        navbar.className = "hb-navbar-top" + " hb-menu-top-bar";
        menubar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" hb-menu-top-bar", "");
        menubar.className = menubar.className.replace(" w3-card w3-animate-top w3-white", "");
    }

    var backtop = document.getElementById("hb-backtop");
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
      backtop.className = " hb-animate-opacity hb-backtop-visible";
    } else {
      backtop.className = backtop.className.replace("hb-backtop-visible", "hb-backtop-hide");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("hb-menu-small");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

