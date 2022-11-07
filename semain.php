<!doctype html>
<html>
<head>
  <title>orphan donation</title>
  <style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    font-size:20px;
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:rgb(0,133,68);
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 20px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:rgb(217, 165, 243)}

.dropdown:hover .dropdown-content {
    display: block;
}

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
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
  height: 13px;
  width: 13px;
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
@media only screen and (max-width:500px) {
  .text {font-size: 11px}
}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 30%;
}
div.gallery:hover {
    border: 1px solid #777;
}
div.gallery img {
    width: 100%;
    height: auto;
}


div.gallery1 {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 33%;
}
div.gallery1:hover {
    border: 1px solid #777;
}

div.gallery1 img {
    width: 100%;
    height: auto;
}
div.gallery2 {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 45%;
}
div.gallery2:hover {
    border: 1px solid #777;
}
div.gallery2 img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
</head>
<body>
<div style="width:100%;height:150px;">
<img id="home" style="float:left;width:15%;height:150px;" src="file://M:/se project/pic1.jpg"></img>
<h1 style="font-family:'Elephant Italic';color:rgb(0, 167, 0);font-style:italic;font-size:60px;;padding:0px 0 0 10px ;">Fountain of Life Orphanage
<span style="color:black;font-size:50px;font-family:'Edwardian Script ITC';padding:0 0 0 200px;text-decoration:none">Deeds of Giving are the very Foundations of the World</span></h1>
</div>

<ul id="ul1">
   <li class="c1"><a href="h1.php"  target="_blank">Home</a></li>
   <li class="c1"><a href="items.php"  target="_blank">Items for donation</a></li>
   <li class="c1"><a href="testsearch.php" target="_blank">Details of Orphanages</a></li>
   <li class="c1"><a href="donation.php" target="_blank">Donate</a></li>
   <li class="c1"><a href="orphnagemain.php" target="_blank">Orphanage enrollement</a></li>
   <li class="c1"><a href="commentsession.php" target="_blank">Place comment</a></li>
   <li class="c1"><a href="aboutus.php" target="_blank">About us</a></li>
  
</ul>


<div class="slideshow-container">

<div class="mySlides fade">ll
  <div class="numbertext">1 / 3</div>
  <img src="file://M:/se project/pic10.jpg" style="width:100%;height:500px">
  <div class="text">Pic1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="file://M:/se project/pic16.jpg" style="width:100%;height:500px">
  <div class="text">pic2</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="file://M:/se project/pic14.jpg" style="width:100%;height:500px">
  <div class="text">pic3</div>
</div>

</div>
<br>

<div style="text-align:center">
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
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3500); // Change image every 2 seconds
}
</script>
<p>
An orphanage is a residential institution devoted to the care of orphans—children whose biological parents are deceased or otherwise unable or unwilling to take care of them. Biological parents, and sometimes biological grandparents, are legally responsible for supporting children, but in the absence of these, no named godparent, or other relatives willing to care for the children, they become a ward of the state, and orphanages are one way of providing for their care, housing and education.

       It is frequently used to describe institutions abroad, where it is a more accurate term, since the word orphan has a different definition in international adoption. Most children who live in orphanages are not orphans; four out of five children in orphanages having at least one living parent and most having some extended family. Most orphanages have been closed in Europe and North America. There remain a large number of state funded orphanages in the former Soviet Bloc but they are slowly being phased out in favour of direct support to vulnerable families and the development of foster care and adoption services where this is not possible.

         Few large international charities continue to fund orphanages; however, they are still commonly founded by smaller charities and religious groups. Especially in developing countries, orphanages may prey on vulnerable families at risk of breakdown and actively recruit children to ensure continued funding. Orphanages in developing countries are rarely run by the state.
Other residential institutions for children can be called group homes, children's homes, refuges, rehabilitation centers, night shelters, or youth treatment centers.
</p>


</body>
<html> 