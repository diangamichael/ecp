<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login | ecp</title>
<meta name="description" content="The HTML5 Herald">
<meta name="author" content="SitePoint">
<meta content="ecp" name="author" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
<link href="assets/css/custom.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="medium-6 medium-centered">

<div id="login" >
<fieldset name="login"><h2> Login </h2>
<form class="signin" method="POST">
<div class="top-margin">
<label class="center">Username <span class="text-danger">*</span></label><br>
<input type="text" class="form-control" name="username" placeholder="Enter Username" required >
</div>
<div class="top-margin">
<label class="center">Password <span class="text-danger">*</span></label><br>
<input type="password" class="form-control" name="password" placeholder="Enter Password" required >
</div><br>
<div class="col-lg-8">
<b><a href="#recover" data-toggle="modal">Forgot password?</a></b>
</div>
<div class="col-sm-6">
 <button type="submit" name="login"  class="btn btn-success ">Login</button>
 <div class="#">
    New Member? <a href="register.php">Register Now</a> 
  </div>
  </div>
</form></fieldset>
</div>
</div>
</body>
</html>