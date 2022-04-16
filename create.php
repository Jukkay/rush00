<?php
session_start();
if ($_POST['submit'] != 'OK' || $_POST['login'] == "" || $_POST['passwd'] == "") {
	echo "ERROR\n";
	return;
}
if (!(file_exists("private/")))
	mkdir("private");
$filename = 'private/passwd';
if (file_exists($filename)) {
	$array = unserialize(file_get_contents($filename));
	foreach ($array as $user) {
		if ($user['login'] == $_POST['login']) {
			echo "ERROR\n";
			return;
		}
	}
}
if (isset($_POST['admin']) && $_SESSION['admin'] != true && $_POST['admin'] == true)
	$_POST['admin'] == false;
$array[] = array('login' => $_POST['login'],
				 'passwd' => hash("whirlpool", $_POST['passwd']),
				 'admin' => $_POST['admin']);
file_put_contents($filename, serialize($array));
echo "OK\n";
include('logout.php');
header("Location: index.html");
?>
