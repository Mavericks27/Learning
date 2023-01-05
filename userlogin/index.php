<?php 

	
	session_start();


	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}
?>


<p>Welcome To Index</p>

<a href="index,php?logout=true">Logout</a>