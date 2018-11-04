<?php

####### Class ##############

////class sharif{ ///bad practice
////class SHARIF{ ///Good Practice
////class SHARIF_DETAILS{ ///Good Practice
////class Sharif_Details{ ///Bad Practice
class SharifDetails{ ///Professional Practice
	///property
	public $name = 'Md. Sharif Ullah Sarkar';
	protected $email = 'manikbd.888@gmail.com';
	private $password = 'hahahahhahah';
}

/// Object
$user = new SharifDetails;

var_dump($user);
echo '<br>';
echo $user->name;
echo '<br>';
//echo $user->email;
echo '<br>';
echo $user->password;














?>