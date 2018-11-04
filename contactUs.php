
<pre>
<?php
	print_r($_GET);
	
	$name = $_GET['name'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
	$website = $_GET['website'];
	$description = $_GET['description'];
	
	
	//// mail() function for email...
	
	$to = 'manikbd.888@gmail.com';
	$sub = 'okayama website contactus';
	$msg = $description."\r\n";
	$msg .= $name."\r\n";
	$msg .= $email."\r\n";
	$msg .= $phone."\r\n";
	$msg .= $website."\r\n";
	
	$sender ='From:'.$email;
	
	$sendmail= mail($to,$sub,$msg,$sender);
	
	if(!$sendmail){
		echo 'Hay Hay email to jay nai..';
	}else{
		echo 'Hurray amer email gese...';
	}
	
?>
</pre>