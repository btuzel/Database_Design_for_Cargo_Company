<?php

include 'connect.php';

$empl_first_name = $_POST["empl_first_name"];
$empl_mid_name = $_POST["empl_mid_name"];
$empl_last_name = $_POST["empl_last_name"];
$empl_user_name = $_POST["empl_user_name"];
$empl_email = $_POST["empl_email"];
$empl_password = $_POST["empl_password"];
$empl_addr_street = $_POST["empl_addr_street"];
$empl_addr_district = $_POST["empl_addr_district"];
$empl_addr_city = $_POST["empl_addr_city"];
$empl_addr_country = $_POST["empl_addr_country"];
$empl_phone_number = $_POST["empl_phone_number"];

$sql = "insert into employee values('$empl_password','$empl_user_name', '$empl_email', '$empl_phone_number', NULL,'$empl_first_name', '$empl_mid_name', '$empl_last_name', '$empl_addr_street', '$empl_addr_district', '$empl_addr_city','$empl_addr_country');";

if(mysqli_query($con,$sql)){

  echo "SUCESS <hr> ";
	require "admin.php";

}else{

  echo "FAIL <hr> ";
  echo("Error description: " . mysqli_error($con));

	require "admin.php";
}

?>
