<?php
include("confs/config.php");
$name = $_POST['search'];
$sql = "SELECT * FROM companies WHERE CompanyName='$name'";
$result=mysqli_query($conn, $sql);
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