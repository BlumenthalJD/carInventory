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

$result = mysql_query ("SELECT * FROM Sale");

echo "<table>
<tr>
<th>invoiceNo</th>
<th>saleDate</th>
<th>salePrice</th>
<th>vin</th>
<th>custID</th>
</tr>";

while ($row = mysql_fetch_array ($result))
	{
		echo "<tr>";
		echo "<td>" . $row['invoiceNo'] . "</td>";
		echo "<td>" . $row['saleDate'] . "</td>";
		echo "<td>" . $row['salePrice'] . "</td>";
		echo "<td>" . $row['vin'] . "</td>";
		echo "<td>" . $row['custID'] . "</td>";
		echo "</tr>\n";
	}
	
echo "</table>";

mysql_close ($con);
?>
	
</body>
</html>