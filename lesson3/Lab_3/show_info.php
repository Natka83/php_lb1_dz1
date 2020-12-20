<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Inform</title>
</head>
<body>
	<?php 
		$fileStr = file_get_contents("user.txt");
		echo $fileStr;
	?>
</body>
</html>

