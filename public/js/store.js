"use strict";

var body = document.getElementsByTagName("BODY")[0];
var gamewindow = document.getElementById("game-window");

body.onload = function(){
  loadGames();
};

function loadGames(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     //gamewindow.innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", _ENV['BACKEND_URL'], true);
  xhttp.send();
}
