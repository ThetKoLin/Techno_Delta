<?php
include("confs/config.php");
$name = $_POST['name'];
$type = $_POST['type'];
$address=$_POST['address'];
$ph=$_POST['ph'];
$sql = "INSERT INTO companies (CompanyName,CompanyType,Address,PhoneNo) VALUES ('$name', '$type','$address','$ph')";
mysqli_query($conn, $sql);
header("location:companylist");
?>