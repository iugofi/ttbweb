
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>Particles JS</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css" />  -->
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

</head>
<body>
	<!--Container for Particles --> 
	<div id="particles-js"></div>
	<!-- Section --> 
	<section></section>
	<!--Particles CDN Down Below: --> 
	<!-- <script src="https://cdn.jsdeliver.net/particles.js/2.0.0/particles.min.js"></script> -->
	<script>
		particlesJS.load('particles-js', 'particles.json', function(){
			console.log('particles.json loaded');
		});
	</script>

<style>

body {
	height: 100vh;
	margin: 0;
	padding: 0;
  overflow-y:hidden;
}

section {
	background: beige;
	height: 300px;
	margin: 0 auto;
	z-index: 1;
	position: relative;
	top: 50%;
}

#particles-js {
		/* background-image: url(https://i.pinimg.com/originals/70/7c/3a/707c3a6a176d6d7c32de951467ae946b.jpg);  */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover; 
		height: 100%;
		margin: 0 auto;
		border-bottom: 2px solid grey;
		box-shadow: 0 12px 6px -6px grey;
		padding-bottom: 200px; 
		background-color: #000
}
</style>


<script>

particlesJS("particles-js", {
  	"particles":{
		"number": {
			"value": 100
		}, 
		"color": {
			"value": "#fff"
		}, 
		"shape": {
			"type": "circle"
		}, 
		"opacity": {
			"value": 0.9, 
			"random": true, 
			"anim": {
				"enable": true, 
				"speed": 9
			}
		}, 
			"size": {
				"value": 1
		}, 
			"move": {
			"enable": true,
			"speed": 3, 
			"direction": "none" 
		} 
	}, 

	"interactivity": {
		"events": {
			"onhover": {
				"enable": true, 
				"mode": "repulse"
			},
			"onclick": {
				"enable": true, 
				"mode": "push"
			}
		},
		"modes": {
			"repulse": {
				"distance": 150, 
				"duration": 0.5
			}
		}
	}
});

</script>






</body>
</html>

<script></script>


