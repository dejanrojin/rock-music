<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="schedule.js"></script>
<script src="smooth.js"></script>

 <script>
$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 10) {
    	$('nav').addClass('change');
    }
    else {
    $('nav').removeClass('change');
    }
  });
  
   

  
  
  
});




  </script>
  <style>
  
  * {
  margin:0;
  padding:0;
  }
  
  .par3 .par44{
background:#000;

  }
  
 .jumbotron
  {background:url('rockimg.png')no-repeat;
    background-size: cover;
  height:490px;
  width:100%;

    background-position-y: -278px;
  }
  
.navbar { position:fixed;margin-top: 40px;

   transition: 500ms all ease;
    width: 100%;
    background: rgba(0, 0, 0, 0);
    height: 17%;
}

.navbar ul {    margin-top: 5px;
    display: inline-flex;
margin-left: 80px;
    width: 100%;
    text-align: center;
}

.navbar ul li {    margin-top: 20px;
    font-size: 25px;
    list-style: none;
    width: 130px;
	    font-family: sans-serif;
}

.navbar ul li a {
    text-decoration: none;
    color: #fff;
    font-family: Blade;
}
a.logo {font-size: 70px;
       text-shadow: 0 0 10px #cd2127;
    
}

li#logo1 {text-decoration: overline;
    margin-top: 2px;
    width: 300px;
	text-shadow: 1px 4px 10px #000;
}

.navbar.change{z-index:999999;    text-shadow: 0 0 10px #cd2127;
height: 12%;
    position: fixed;
    margin-top: 0px;
    background:rgba(0, 0, 0, 0.55);
    transition: 500ms all ease

}

@keyframes selection{

100%{    margin-left: 80px;opacity:1;}

}


.section1 {
   
    width: 50%;
    height: 430px;
	
}
.slicica {    animation-delay: 2s;
opacity:0.3;
transition: 1500ms all ease; 
animation:selection 5s forwards;
   margin-left: -600px;
    background: url(ACDC.png)no-repeat;
    width: 100%;
    height: 430px;
    background-size: 100% 100% !important;
}
.pozadina {
    margin-top: 170px;
    display: flex;
}

.section2 {
    font-size: 10px;
    float: right;
    width: 40%;
    text-align: center;
}




@keyframes thisweek{

100%{  transform: rotate(5deg) scale(1.2); margin-left: 280px;opacity:1;}

}



.thisweek {animation:thisweek 8s forwards;
opacity:0.3;  
 transform:scale(0.1);
  transform: rotate(0deg);
    margin-top: 130px;
    width: 75%;
    float: right;transition: 1500ms all ease; 
}

button {
transition: 500ms all ease;
    border: 1px solid #bb0037;
    color: #fff;
    background: #000000;
    width: 200px;
    height: 40px;
    border-radius: 100px 1500px 100px;
    
}

button:hover{box-shadow: 0px 0px 5px #bb003;
cursor:pointer;
transform:scale(1.1);

}

h1.week {
    background: url(ACDCnaslov.png);
    width: 230px;
    height: 150px;
    margin-left: 90px;
}

.weekly {    height: 100px;
    font-size: 100px;
    font-family: Blade;
    text-align: center;
}

@keyframes devil{

100%{   margin-top:10px;opacity:1;}

}


.weekly1 {margin-top: -30px;
animation:devil 2s infinite;
opacity:0;
    background: url(downdevil.png)no-repeat center;
    height: 100px;
}
.weekly0 {
    height: 100px;
}


.ticket {
    width: 100%;
    height: 340px;
    background: rgba(0, 0, 0, 0.71);
    background-size: 100% 100% !important;
    margin-top: 70px;
   
}
.ticketmain{filter: grayscale(100%);
background:url(ticket.gif);}


.ticketbody {
    width: 45%;
    background: rgba(255, 255, 255, 0.28);
    height: 320px;
    margin: 40px;
    margin-top: 10px;
    position: absolute;
}

