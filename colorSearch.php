<!DOCTYPE html>
<html lang="en">
<head>
   <title>CSCI211 - Searching Bowlers</title>
   <meta charset="UTF-8">
</head>
<body>
<h2>Viewing Search Results</h2>

<?php
$colorVar = $_GET['color'];

$con = mysql_connect("hostname","username","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("database", $con);

$query = "SELECT firstName, lastName, make, model, salePrice, color FROM Customer, NewCar, Sale WHERE color ='" . "$colorVar' AND Sale.vin=NewCar.vin AND Sale.custID=Customer.custID";

$result = mysql_query($query);

echo "<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Make</th>
<th>Model</th>
<th>Sale Price</th>
<th>Color</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['firstName'] . "</td>";
  echo "<td>" . $row['lastName'] . "</td>";
  echo "<td>" . $row['make'] . "</td>";
  echo "<td>" . $row['model'] . "</td>";
  echo "<td>" . $row['salePrice'] . "</td>";
  echo "<td>" . $row['color'] . "</td>";
  echo "</tr>\n";
  }
echo "</table>";

mysql_close($con);
?>
</body>
</html>