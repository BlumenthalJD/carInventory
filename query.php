<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Viewing All First Names, Last Names, Colors</title>
</head>

<body>
<h1>CSCI 211- Joel Blumenthal
</h1>
<p>
  <h2>Viewing All First Names, Last Names, Colors</h2>
</p>

<?php
$con = mysql_connect("hostname","username","password");
if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

mysql_select_db("database", $con);

$result = mysql_query ("SELECT firstName, lastName, color FROM Customer, NewCar, Sale WHERE Sale.vin=NewCar.vin AND Sale.custID=Customer.CustID");

echo "<table>
<tr>
<th>firstName</th>
<th>lastName</th>
<th>color</th>
</tr>";

while ($row = mysql_fetch_array ($result))
	{
		echo "<tr>";
		echo "<td>" . $row['firstName'] . "</td>";
		echo "<td>" . $row['lastName'] . "</td>";
		echo "<td>" . $row['color'] . "</td>";
		echo "</tr>\n";
	}
	
echo "</table>";


mysql_close ($con);
?>
	
</body>
</html>