.karte {
    float: right;
    background: rgba(255, 255, 255, 0);
    width: 50%;
    height: 341px;
}

h1.scorpion {
    margin-left: 200px;
    text-align: right;
    width: 250px;
    background: url(scorpion.png);
    height: 200px;
    margin-top: 15px;
}

p.par {
    width: 86%;
    text-align: right;
    font-size: 40px;
    color: rgba(255, 255, 255, 0.61);
}
p.par2 {
    text-shadow: 0 0 3px #fff;
    color: #a1a1a1;
    width: 100%;
    text-align: center;
    font-family: Blade;
    font-size: 45px;
    transform: rotate(3deg);
}

h1.ÄCDCdatum {
   transform: translateX(240px) rotate(4deg);

    font-size: 60px;
    text-shadow: 0 0 10px rgba(206, 33, 39, 0.46);
    color: rgba(0, 0, 0, 0.49);
}

h1.scedule {
    text-align: center;
    color: rgba(255, 255, 255, 0.61);
    text-transform: uppercase;
    font-family: blade;
    font-size: 60px;
}




.par3 { 

transition:3s all ease;   
 line-height: 45px;
    letter-spacing: 1px;
    text-align: center;
    font-size: 25px;
    font-family: fantasy;
    color: #fff;
    text-shadow: 0 3px #000;
}
span.span {
    font-size: 20px;
}


button.btn1 {
    background: rgba(0, 0, 0, 0.24);
    transform: translateX(180px);
}
.naruci {    display: flex;
    background: #fff;
    width: 100%;
    height: 190px;
    border-top: 1px solid #000;


}


.naruci1 {
  
    width: 33%;
    border-right: 1px solid #000;
    height: 160px;
    margin-top: 16px;
    margin-left: 10px;
}

.naruci2 {
    
    width: 33%;
   
    height: 160px;
    margin-top: 16px;
    margin-left: 10px;
}

.naruci3 {

    width: 33%;
    border-left: 1px solid #000;
    height: 160px;
    margin-top: 16px;
    margin-left: 10px;
}
button.btn2 {    z-index: 999999999;    margin-top: 15px;
    margin-left: 100px;
    font-size: 20px;
    color: rgba(255, 255, 255, 0.56);
}
button.btn2:hover {position: absolute;
    z-index: 999999999;
    margin-left: 100px;
    font-size: 22px;
    color: #fff;
}

.iron {   z-index: -1;
transition:1000ms all ease;
    background: url(iron2.png);
    height: 80px;
    width: 350px;
    margin-left: 30px;
}

.iron:hover {
   transform:scale(1.2);
}


h1.ironnaslov {
    text-align: center;
    font-family: monospace;
}

.metal {transition:1000ms all ease; 
    background: url(metal.png);
    width: 350px;
    height: 80px;
    margin-left: 30px; z-index: -1;
}

.metal:hover {
   transform:scale(1.2);
}


.sabaton {transition:1000ms all ease;
    background: url(sabaton.png);
    width: 350px;
    height: 80px;
    margin-left: 30px; z-index: -1;
}


.sabaton:hover {
   transform:scale(1.2);
}
.footer {
    display: flex;
    background: url(footer.jpg)no-repeat;
    height: 270px;
    width: 100%;
    background-size: 100% 100% !important;
}

.naruci4 {    text-align: center;

 
    width: 33%;
    border-right: 1px solid #fff;
    height: 240px;
    margin-top: 16px;
    margin-left: 10px;
}

.naruci5 {    text-align: center;

    width: 33%;
   
    height: 240px;
    margin-top: 16px;
    margin-left: 10px;
}

.naruci6 {    text-align: center;


    width: 33%;
    border-left: 1px solid #fff;
    height: 240px;
    margin-top: 16px;
    margin-left: 10px;
}

