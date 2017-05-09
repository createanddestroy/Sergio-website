<!DOCTYPE html>
<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				SERGIO SOLORZANO
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/home-style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/main-slide.js"></script>
	<meta charset="utf-8">


<title>SERGIO SOLORZANO</title>
</head>

<body>

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
             TOP NAV BAR 
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<nav class="navbar navbar-inverse fixed-top">
        <div class="container-fluid">

            <!-- LOGO -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                    <a href="#" class="navbar-brand">sergio solorzano.</a>

            </div>

            <!-- MENU ITEMS -->
            <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">home.</a></li>
                <li class="design"><a href="design.php">design.</a></li>
                <li class="photos"><a href="photos.php">photos.</a></li>
                <li class="other"><a href="other.php">other.</a></li>
                <li class="about"><a href="about.php">about.</a><li>
            </ul>

            </div>
        </div>
    </nav> <!-- closing navbar -->



<secition> 

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            SLIDESHOW IMAGES
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<div class="slideshow-container">
  <div class="mySlides" id="one">
    <img src="images/0001_ELA.jpg" style="width:100%">
  </div> <!-- closing mySlides one div -->

  <div class="mySlides" id="two">
    <img src="images/JaymeOdgersPoster.jpg" style="width:100%">
  </div> <!-- closing mySlides two div -->

  <div class="mySlides" id="three">
    <img src="images/Instillation.jpg" style="width:100%">
  </div> <!-- closing mySlides three div -->
</div> <!-- closing slideshow-container div -->
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  
</div> <!-- closing text align div -->

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
                    FOOTER
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<footer class="footer">
    <div class="container">

&copy;
Sergio Solorzano//2017 

    </div> <!-- closing footer div -->
</footer>

</section> <!-- closing section div -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>


<script> 

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("myImages");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}

</script>


</body>
</html>