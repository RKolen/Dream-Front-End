"use strict";

var body = document.getElementsByTagName("BODY")[0];
var gamewindow = document.getElementById("game-window");

body.onload = function(){
  loadGames();
};

function loadGames(){
  var xhttp = new XMLHttpRequest();
  var order ="orderby=" + document.getElementById("orderby").value;
  var category = "category=" + document.getElementById("category_id").value;
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
     var results = JSON.parse(this.responseText);
     gamewindow.innerHTML ="";
     for (var i = 0; i < results.length; i++){
        gamewindow.innerHTML += "<div class=\"game-card\" onclick=\"location.href='/games/" + results[i]['id'] + "' \"><div class=\"game-card-image\" style=\"background-image: url(" + _ENV['BACKEND_URL'] + "/games/" + results[i]['id'] + "/image)\"></div><h3>" + results[i]['title'] + "</h3></div>";
     }
    }
  };
  xhttp.open("GET", _ENV['BACKEND_URL'] + "/search?" + order + "\&" + category, true);
  xhttp.send();
}
