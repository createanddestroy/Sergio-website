<!DOCTYPE html>
<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
                SERGIO SOLORZANO
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/other-style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

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
                <li class="photos"><a href="photos.php">photos.</a></li>
                <li class="active"><a href="other.php">other.</a></li>
                <li class="about"><a href="about.php">about.</a><li>
            </ul>

            </div>
        </div>
    </nav>


 
<secition> 

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            PRINTMAKING  CONTENT 
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->


<div class="row featurette">
        <div class="col-md-8 col-md-push-4">
          <h2 class="featurette-heading">Printmaking</h2>
    </div> <!-- closing class column tag -->
</div> <!-- closing row tag -->

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
                IMAGE CONTENT 
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<div class="row">
  <div class="column">
    <img src="../images/1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
    <p>Untitled//2016</p>
  </div>

  <div class="column">
    <img src="../images/2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
    <p>Untitled//2016</p>
  </div>

  <div class="column">
    <img src="../images/3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
    <p>Untitled//2016</p>
  </div>
</div> <!-- closing div row tag -->

<div class="col-xs-6 col-lg-4">

    <p>These linocut prints where inspired by landscapes in Los Angeles. Large portions of 
        the landscapes where selected and filled in with color to distort it completely. This
        is an attempt to make sense of what I often see when I look at space. Simply shapes
        and color. 

 </div> <!-- closing columng tag -->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
               MODAL VIEW
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
        <img src="../images/1.jpg" style="width:73%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
        <img src="../images/2.jpg" style="width:73%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
        <img src="../images/3.jpg" style="width:73%">
    </div>
</div> <!-- closing div row tag -->
    


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
              MODAL VIEW CAPTIONS
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

     <div class="column">
      <img class="demo" src="../images/1.jpg" onclick="currentSlide(1)" alt="Untitled//2016">
    </div>

    <div class="column">
      <img class="demo" src="../images/2.jpg" onclick="currentSlide(2)" alt="Untitled//2016">
    </div>

    <div class="column">
      <img class="demo" src="../images/3.jpg" onclick="currentSlide(3)" alt="Untitled//2016">
    </div>
</div> <!-- closing div row tag -->


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