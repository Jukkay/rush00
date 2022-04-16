<?php
echo '
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hive Paint Factory</title>
	<link href="./static/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<div class="nav-content flex-container">
			<div class="logo">
				<img id="logoimg" src="https://img.icons8.com/external-icongeek26-outline-gradient-icongeek26/452/external-sandwich-baking-and-bakery-icongeek26-outline-gradient-icongeek26.png" alt="School logo">
			</div>
			<div class="logo">
				<h1>Hive<span id="light">Paint Factory</span></h1>
			</div>
			<div class="drop">
				<a class="navspan" href="./templates/basket.html">Basket</a>
			</div>
			<div class="drop">
				<a class="navspan" href="./templates/login.html">Login</a>
			</div>
			<div class="drop">
				<a class="navspan" href="./templates/create.html">Sign up</a>
			</div>
		</div>
	</header>

	<main>
';
include('product_list.php');
// echo '
// 	<main>

// 	<!-- First section (banner) -->

// 	<div class="second-section flex-container">
// 		<div class="left flex-container" id="hide">
// 			<div id="infoimage">
// 				<img class="info-img" src="../images/pexels-dids-3587343.jpg" alt="Abtract paint pic">
// 			</div>
// 			<div>
// 				<h2 class="info-text">Hive Paint Factory</h2>
// 				<p class="quote">Interior paint colours, spray paints, automotive paints: all in one place. Simple steps to make your vision come alive.</p>
// 				<p id="info-name">Fast delivery to your door</p>
// 			</div>
// 		</div>
// 		<div class="right flex-container">
// 			<div class="categories">
// 				<h2>Categories</h2>
// 			</div>
// 			<div class="info-blocks flex-container">
// 				<div id="containerimg1">
// 					<!-- <img class="container-img" id="desktop" src="../images/Selecting-Paint-Colour.jpeg" alt="Interior paint selector"> -->
// 					<!-- <img class="container-img" id="mobile-img" src="../images/Screen Shot 2022-04-16 at 4.06.23 PM.png" alt="Theme picture"> -->
// 				</div>
// 				<div class="container-text flex-container">
// 					<h4>Interior Paint</h4>
// 					<p id="text">Painting is one of the easiest way to change the mood of a room.</p>
// 					<a id="readmore" href="#">View items</a>
// 				</div>
// 			</div>
// 			<div class="info-blocks grey flex-container">
// 				<div id="containerimg2">
// 					<!-- <img class="container-img" id="desktop" src="../images/pexels-dominika-roseclay-2208478.jpg" alt="Diy paints"> -->
// 					<!-- <img class="container-img" id="mobile-img" src="./images/information-campus-mobile.jpg" alt="Campus facilities picture"> -->
// 				</div>
// 				<div class="container-text flex-container">
// 					<h4>Arts and Crafts</h4>
// 					<p id="text">All the paints you need: watercolour, oils, acrylic.</p>
// 					<a id="readmore" href="#">View items</a>
// 				</div>
// 			</div>
// 			<div class="info-blocks flex-container">
// 				<div id="containerimg3">
// 					<!-- <img class="container-img" id="desktop" src="../images/shutterstock_298093082-1024x683.png" alt="Automotive colors"> -->
// 					<!-- <img class="container-img" id="mobile-img" src="./images/information-guest-lecture-mobile.jpg" alt="Oliver Sack"> -->
// 				</div>
// 				<div class="container-text flex-container">
// 					<h4>Automotive</h4>
// 					<p id="text">Make your restored vehicle look amazing with an assortment of auto paint.</p>
// 					<a id="readmore" href="#">View items</a>
// 				</div>
// 			</div>
// 			<div class="info-blocks grey flex-container">
// 				<div id="containerimg4">
// 					<!-- <img class="container-img" id="desktop" src="../images/pexels-miguel-marmolejos-fernández-4616238.jpg" alt="Automotive colors"> -->
// 					<!-- <img class="container-img" id="mobile-img" src="./images/information-guest-lecture-mobile.jpg" alt="Oliver Sack"> -->
// 				</div>
// 				<div class="container-text flex-container">
// 					<h4>All products</h4>
// 					<p id="text">Check al selection of products.</p>
// 					<a id="readmore" href="#">View items</a>
// 				</div>
// 			</div>
// 		</div>
// 	</div>

// 	</main>
// </body>
// ';

