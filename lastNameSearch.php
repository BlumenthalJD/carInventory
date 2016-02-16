<!DOCTYPE html>
<html lang="en">
<head>
   <title>CSCI211 - Searching Last Names</title>
   <meta charset="UTF-8">
</head>
<body>
<h2>Viewing Search Results</h2>

<?php
$lastNameVar = $_GET['lastName'];

$con = mysql_connect("hostname","username","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("database", $con);

$query = "SELECT * FROM Customer WHERE lastName ='$lastNameVar'";

$result = mysql_query($query);

echo "<table>
<tr>
<th>Customer ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Street</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Area Code</th>
<th>Phone Number</th>
</tr>";

while($row = mysql_fetch_array($result))
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

mysql_close($con);
?>
</body>
</html>