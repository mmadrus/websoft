var div = document.getElementById('duck');
var winWidth = window.innerWidth;
var winHeight = window.innerHeight;

function getRandomNumber(min, max) {
    
  return Math.random() * (max - min) + min;
    
}

function duck() {

    if (div.style.opacity === "0") {
        randomTop = getRandomNumber(0, winHeight);
        randomLeft = getRandomNumber(0, winWidth);
        
        div.style.top = randomTop +"px";
        div.style.left = randomLeft +"px";
        
        div.style.opacity = "1";
    } else {
        div.style.opacity = "0";
    }
}