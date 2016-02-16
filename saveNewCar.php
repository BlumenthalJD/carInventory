<html>
	<head>
		<title>Save New Car</title>
	</head>
	<body>
		<h1>Saving New Car</h1>
		
		<?php
			$vin=$_GET['vinInput'];
			$make=$_GET['makeInput'];
			$model=$_GET['modelInput'];
			$cylinders=$_GET['cylindersInput'];
			$color=$_GET['colorInput'];
			$doors=$_GET['doorsInput'];
			$bookValue=$_GET['bookValueInput'];
			
			$con = mysql_connect("hostname","username","password");
			if(!$con)
			{
				die('Could not connect: '.mysql_error());
			}
			
			mysql_select_db("database", $con);
			
			$query="INSERT INTO database.NewCar (vin, make, model, cylinders, color, doors, bookValue) VALUES ('$vin', '$make','$model', '$cylinders', '$color', '$doors', '$bookValue')";
			
			$result=mysql_query($query);
			if(!$result)
			{
				die ('Invalid Query: '.mysql_error());
			}
			
			echo "Thanks for adding, $make $model";
			?>
			
			<a href="index.html">Home</a>
	</body>
</html>