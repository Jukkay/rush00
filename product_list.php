<?php

function get_product_list($categories) {

	if (file_exists('products.db')) {
		$db = unserialize(file_get_contents('products.db'));
		foreach ($db as $product) {
			echo 'product categories: ' . PHP_EOL;
			print_r($product['categories']);
			if (count(array_intersect($product['categories'], $categories))) {
				echo 'match found' . PHP_EOL;
				echo '
				<div class="item flex-container">
				<div>
					<img class="item-img" src="' . $product['picture'] . '" alt="Picture">
				</div>
				<div class="item-content">
					<h4 class="item_name" id="marged">' . $product['name'] . '</h4>
					<p class="hide" id="text">' . $product['price'] . '</p>
				</div>
			</div>';
			}
		}
	}
}

function list_all() {

	if (file_exists('products.db')) {
		$db = unserialize(file_get_contents('products.db'));
		foreach ($db as $product) {
			echo '
			<div class="item flex-container">
			<div>
				<img class="item-img" src="' . $product['picture'] . '" alt="Picture">
			</div>
			<div class="item-content">
				<h4 class="item_name" id="marged">' . $product['name'] . '</h4>
				<p class="hide" id="text">' . $product['price'] . '</p>
			</div>
			</div>';
		}
	}
}
// echo '
// <html>
// <head>
// 	<meta charset="UTF-8">
// 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
// 	<title>Hive Paint Factory</title>
// 	<link href="static/style.css" rel="stylesheet" type="text/css">
// </head>
// <body>';
if (isset($_POST['categories'])) {
	get_product_list($_POST['categories']);
}
else
	list_all();
echo '</body></html>';
