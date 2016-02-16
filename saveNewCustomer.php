<html>
	<head>
		<title>Save New Customer</title>
	</head>
	<body>
		<h1>Saving New Customer</h1>
		
		<?php
			$custID=$_GET['idInput'];
			$firstName=$_GET['firstInput'];
			$lastName=$_GET['lastInput'];
			$street=$_GET['streetInput'];
			$city=$_GET['cityInput'];
			$state=$_GET['stateInput'];
			$zip=$_GET['zipInput'];
			$areaCode=$_GET['areaCodeInput'];
			$phoneNumber=$_GET['phoneNumberInput'];
			
			$con = mysql_connect("hostname","username","password");
			if(!$con)
			{
				die('Could not connect: '.mysql_error());
			}
			
			mysql_select_db("database", $con);
			
			$query="INSERT INTO database.Customer (custID, firstName, lastName, street, city, state, zip, areaCode, phoneNumber) VALUES ('$custID', '$firstName','$lastName', '$street', '$city', '$state', '$zip', '$areaCode', '$phoneNumber')";
			
			$result=mysql_query($query);
			if(!$result)
			{
				die ('Invalid Query: '.mysql_error());
			}
			
			echo "Thanks for adding, $firstName $lastName";
			?>
			
			<a href="index.html">Home</a>
	</body>
</html>
