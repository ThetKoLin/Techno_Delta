<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title></title>
</head>
<body>
	<h2>Companies List</h2>
	<table>
		<tr>
			<th>CompanyName</th>
			<th>CompanyType</th>
			<th>Address</th>
			<th>Phone no</th>
		</tr>
<?php
include("confs/config.php");
$result = mysqli_query($conn, "SELECT * FROM companies");
?>
<?php while($row = mysqli_fetch_assoc($result)): ?>
<?php	
$name=$row["CompanyName"];
$type=$row["CompanyType"];
$address=$row["Address"];
$ph=$row["PhoneNo"];
echo "<tr>
		<td>$name</td>
		<td>$type</td>
		<td>$address</td>
		<td>$ph</td>
		</tr>";
?>
<br>
<?php endwhile; ?>
</table>
<a href="index.php" class="new">Home</a>
</body>
</html>