<?php
	require_once __DIR__.'/dbcontroller.class.php';
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php

if (isset($_POST['registration'])){
	$fname = stripslashes($_POST['first_name']);
	$sname = stripslashes($_POST['last_name']);
	$email = stripslashes($_POST['email']);
	$sid = stripslashes($_POST['student/staff_id']);
	$major = stripslashes($_POST['major']);
	$password1 = stripslashes($_POST['password1']);
	$password2 = stripslashes($_POST['password2']);
	$jdate = date("Y-m-d H:i:s");
	$check = "SELECT * FROM `users` WHERE `email` = '$email'";
	
	$db_request = new DBController();
	$query = "INSERT INTO users (fname, sname, sid, email, major, jdate, password) VALUES ('Brian', 'Test', '123', 'brian@gmail.com',
	'comp', '1970-01-01 00:00:01.000000', 'testword')";
	$db_request->insertQuery($query);*/
}
?>
<?php
if (!isset($_POST['registration']){?>
	<div class="form">
	<h1>Registration</h1>
	<form name="registration" action="" method="post">
	<input type="text" name="first_name" placeholder="First Name" required />
	<input type="text" name="last_name" placeholder="Last Name" required />
	<input type="email" name="email" placeholder="Email" required />
	<input type="text" name="student/staff_id" placeholder="Student/Staff ID" required />
	<input type="text" name="major" placeholder="Major Subject" required />
	<input type="password" name="password1" placeholder="Password" required />
	<input type="password" name="password2" placeholder="Please re-enter your password" required />
	<input type="submit" name="submit" value="Register" />
	</form>
</div><?php } ?>

</body>
</html>