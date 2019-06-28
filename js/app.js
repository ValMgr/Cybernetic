particlesJS.load('particles-js', 'js/assets/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });

var height = document.body.clientHeight;
var plexus = document.getElementById('particles-js');

var Footer = document.getElementById('mainfooter');
var FooterHeight = Footer.offsetHeight;


plexus.style.height = height + FooterHeight + "px";
console.log(height);


Footer.style.top = height + FooterHeight + 'px';

