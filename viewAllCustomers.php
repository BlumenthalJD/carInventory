<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Viewing All Customers</title>
</head>

<body>
<h1>CSCI 211- Joel Blumenthal
</h1>
<p>
  <h2>Viewing All Customers</h2>
</p>

<?php
$con = mysql_connect("hostname","username","password");
if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

mysql_select_db("database", $con);

$result = mysql_query ("SELECT * FROM Customer");

echo "<table>
<tr>
<th>CustID</th>
<th>firstName</th>
<th>lastName</th>
<th>street</th>
<th>city</th>
<th>state</th>
<th>zip</th>
<th>areaCode</th>
<th>phoneNumber</th>
</tr>";

while ($row = mysql_fetch_array ($result))
	{
		echo "<tr>";
		echo "<td>" . $row['custID'] . "</td>";
		echo "<td>" . $row['firstName'] . "</td>";
		echo "<td>" . $row['lastName'] . "</td>";
		echo "<td>" . $row['street'] . "</td>";
		echo "<td>" . $row['city'] . "</td>";
		echo "<td>" . $row['state'] . "</td>";
		echo "<td>" . $row['zip'] . "</td>";
		echo "<td>" . $row['areaCode'] . "</td>";
		echo "<td>" . $row['phoneNumber'] . "</td>";
		echo "</tr>\n";
	}
	
echo "</table>";

mysql_close ($con);
?>
	
</body>
</html>