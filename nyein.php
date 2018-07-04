<?php
include("confs/config.php");
$name = $_POST['name'];
$type = $_POST['type'];
$address=$_POST['address'];
$ph=$_POST['ph'];
$sql = "INSERT INTO companies VALUES ('$name', '$type','$address','$ph')";
mysqli_query($conn, $sql);
?>
<a href="index.php" class="new">Home</a>