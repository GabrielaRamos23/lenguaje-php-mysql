<?php
include 'conexion/index.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	/*
		$var1 = 12;
		echo $var1;

		$var2 = "hola";
		echo $var2;

		$var3 = 14.12;
		echo $var3;

		$var4 = $var1.$var2;
		echo $var4;

		$var5 = $var4;
		echo $var5;
		
		*/
		$var = 1;
		switch ($var) {
			case '1':
				# code...
				echo "uno";
				break;
			case '2':
				echo "dos";
				break;
			case '3':
				echo "tres";
				break;
			case'4':
				echo "cuatro";
				break;
			case '5':
				echo "cinco";
				break;
			default :
				echo "Hello";
				break;
		}
		
			?>
	
</body>
</html>