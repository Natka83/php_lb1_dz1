
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="registration_form.php" method="POST">
			  <div class="form-group">
			    <label for="InputEmail">Email</label>
			    <input type="email" class="form-control"  placeholder="Enter email" name="email">
			
			  </div>
			  <div class="form-group">
			  	<label for="Login">Login</label>
			  	<input type="text" class="form-control"  placeholder="Enter login" name="login">
			  </div>
			  <div class="form-group">
			    <label for="InputPassword">Password</label>
			    <input type="password" class="form-control" id="InputPassword" placeholder="Enter password" name="password">
			  </div>
			  <button type="submit" class="btn btn-primary" name="accept">Submit</button>
			</form>	
		</div>
	</div>

</body>
</html>
<?php
	if (!empty($_POST)) {
		if (isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["password"])) 
		{
			$fileString=file_get_contents("user.txt");
			$pos=strstr($fileString, $_POST["login"]);
			if ($pos===false) {
				$userdata = "Login: ". $_POST["login"] . "; Email: " .$_POST["email"]. "; Password: ".$_POST["password"] ."\n";
				$file=fopen("user.txt", "a+");
				fwrite($file, $userdata);
				fclose($file);
			}
		}
	}

	$fd = fopen("user.txt", "r") or die("Невозможно открыть файл");
    $pageText = fread($fd, 25000);
	echo nl2br($pageText);
	

		// while(!feof($fd)){
    	// 	$str = htmlentities(fgets($fd));
    	// 	//$str = htmlentities(fread($fd, 400));
    	// 	echo $str."<br/>";
		// 	fclose($fd);
		// }		
 ?>
 