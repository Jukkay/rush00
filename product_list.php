<?php

function get_product_list($categories) {

	if (file_exists('products.db')) {
		$db = unserialize(file_get_contents('products.db'));
		foreach ($db as $product) {
			if (in_array($categories, $product['categories'])) {
				echo '
				<div class="product-container item">
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
				<div>
					<form action="basket.php" method="post">
						<input type="hidden" id="id" name="id" value="' . $product['id'] . '">
						<label for="quantity">Quantity:</label>
						<input type="number" id="quantity" name="quantity" min="1" max="99">
						<button name="action" value="add" type="submit">Add to basket</button>
					</form>
				</div>
			</div>
			</div>';
		}
	}
}

echo '
	<div class="product-list">';
if (isset($_GET['categories'])) {
	get_product_list($_GET['categories']);
}
else
	list_all();
echo '
	</div>';