.footer a {    font-weight: bold;
    text-decoration: none;
    color: #fff;
    font-size: 22px;
}
a.logomain {margin-left: 70px;
    font-size: 40px;
    text-decoration: underline;
	 font-style: italic;
    font-family: fantasy;
}
.list {list-style:none;
    margin-left: 126px;
    margin-top: 20px;
    text-align: left;
}
.list1 {list-style:none;
    margin-left: 60px;
    margin-top: 20px;
    text-align: left;
}

input#ime {
    width: 80%;
    height: 50px;    margin-left: 40px;
}

input#email {
    width: 80%;
    height: 50px;    margin-left: 40px;
}

p.imep { margin-left: 40px;
    font-size: 30px;
    font-family: cursive;
    text-shadow: 0 0 10px #b00839;
}

.pozadina2 {
    margin-top: 30px;
    display: flex;
}
textarea#msg {
    width: 80%;
    margin-left: 40px;
}
button#send {
    margin-left: 190px;
}
.section3 {
    background: url(downdevil1.png)no-repeat;
    font-size: 10px;
    float: right;
    width: 60%;
    text-align: center;
    transform: scale(0.75);
    background-size: 100% 100% !important;
}
.form {
    transform: rotate(-2deg);
}



#play {  opacity: 0.3;  transform: scale(0.8);transition:1000ms all ease;
    background: url(play.png)no-repeat;
    color: #fff;
    width: 100px;
    height: 90px;
    background-size: 100% 100% !important;
}
#stop {   opacity: 0.3; transform: scale(0.8);transition:1000ms all ease;
    background: url(stop.png)no-repeat;
    color: #fff;
    width: 100px;
    height: 90px;
    background-size: 100% 100% !important;
}
#play:hover { cursor:pointer;opacity:1;   transform: scale(1);
    
}
#stop:hover {  cursor:pointer;opacity:1;  transform: scale(1);
   
}


.musicbody {
 position: absolute;
    display: flex;
    margin-top: 130px;
    width: 300px;
    margin-left: 510px;

}
#startmusic {transition:800ms ease all;
    opacity: 0; 
    font-size: 20px;
    color: #fff;
    font-family: fantasy;
    float: left;
    margin-top: 110px;
    margin-left: -200px;
}

#pausemusic{transition:800ms ease all;
    opacity: 0; 
    font-size: 20px;
    color: #fff;
    font-family: fantasy;
    float: left;
    margin-top: 110px;
    margin-left: 7px;
}

@keyframes senth{
	
100%{opacity:1}	
	
}


h1.senth {animation:senth 0.5s infinite ;
	transition:500ms all ease;  
  color: #fff;
    font-size: 70px;
    text-shadow: 0 0 10px #000;opacity:0;
}

p.sentp {
    transform: perspective(500px) rotateY(-30deg);
    font-size: 60px;
}
a#scroll { width: 100px;
    background-size: 100% 100% !important;
    background: url(scrolltotop.png);
    transition: 1500ms all ease;
    margin-left: 1130px;
    margin-top: 1210px;
    position: absolute;
    font-size: 30px;
    color: #fff;
    z-index: 99999999;
    height: 100px;
    transition: 500ms all ease;
}

a#scroll:hover{cursor:pointer;
transform:scale(1.35);

}
  </style>
  
      <link rel="stylesheet" href="responsive5.css" />
  
</head>
<body>

<a id="scroll"></a>
<div id="top" class="jumbotron text-center  ">
<div class="jumo">


<nav class="navbar" >
<ul>
<li id="home"><a href="ROCKmUSICl.html" class="active" >Home</a></li>
<li  id="home1"><a href="concerts.html" >Concerts</a></li></li>
<li  id="home2"><a href="gallery.html"  >Gallery</a></li></li>

