"use strict";

var _ENV = {BACKEND_URL:""};
var hostName = window.location.hostname;

switch(hostName) {
    case "dream.nl":
        _ENV['BACKEND_URL']="http://backend.dream.nl";
        break;
    case "riccardoparrello.nl":
        _ENV['BACKEND_URL']="http://backend.dream.riccardoparrello.nl";
        break;
}
