<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/stylelogin.css">
</head>
<body>
	<div class="container-fluid konten">
		
		<div class="row mt-5">
			<div class="col-4 offset-4 pb-5 pl-5 pr-5 pt-2 pb-2">
				<div class="box-login pl-3 pr-3 pt-3 pb-5">
					<form action="functions/loginfunction.php" method="post">
					  <div class="form-group">
					  	<h2 class="text-center mt-4">LOGIN</h2>
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">	
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
					  </div>
					  <button type="submit" class="btn btn-primary btn-block">Login</button>
					</form>
				</div>
			</div>
		</div>	
	





	</div><!-- </div> END OF CONTAINER  -->

<script src="bootstrap.js"></script>	
</body>
</html>