<li id="logo1" ><a class="logo" href="#"   >Rock Music</a></li></li>
<li id="home5" ><a href="reservation.html"  >Reservation</a></li></li>
<li  id="home3" ><a href="about.html"  >About us</a></li></li>
<li id="home4" ><a href="contactRock.html"  >Contact</a></li></li>
</ul>
</nav>
<div class="musicbody">
<div id="play" onmouseover="musichover()" onmouseout="musicunhover()" ></div> <div id="stop"  onmouseover="musichover1()" onmouseout="musicunhover1()"></div>
<audio src="tnt.mp3" id="ad"></audio>
<p   id="startmusic"   >Start Music</p> 

<p id="pausemusic"   >Pause Music</p> 
</div>
</div>
   </div> 
   <div class="weekly" >Contact us
   
   </div>
<div class="pozadina2">
<div class="section1">
<form class="form"  action="contact.php"  method="post">

    <p class="imep">Ime:</p><input id="ime"  placeholder="Unesite ime" name="fullname"  /></br>

 <p class="imep"> Email:</p><input  id="email" placeholder="Unesite Email"   name="email" /></br>

<p class="imep">Message:</p><textarea id="msg" placeholder="Unesite mess"  name="message"  cols="20" rows="10"></textarea>


<button id="send" type="submit" value="submit" >Send </button>
</form>
</div>

<div class="section3">
<h1  class="senth">☆ Email sent ☆ </h1>
<p class="sentp" > ☆ Your Email is sent rocker!! ☆ </p>
</div>


</div>

<div class="footer">


<div class="naruci4">

<li id="logo1" ><a class="logomain" href="#"   >Rock Music:</a></li></li>
<div class="list">
<li id="home"><a href="ROCKmUSICl.html" class="active" >Home</a></li>
<li  id="home1"><a href="concerts.html" >Concerts</a></li></li>
<li  id="home2"><a href="gallery.html"  >Gallery</a></li></li>
<li id="home5" ><a href="reservation.html">Reservation</a></li></li>
<li  id="home3" ><a href="about.html"  >About us</a></li></li>
<li id="home4" ><a href="contactRock.html"  >Contact</a></li></li>
</div>
</div>






<div class="naruci5">

<li id="logo1" ><a class="logomain" href="#"   >Contact us:</a></li></li>
<div class="list1">
<li id="home"><a href="#" class="active" >Email: dejan.rojin@yahoo.com</a></li>
<li  id="home1"><a href="#" >Tel: 0616126077</a></li></li>
</div>
</div>







<div class="naruci6">


<li id="logo1" ><a class="logomain" href="#"   >Follow us:</a></li></li>
<div class="list">
<li id="home"><a href="#" class="active" ><img src="facebookicon.png"/>| Facebook</a></li>
<li  id="home1"><a href="#" ><img src="tweeter.png"/>| Tweeter</a></li></li>
<li  id="home2"><a href="#"  ><img src="instagram.png"/>| Instagram</a></li></li>
<li id="home5" ><a href="#"  ><img src="pinterest.png"/>| Pinterest</a></li></li>

</div></div>

</div>
<script>

var pausemusic=document.getElementById("pausemusic");

function musichover1(){
pausemusic.style.marginTop = "90px";
pausemusic.style.color="white";
  pausemusic.style.opacity= 0.5;
  pausemusic.style.textShadow = "0px 0px 40px #cd2127";
}


function musicunhover1(){
pausemusic.style.marginTop = "110px";
pausemusic.style.color="white";
  pausemusic.style.opacity= 0;

}




var startmusic=document.getElementById("startmusic");

function musichover(){
startmusic.style.marginTop = "90px";
startmusic.style.color="white";
  startmusic.style.opacity= 0.5;
  startmusic.style.textShadow = "0px 0px 40px #cd2127";
}


function musicunhover(){
startmusic.style.marginTop = "110px";
startmusic.style.color="white";
  startmusic.style.opacity= 0;

}






function music (){

var play=document.getElementById("play");
var stop=document.getElementById("stop");



var audio=document.getElementById("ad");


play.addEventListener("click",function(){

audio.play();

});
stop.addEventListener("click",function(){

audio.pause();

})

}

music();
</script>
</body>
</html>