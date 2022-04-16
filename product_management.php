<?php
session_start();
function add_product($array) {
	$id = 0;
	if (file_exists('products.db')) {
		$db = unserialize(file_get_contents('products.db'));
		foreach ($db as $product) {
			if ($product['id'] > $id)
				$id = $product['id'];
		}
	}
	$id++;
	$array = array('id' => $id) + $array;
	$db[] = $array;
	file_put_contents('products.db', serialize($db));
}
function remove_product($id) {
	if (file_exists('products.db')) {
		$db = unserialize(file_get_contents('products.db'));
		foreach ($db as &$product) {
			if ($product['id'] == $id) {
				unlink($product['picture']);
				unset($product);
			}
		}
	}
	file_put_contents('products.db', serialize($db));
}
function modify_product($id) {
	if (file_exists('products.db')) {
		$db = unserialize(file_get_contents('products.db'));
		foreach ($db as &$product) {
			if ($product['id'] == $id) {
				if (isset($_POST['categories']))
					$product['categories'] = $_POST['categories'];
				if (isset($_POST['name']))
					$product['name'] = $_POST['name'];
				if (isset($_POST['description']))
					$product['description'] = $_POST['description'];
				if (isset($_POST['price']))
					$product['price'] = $_POST['price'];
				if (isset($_POST['picture'])) {
					unlink($product['picture']);
					$product['picture'] = $_POST['picture'];
				}
			}
		}
	}
	file_put_contents('products.db', serialize($db));
}

if ($_SESSION['admin'] == false) {
	header('HTTP/1.0 401 Unauthorized');
	return;
}
if ($_POST['action'] == 'remove') {
	if (!isset($_POST['id'])) {
		echo "Missing product id" . PHP_EOL;
		return;
	}
	remove_product($_POST['id']);
	return;
}
if ($_POST['action'] == 'add') {
	if (!isset($_POST['categories']) || !isset($_POST['name']) || !isset($_POST['description']) || !isset($_POST['price'])) {
		echo "Missing information" . PHP_EOL;
		return;
	}
	add_product(array($_POST['categories'], $_POST['name'], $_POST['description'], $_POST['price'], $_POST['picture']));
}
if ($_POST['action'] == 'modify') {
	if (!isset($_POST['id'])) {
		echo "Missing product id" . PHP_EOL;
		return;
	}
	modify_product($_POST['id']);
}
