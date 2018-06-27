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
<ul>
<?php while($row = mysqli_fetch_assoc($result)): ?>
<li title="<?php echo $row['CompanyName'] ?>">
<?php echo $row['CompanyType'] ?>
<?php echo $row['Address']?>
<?php echo $row['PhoneNo']?>
</li>
<?php endwhile; ?>
</ul>
<a href="index.php" class="new">Home</a>

</body>
</html>