particlesJS.load('particles-js', 'js/assets/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });


window.addEventListener("resize", resize);
resize();




function resize(){

	var height = document.body.clientHeight;
	var plexus = document.getElementById('particles-js');


	var Footer = document.getElementById('mainfooter');
	var FooterHeight = Footer.offsetHeight;


	console.log(height);


	Footer.style.top = height + FooterHeight + 'px';
	plexus.style.height = height + FooterHeight + "px";


}



// function resize(){

// 	var height = document.body.clientHeight;
// 	var plexus = document.getElementById('particles-js');


// 	if (plexus) {
// 	plexus.style.height = height + FooterHeight + "px";
// 	}


// 	var Footer = document.getElementById('mainfooter');
// 	var FooterHeight = Footer.offsetHeight;


// 	console.log(height);


// 	Footer.style.top = height + FooterHeight + 'px';


// }
