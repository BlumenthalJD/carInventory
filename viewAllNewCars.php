<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Viewing All New Cars</title>
</head>

<body>
<h1>CSCI 211- Joel Blumenthal
</h1>
<p>
  <h2>Viewing All New Cars</h2>
</p>

<?php
$con = mysql_connect("hostname","username","password");
if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

mysql_select_db("database", $con);

$result = mysql_query ("SELECT * FROM NewCar");

echo "<table>
<tr>
<th>vin</th>
<th>make</th>
<th>model</th>
<th>cylinders</th>
<th>color</th>
<th>doors</th>
<th>bookValue</th>
</tr>";

while ($row = mysql_fetch_array ($result))
	{
		echo "<tr>";
		echo "<td>" . $row['vin'] . "</td>";
		echo "<td>" . $row['make'] . "</td>";
		echo "<td>" . $row['model'] . "</td>";
		echo "<td>" . $row['cylinders'] . "</td>";
		echo "<td>" . $row['color'] . "</td>";
		echo "<td>" . $row['doors'] . "</td>";
		echo "<td>" . $row['bookValue'] . "</td>";
		echo "</tr>\n";
	}
	
echo "</table>";

mysql_close ($con);
?>
	
</body>
</html>