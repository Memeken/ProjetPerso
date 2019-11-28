//dark background with light circle
window.addEventListener("DOMContentLoaded", (e) => {

    const spotlight = document.querySelector('.spotlight');

    let spotlightSize = 'transparent 160px, rgba(0, 0, 0, 0.85) 200px';//let permet de déclarer des variables dont la portée est limitée à celle du bloc dans lequel elles sont déclarées.

    window.addEventListener('mousemove', e => updateSpotlight(e)); // ecoute le mouvement de ta souris

    function updateSpotlight(e) {

        spotlight.style.backgroundImage = `radial-gradient(circle at ${e.pageX / window.innerWidth * 100}% ${e.pageY / window.innerHeight * 100}%, ${spotlightSize}`;
    }
});

//popup
var close = document.getElementsByClassName("closebtn");

var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ 
      div.style.display = "none"; }, 600);
  }
}
