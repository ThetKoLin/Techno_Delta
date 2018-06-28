<?php
include("confs/config.php");
$name = $_POST['search'];
$sql = "SELECT CompanyName CompanyType Address PhoneNo FROM companies WHERE CompanyName='$name'";
mysqli_query($conn, $sql);
header("location:companyDetail");
?>