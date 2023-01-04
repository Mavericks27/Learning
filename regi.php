<?php 
require_once('config.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div>
	<?php 
	



	 ?>
</div>


<div>
	<form>
		<div class="container h-100">
			
			<div class="row justify-content-center">
				<div class="col-md-6">
					<h1 class="row justify-content-center">Registration</h1>
					<p class="row justify-content-center">Fill up the Form with correct Values.</p>
					<hr class="mb-3">
					<div class="d-flex justify-content-center form_container">
						<form>
							<div class="form-row">
								<div class="form-group">
									<label for="firstname"><b>First Name</b></label>
								    <input class="form-control" id="firstname" type="text" name="firstname" required>
								</div>
								<div class="form-group">
									<label for="lastname"><b>Last Name</b></label>
								    <input class="form-control" id="lastname" type="text" name="lastname" required>
								</div>
								<div class="form-group">
									<label for="email"><b>Email Address</b></label>
								    <input class="form-control" id="email" type="text" name="email" required>
								</div>
								<div class="form-group">
									<label for="phonenumber"><b>Phone Number</b></label>
								<input class="form-control" id="phonenumber" type="text" name="phonenumber" required>
								</div>
								<div class="form-group">
									<label for="password"><b>Password</b></label>
								    <input class="form-control" id="password" type="text" name="password" required>
								</div>
								<hr class="mb-3">
								<center><input class="btn btn-primary"type="submit" id="register" name="create" value="Sign Up">
								</center>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(){

			
			var valid = this.form.checkValidity();

			if(valid){


				var firstname 	  = $('#firstname').val();
				var lastname  	  = $('#lastname').val();
				var email     	  = $('#email').val();
				var phonenumber	  = $('#phonenumber').val();
				var password  	  = $('#password').val();




				e.preventDefault();

				$.ajax({
					type: 'post',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){

						swal.fire({
							'title': 'Successful',
							'text': data,
							'type': 'Success'
							})
					}
					

					error: function(data){

						swal.fire({
							'title': 'Errors',
							'text': 'There wehere errors while saving the data',
							'type': 'error'
							})

					}

				})



			
			}else{
			
			}


			


			
			

		})
		
	})
</script>

</body>
</html>


