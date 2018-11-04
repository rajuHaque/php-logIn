<?php

if(isset($_POST['signIn'])){
	//print_r($_POST);
	
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $remember = $_POST['remember']; 
	
	
	######## Errors #############
	$error = array();
	
	///// Email Validation ///
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$error[]= 'We need a valid email';
	}
	
	///// Password validation ///
	if(strlen($pass) <4 || strlen($pass) > 50){
		$error[]= 'Password will be in 4 - 50 Charecters';
	}
	
	########## Validation Confirmation ##############
	if(!empty($error)){
		return '<script> alert("Email / Password is Invalid");</script>';
	}else{
		///// Database Access Connectivity ////
		require_once('db_connection.php');
		//// db connection ////
		$db_connt = db_connection();
		
		//// Check with Database ////
		$sql_query="SELECT name,email,pass FROM registration WHERE email ='$email' AND pass = '$pass'";
		
		$result = mysqli_query($db_connt,$sql_query);
		
		if(!$result){
			echo 'Check Error'.mysqli_error($db_connt);
			echo '<script> alert("Insert Error: '.mysqli_error($db_connt).'");</script>';
		}else{
			
			//// Active Login ////
			if(mysqli_num_rows($result) == 0){
				
				echo '<script> alert("Email / Password is Invalid");</script>';
			}else{
				
				///print_r($result);
				///echo '<pre>';
				///print_r(mysqli_fetch_assoc($result));
				while($detail = mysqli_fetch_assoc($result)){
					//print_r($detail);
					$name = $detail['name']; 
				}
				
				/////echo '<script> alert("Sign In Successfully");</script>';
				$_SESSION['loginActive'] = 1;
				$_SESSION['email'] =$email;
				$_SESSION['user_name']=$name;
				header('Location: admin/index.php');
				
			}
		}
	}
	
	
	
	
	
	
   
}
	
?>