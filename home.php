<?php
session_start();

	include("db_conn.php");
	include("function.php");
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <style>
*{
    margin: 0;
    padding: 0;
}
.front{
	height: 100vh;
	align-items: left;
}

body{
   min-height: 100vh;
   width: 100%;
   background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(Image/Sports_Complex.jpg);
   background-size: cover;
}
.topnavbar{
	width: 100%;
	height: 60px;
	background-color:#fff;
}

.topnavbar p{
	font-family: arial;
	color: black;
	font-size: 30px;
	line-height: 60px;
	float: left;
	padding: 0px 10px 0px 20px;
}

.topnavbar ul{
	float: right;
}

.topnavbar ul li{
	float:left;
	list-style: none;
	font-size: 20px;
	position: relative; 
}

.topnavbar ul li a{
	display: block;
	padding: 17px 14px;
	font-family: arial;
	color: black;
	font-size: 20px;
	text-decoration: none;	
	text-align: left;
}

.topnavbar ul li ul{
	display: none;
	position: absolute;
	background-color: grey;
}

.topnavbar ul li:hover ul{
	display: block
}

.topnavbar ul li ul li {
	width: 230px;
	border-radius: 150px;
}

.topnavbar ul li ul li a {
	padding: 14px 15px;
}

.topnavbar ul li ul li a:hover {
	background-color:#9A7B40 ;
}

.swiper{
    padding: 50px 50px

}
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sports Complex</title>
    <link rel="icon" href="/Logo/Seal_of_Santa_Rosa,_Laguna.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>

<body>

	<div  class = "topnavbar">	
<p>TOURSPOT</p>        
			<ul>
				<li> <a href="firstACT_(1).html">HOME</a></li>
				<li> <a href="#">CATEGORY</a>
					<ul>
						<li><a href="Fort-Santiago.html">HOME</a></li>
						<li><a href="Bulwarte.html">SCHEDULE</a></li>
						<li><a href="barbaras'R.html">TRANSACTIONS</a></li>
						<li><a href="ManilaC.html">ABOUT US</a></li>
						<li><a href="CasaM.html">CONTACT US</a></li>
					</ul>			
				</li><li><a href="">HOME</a></li>
                <li><a href="">SCHEDULE</a></li>
                <li><a href="">TRANSACTIONS</a></li>
                <li><a href="">ABOUT US</a></li>
                <li><a href="">CONTACT US</a></li>
			

			</ul>
		</div>

		<div class="swiper">
			<div class="swiper-wrapper">			
			  <div class="swiper-slide"><img src=Image/SwimmingP.jpeg></div>
			  <div class="swiper-slide"><img src=Image/tennisC.jpg></div>
			  <div class="swiper-slide"><img src=Image/VBallC2.jpg></div>
			  <div class="swiper-slide"><img src=Image/SportsCourt.jpg></div>
	
			</div>
			<div class="swiper-pagination"></div>			
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>	
		</div>

			
		
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
	const swiper = new Swiper('.swiper', {
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
 
  loop: true,

  pagination: {
    el: '.swiper-pagination',
	clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
</script>
</body>
</html>