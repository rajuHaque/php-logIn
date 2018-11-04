<?php

function db_connection(){
	
	###########################################################
	############# Database Information ########################

			$db_host= 'localhost';
			$db_user= 'root';
			$db_pass= '';
			$db_name= 'ussl_pwdd_01';
			
	#################### Set the Value Only ####################
	############################################################

		$connt= mysqli_connect($db_host,$db_user,$db_pass,$db_name);
		
		if(!$connt){
			die('Connection Error: '.mysqli_connect_error($connt));
		}else{
			echo 'Database Connect Successfully';
			//header('refresh: 10; url= http://localhost/us_software_batch_01/5.php/class-20/');
			return $connt;
		}
		
		mysqli_close($connt);

}
	
	
	
	
	
	
	
	
	
?>