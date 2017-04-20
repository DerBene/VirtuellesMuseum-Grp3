<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
div.bg {
	background-image: url(webroot/img/image.jpg);
	background-size:     cover;
    background-repeat:   no-repeat;
	background-position: center center;
	width:100vw;height:66.67vw;
	padding: 5vw;
}
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

.mySlides:hover{
	cursor: pointer;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.slideshow-container:hover {
  box-shadow: 0px 0px 30px #101010;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 17vh;
  width: auto;
  padding-top: 20vh;
  padding-left: 32px;
  padding-bottom: 20vh;
  padding-right: 32px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #121212;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #626262;
  font-size: 12px;
  padding: 12px 14px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 0.5s;
  animation-name: fade;
  animation-duration: 0.5s;
}

.zeitstrahl{
	padding-top: 50px;
	padding-bottom: 50px;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

</head>
<body>

	<div class="bg">
			<div class="slideshow-container">
				
				<div class="mySlides fade" onclick="window.location='http://it17-dmuseum3.dhbw-stuttgart.de/VirtuellesMuseum-Grp3/Persoenlichkeiten/Ruth_Cohn';">
					<div class="numbertext">1/3</div>
					<img src="webroot/img/ruth_cohn/Ruth_Cohn_Plakat.png" style="width:100%">
				</div>
				
				<div class="mySlides fade" onclick="window.location='http://it17-dmuseum3.dhbw-stuttgart.de/VirtuellesMuseum-Grp3/Persoenlichkeiten/Michael_Winkler';">
					<div class="numbertext">2/3</div>
					<img src="webroot/img/michael_winkler/Michael_Winkler_Plakat.png" style="width:100%">
				</div>
				
				<div class="mySlides fade" onclick="window.location='http://it17-dmuseum3.dhbw-stuttgart.de/VirtuellesMuseum-Grp3/Persoenlichkeiten/Maria_Montessori';">
					<div class="numbertext">3/3</div>
					<img src="webroot/img/maria_montessori/Maria_Montessori_Plakat.png" style="width:100%">
				</div>
				
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				
			</div>
			<br>

			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
			
		<div class="zeitstrahl">
			Hier könnte der Zeitstrahl hin :P
		</div>
	</div>
	
	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
	</script>
	
</body>
</html>