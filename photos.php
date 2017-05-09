<!DOCTYPE html>
<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
				SERGIO SOLORZANO
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/photos-style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://use.typekit.net/mon0woq.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<meta charset="utf-8">


<title>SERGIO SOLORZANO</title>
</head>

<body>

	<!-- TOP NAV BAR -->
<nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- LOGO -->
            <div class="navbar-header">

                <button type"button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                    <a href="#" class="navbar-brand">sergio solorzano.</a>

            </div>

            <!-- MENU ITEMS -->
            <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li class="home"><a href="index.php">home.</a></li>
                <li class="design"><a href="design.php">design.</a></li>
                <li class="active"><a href="photos.php">photos.</a></li>
                <li class="other"><a href="other.php">other.</a></li>
                <li class="about"><a href="about.php">about.</a><li>
            </ul>

            </div>
        </div>
    </nav>



<secition> 

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
                IMAGE CONTENT 
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<div class="row">
  <div class="column">
    <img src="../images/0001_2016.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
    <p>Palm Springs, CA//2016</p>
  </div>

  <div class="column">
    <img src="../images/0003_2016.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
    <p>Palm Springs, CA//2016</p>
  </div>

  <div class="column">
    <img src="../images/0004_2016.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
    <p>South Pasadena, CA//2016</p>
  </div>

  <div class="column">
    <img src="../images/0006_2016.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
    <p>JFK, NY//2016</p>
  </div>

  <div class="column">
    <img src="../images/0007_2016.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
    <p>El Sereno, CA//2016</p>
  </div>

  <div class="column">
    <img src="../images/0008_2016.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow">
    <p>NYC, NY//2016</p>
  </div>

<div class="column">
    <img src="../images/0002_2017.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow">
    <p>Los Angeles, CA//2017</p>
  </div>

<div class="column">
    <img src="../images/0005_2016.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow">
    <p>Los Angeles, CA//2016</p>
  </div>

<div class="column">
    <img src="../images/0003_2017.jpg" onclick="openModal();currentSlide(9)" class="hover-shadow">
    <p>Los Angeles, CA//2017</p>
  </div>

<div class="column">
    <img src="../images/0010_2016.jpg" onclick="openModal();currentSlide(10)" class="hover-shadow">
    <p>South Pasadena, CA//2016</p>
  </div>

<div class="column">
    <img src="../images/0004_2017.jpg" onclick="openModal();currentSlide(11)" class="hover-shadow">
    <p>Los Angeles, CA//2017</p>
  </div>

<div class="column">
    <img src="../images/0011_2016.jpg" onclick="openModal();currentSlide(12)" class="hover-shadow">
    <p>NYC, NY//2016</p>
</div>
</div>


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
               MODAL VIEW
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 12</div>
        <img src="../images/0001_2016.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 12</div>
        <img src="../images/0003_2016.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 12</div>
        <img src="../images/0004_2016.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 12</div>
        <img src="../images/0006_2016.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">5 / 12</div>
        <img src="../images/0007_2016.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">6/ 12</div>
        <img src="../images/0008_2016.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">7/ 12</div>
        <img src="../images/0002_2017.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">8 / 12</div>
        <img src="../images/0005_2016.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">9 / 12</div>
        <img src="../images/0003_2017.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">10/ 12</div>
        <img src="../images/0010_2016.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">11 / 12</div>
        <img src="../images/0004_2017.jpg" style="width:100%">
    </div>

     <div class="mySlides">
      <div class="numbertext">12 / 12</div>
        <img src="../images/0011_2016.jpg" style="width:100%">
    </div>
</div>
    


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
              MODAL VIEW CAPTIONS
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

     <div class="column">
      <img class="demo" src="../images/0001_2016.jpg" onclick="currentSlide(1)" alt="Palm Springs, CA//2016">
    </div>

    <div class="column">
      <img class="demo" src="../images/0003_2016.jpg" onclick="currentSlide(2)" alt="Palm Springs, CA//2016">
    </div>

    <div class="column">
      <img class="demo" src="../images/0004_2016.jpg" onclick="currentSlide(3)" alt="South Pasadena, CA//2016">
    </div>

    <div class="column">
      <img class="demo" src="../images/0006_2016.jpg" onclick="currentSlide(4)" alt="JFK, NY//2016">
    </div>

    <div class="column">
      <img class="demo" src="../images/0007_2016.jpg" onclick="currentSlide(5)" alt="El Sereno, CA//2017">
    </div>

    <div class="column">
      <img class="demo" src="../images/0008_2016.jpg" onclick="currentSlide(6)" alt="NYC, NY//2016">
    </div>

    <div class="column">
      <img class="demo" src="../images/0002_2017.jpg" onclick="currentSlide(7)" alt="Los Angeles, CA//2017">
    </div>

    <div class="column">
      <img class="demo" src="../images/0005_2016.jpg" onclick="currentSlide(8)" alt="Los Angeles, CA//2016">
    </div>

    <div class="column">
      <img class="demo" src="../images/0003_2017.jpg" onclick="currentSlide(9)" alt="Los Angeles, CA//2017">
    </div>

    <div class="column">
      <img class="demo" src="../images/0010_2016.jpg" onclick="currentSlide(10)" alt="South Pasadena, CA//2016">
    </div>

    <div class="column">
      <img class="demo" src="../images/0004_2017.jpg" onclick="currentSlide(11)" alt="Los Angeles, CA//2017">
    </div>

    <div class="column">
      <img class="demo" src="../images/0011_2016.jpg" onclick="currentSlide(12)" alt="NYC, NY//2016">
    </div>

</div>


<footer class="footer-fixed">
    <div class="container">

&copy;
Sergio Solorzano//2017 

    </div>
</footer>

</section>

<!--JAVASCRIPT-->
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

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
  </body>
</html>