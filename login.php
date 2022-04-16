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
echo '
<html>
<head>
	<title>Document</title>
</head>
<body>
<iframe src="chat.php" height="550px" width="100%" frameborder="0"></iframe>
<iframe src="speak.php" height="50px" width="100%" frameborder="0"></iframe>
</body>
</html>';
}

