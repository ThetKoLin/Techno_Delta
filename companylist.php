<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Companies List</h1>
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
echo "CompanyName-$name,CompanyType-$type,Address-$address,Phone-$ph";
?>
<br>
<?php endwhile; ?>
<a href="index.php" class="new">Home</a>
</body>
</html>