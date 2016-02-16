<html>
	<head>
		<title>Save New Sale</title>
	</head>
	<body>
		<h1>Saving New Sale</h1>
		
		<?php
			$invoice=$_GET['invoiceInput'];
			$saleDate=$_GET['saleDateInput'];
			$salePrice=$_GET['salePriceInput'];
			$vin=$_GET['vinInput'];
			$custID=$_GET['custIDInput'];
			
			$con = mysql_connect("hostname","username","password");
			if(!$con)
			{
				die('Could not connect: '.mysql_error());
			}
			
			mysql_select_db("database", $con);
			
			$query="INSERT INTO database.Sale (invoiceNo, saleDate, salePrice, vin, custID) VALUES ('$invoice', '$saleDate','$salePrice', '$vin', '$custID')";
			
			$result=mysql_query($query);
			if(!$result)
			{
				die ('Invalid Query: '.mysql_error());
			}
			
			echo "Thanks for adding, $invoice";
			?>
			
			<a href="index.html">Home</a>
	</body>
</html>