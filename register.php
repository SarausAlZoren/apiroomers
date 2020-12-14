<?php
require "connect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $response = array();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $contactnumber = $_POST['contactnumber'];
  
  
    //query to check if email is taken or not
    $sql = "SELECT email FROM users WHERE email = '".$email."'";

	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);

    }
    if ($count == 1) {
		echo json_encode("Error");
	}else{
        //insert query 
        $insert = "INSERT INTO users(email,password,lastname,firstname,contactnumber) VALUES ('$email','$password','$lastname','$firstname','$contactnumber')";
		$query = mysqli_query($con,$insert);
		if ($query) {
			echo json_encode("Success");
		}
	}
   


?>


