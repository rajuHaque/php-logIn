<?php 
	session_start();
	
	if($_SESSION['loginActive'] != 1){
		header('Location: ../index.php');
	}
	
	if(isset($_GET['signOut'])){
		///echo $_GET['signOut'];
		require_once('../signOut.php');
	}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <input class="form-control form-control-dark w-75" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link"><?php echo $_SESSION['user_name']; ?></a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link"  href="?signOut=signOut">Sign out</a>
        </li>
      </ul>
    </nav>
	
    <div class="container-fluid">
      <div class="row">
	<!-- ====== Dashboard Panel ============ -->
		<?php include('dashboard.php'); ?>
	
	<!-- ====== Main Content ============ -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		
		
	  
	  
	  
	  
	  
	  