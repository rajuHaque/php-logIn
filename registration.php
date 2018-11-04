<?php

if(isset($_POST['registration'])){
	//print_r($_POST);
	
	
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phoneNumber'];
    $addr = $_POST['address'];
    $blood = $_POST['blood'];
    $gender = $_POST['gender'] ;
    $cv = '';///$_FILE['cv'];
    $agree = 1; 
	
	########
	$error = array();
	
	///// Name validation ///
	if(empty($name) || strlen($name) <4 || strlen($name) > 50 or !preg_match('/[a-zA-Z]$/',$name)){
		$error[]= 'Name will be in Alphabetic Charecter with minimum 4 - 50 Letters';
	}
	
	///// Email Validation ///
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$error[]= 'We need a valid email';
	}
	
	///// Password validation ///
	if(strlen($pass) <4 || strlen($pass) > 50){
		$error[]= 'Password will be in 4 - 50 Charecters';
	}
	
	///// Phone Number validation ////
	if(strlen($phone) <11 || strlen($phone) > 14 or !preg_match('/[0-9+]$/',$phone)){
		$error[]= 'We Need Ex: 01683432790 or +8801683432790 this type number';
	}
	
	///// Address validation ///
	if(strlen($addr) <10 || strlen($addr) > 100 ){
		$error[]= 'Address will be in 10 - 100 Charecters';
	}
	///// Blood validation ///
	if($blood <1 || $blood >8){
		$error[]= 'Your Blood Group is Invalid';
	}
	
	///// Gender validation ///
	$check_gender=array('m','f');
	if(!in_array($gender,$check_gender)){
		$error[]= 'You are in None Gender';
	}
	
	
	
	if(!empty($error)){
		return $error;
	}else{
		///// Database Access Connectivity ////
		require_once('db_connection.php');
		//// db connection ////
		$db_connt = db_connection();

		$sql_query="INSERT INTO registration (name, email, pass, phone, addr, blood, gender, cv) VALUES ('$name', '$email', '$pass', '$phone', '$addr', '$blood', '$gender', '$cv');";
		
		$result = mysqli_query($db_connt,$sql_query);
		if(!$result){
			echo 'Insert Error'.mysqli_error($db_connt);
			echo '<script> alert("Insert Error: '.mysqli_error($db_connt).'");</script>';
		}else{
			
			echo '<script> alert("Registratered Successfully");</script>';
		}
	}
	
	
   
}
	
?>