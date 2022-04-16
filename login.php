<?php

include("auth.php");
session_start();
if (!auth($_POST["login"], $_POST["passwd"])) {
	$_SESSION["loggued_on_user"] = "";
	echo "ERROR\n";
	return;
}
else {
$_SESSION["loggued_on_user"] = $_POST["login"];
$array = unserialize(file_get_contents('./private/passwd'));
foreach ($array as $user) {
	if ($user['login'] == $_SESSION["loggued_on_user"])
		$_SESSION['admin'] = $user['admin'];
}
echo '
<html>
<head>
	<title>Document</title>
</head>
<body>
</body>
</html>';
}

