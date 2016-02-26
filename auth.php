<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// these are the creds
	$authuser = 'admin';
	$authpass = 'admin';

	// for posted data 
	$username = null;
	$password = null;

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if ($username == $authuser && $password == $authpass) {
            $_SESSION["authenticated"] = 'true';
        } else {
            header("Location: ".$_SERVER['PHP_SELF']);
        }
    } else {
        header("Location: ".$_SERVER['PHP_SELF']);
    }
}

if (empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') { 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Login</title>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h1>Login!</h1>
					<form id="login" method="post">
					  	<div class="form-group">
						    <label for="username">Username</label>
						    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
				  		</div>
				  		<div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
					  	</div>
					  	<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

<?php 

exit();

} 

?>