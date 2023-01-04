<?php 
require_once('config.php');

 ?>


<?php 


if(isset($_POST)){
		$firstname   		= $_POST['firstname'];
		$lastname    		= $_POST['lastname'];
		$email       		= $_POST['email'];
		$phonenumber       	= $_POST['phonenumber'];
		$password			= sha1($_POST['password']);


		$sql = "INSERT INTO users (firstname,lastname,email,phonenumber,password) VALUES('$firstname','$lastname','$email','$phonenumber','$password')";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsret->execute([$firstname,$lastname,$email,$phonenumber,$password]);
		if($result){
			echo 'Successfully Saved.';
		}else{
			echo 'There where errors while saving the data.';
		}
	}else{
		echo 'No Data';
	}


 ?>