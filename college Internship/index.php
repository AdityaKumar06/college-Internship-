<?php
include 'app/connect.php';
?>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body
{
     background-image:url("img/1d.jpg");
    background-repeat: no-repeat;
    background-size:cover; 
}

h1
{
   color:darkred;
   font-size: 70px;
   margin-top: 5%;
   border:10px solid black;
  
}          
nav 
{ 
	width:100%;
    height:80px;
    background-color:darkblue;
    line-height: 50px;
   
}
nav ul
{
    float: right;
    margin-right:30px
}
nav ul li
{
    list-style-type: none;
    display:inline-block;
    transition: 0.8s all;
                
}
nav ul li a
{
    text-decoration: none;
    color: #fff;
    padding: 40px;
}
nav ul li:hover
{
    background-color: coral;
}

footer 
{
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
  margin-top: 20%;
  
}



* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
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
  .text {font-size: 11px}
}
</style>
</head>
<body>
<div id="main">
    <nav>  
    	<ul>
            <li><a href="#">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Alogin.php">Admin </a></li>
            <li><a href="Studentlogin.php">User</a></li>
        </ul>
    </nav>
</div>
<hr>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/8.jpg" style="width:100%">
  <h1 align=center>College Internship System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/7.jpg" style="width:100%">
  <h1 align=center>College Internship System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/d1.jpg" style="width:100%">
  <h1 align=center>College Internship System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/e1.jpg" style="width:100%">
  <h1 align=center>College Internship System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/f1.jpg" style="width:100%">
  <h1 align=center>College Internship System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/c1.jpg" style="width:100%">
  <h1 align=center>College Internship System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/qq1.jpg" style="width:100%">
  <h1 align=center>College Internship System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/qq2.jpg" style="width:100%">
  <h1 align=center>College Internship System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/qq3.jpg" style="width:100%">
  <h1 align=center>College Internship System</h1>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<footer>
  <p>Devloped by Aditya kumar</p>
 </footer>

</body>
</html>