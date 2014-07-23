<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="<? echo base_url();?>assests/bootstrap/css/reset.css">
	<link rel="stylesheet" href="<? echo base_url();?>assests/bootstrap/css/animate.css">
	<link rel="stylesheet" href="<? echo base_url();?>assests/bootstrap/css/styles.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
    	<p align="center" style="font-weight:bold; font-size:18px;"> المصرية للخدمات الطبية </p>
	
	<div id="container">

	
		<form method="post" action="<? echo base_url()?>index.php/admin/check/">
		
		<label for="name">Username:</label>
		
		<input type="name" id="name" name="name">
		
		<label for="username">Password:</label>
		
		<p><a href="#">Forgot your password?</a>
		
		<input type="password" id="pass" name="pass">
		
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	