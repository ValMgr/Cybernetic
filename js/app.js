particlesJS.load('particles-js', 'js/assets/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });

var height = document.body.clientHeight;
var plexus = document.getElementById('particles-js');
plexus.style.height = height + "px";
// console.log(height);

var DocHeight = document.body.clientHeight;
var Footer = document.getElementById('mainfooter');
var FooterHeight = Footer.offsetHeight;
Footer.style.top = DocHeight + FooterHeight + 'px';

