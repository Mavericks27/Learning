<?php 

	
	session_start();


	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ=11W4y57OPTFmhCaXp0M1M7uH2=nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="img/image.jpg" class="brand_logo" alt="logo">
				</div>
			</div>
			<div class="d-flex justify-content-center form_container">
				<form>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<!-- <span class="input-group-text">
								<i class="fas fa-user"></i>
							</span> -->
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" required placeholder="Username/Email">
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<!-- <span class="input-group-text">
								<i class="fas fa-key"></i>
							</span> -->
						</div>
						<input type="Password" name="password" id="password" class="form-control input_pass" required placeholder="Password">
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">Remember Me</label>
						</div>
					</div> 
				
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="button" name="button" id="login" class="btn login-btn btn-primary btn-block">Login</button>
			</div>
			</form>
			<div class="md-4">
				<div class="d-flex justify-content-center links">
					Don`t have an Account?<a href="regi.php" class="ml-2">Sign Up</a>  
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot Your Password</a>
				</div>
			</div>
		</div>
	</div>
</div>




<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
<script>
	
	$(function(){

		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){

				var username = $('#username').var();
				var password = $('#password').var();
			}

			e.preventDefault();

			$.ajax({

				type: 'post',
				url: 'jslogin.php',
				data: {username: username, password: password},
				success: function(data){

					if($.trim(data)=='1'){
						setTimeout(' window.location.href = "index.php"', 2000);
					}
				},
				error: function(data){
					alert('there where errors while doing the operation.');

				}
			});

		});
	}):
</script>
</body>
</html>