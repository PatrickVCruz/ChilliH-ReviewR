<?php
	require_once __DIR__.'/dbcontroller.class.php';
?>

<?php
	$host = "localhost";
	$user = "group15";
	$password = "powerade"; 
	$database = "group15";
	

	/*$conn = mysqli_connect($host,$user,$password,$database);
		if (!$conn) {
            $this->error_msg = "\r\n" . "Unable to connect to database - " . date('H:i:s');
        }*/
	$sql = "INSERT INTO users (fname, sname, sid, email, major, jdate, password) VALUES ('Brian', 'Test', '123', 'brian@gmail.com',
	'comp', '1970-01-01 00:00:01.000000', 'testword')";
	/*if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}*/

	mysqli_close($conn);
	
	$sql = "INSERT INTO users (fname, sname, sid, email, major, jdate, password) VALUES ('Brian', 'Test', '123', 'brian@gmail.com',
	'comp', '1970-01-01 00:00:01.000000', 'testword')";
	$test = new DBController();
	$test->insertQuery($sql);
?>