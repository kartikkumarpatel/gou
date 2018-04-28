<!DOCTYPE html>
<html>
<head>
	<?php include('includes/header.php'); ?>
	<title>Home</title>
</head>
<body>
	<div class="content-container">

		<?php include('includes/nav.php'); ?>
	
		<div class="col-md-6">
			<div>
				<h1>Welcome to Growz On U online store.</h1>
			</div>

			<p>We have everything you need to create a great garden. Whether your garden is large or small we have the right plants, water features and pots for you. We also have the right advice about what to plant where and how to get the best blooms in town. <br> <br> We have a wide range of roses, fruit trees, citrus, berry fruits, hedging, natives, perennials, flower and vege punnets, herbs, potting mixes and fertilisers. Come in to see our great selection.</p>
		</div>


		

		
		<div class="col-md-4">
			<h2 style="text-align:center">Slideshow Gallery</h2>

			  <div class="mySlides">
			    <img src="images/1r.jpeg" style="width:100%;">
			  </div>

			  <div class="mySlides">
			    <img src="images/2r.jpeg" style="width:100%">
			  </div>

			  <div class="mySlides">
			    <img src="images/3r.jpeg" style="width:100%">
			  </div>
			    
			  <div class="mySlides">
			    <img src="images/4r.jpeg" style="width:100%">
			  </div>

			  <div class="mySlides">
			    <img src="images/5r.jpeg" style="width:100%">
			  </div>
			    
			  <div class="mySlides">
			    <img src="images/6r.jpeg" style="width:100%">
			  </div>
			    
			  <a class="prev" onclick="plusSlides(-1)">❮</a>
			  <a class="next" onclick="plusSlides(1)">❯</a>

			  <div class="caption-container">
			    <p id="caption"></p>
			  </div>

		</div>


		<div class="col-lg-2 side-image">
			    <div>
			      <img class="demo cursor" src="images/1r.jpeg" style="width:50%" onclick="currentSlide(1)" alt="Blackberry Nip">
			    </div>
			    <div>
			      <img class="demo cursor" src="images/2r.jpeg" style="width:50%" onclick="currentSlide(2)" alt="Aotearoa New Zealand">
			    </div>
			    <div>
			      <img class="demo cursor" src="images/3r.jpeg" style="width:50%" onclick="currentSlide(3)" alt="Celebration">
			    </div>
			    <div>
			      <img class="demo cursor" src="images/4r.jpeg" style="width:50%" onclick="currentSlide(4)" alt="Chartreuse De Parme">
			    </div>
			    <div>
			      <img class="demo cursor" src="images/5r.jpeg" style="width:50%" onclick="currentSlide(5)" alt="Cup Fever">
			    </div>    
			    <div>
			      <img class="demo cursor" src="images/6r.jpeg" style="width:50%" onclick="currentSlide(6)" alt="Chartreuse De Parme">
			    </div>
		</div>

	</div>
	<!-- <div>
		<?php include('includes/footer.php'); ?>
	</div> -->
</body>

<script type="text/javascript">
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</html>