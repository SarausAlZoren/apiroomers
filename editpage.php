<?php 

	include 'connect.php';

	$userid = $_POST['userid'];
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	$contactnumber = $_POST['contactnumber'];
  

	$con->query("UPDATE users SET lastname = '".$lastname."', firstname = '".$firstname."', email = '".$email."', password = '".$password."',contactnumber = '".$contactnumber."' WHERE userid = '".$userid."'");


?>