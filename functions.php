<?php

///// Database Access Connectivity ////
require_once('db_connection.php');

		
	function allUserData(){
		$db_connt = db_connection();
		//// Check with Database ////
		$sql_query="SELECT * FROM registration";
		
		$result = mysqli_query($db_connt,$sql_query);
		
		return $result;
		
			
	}///allUserData///
		



?>