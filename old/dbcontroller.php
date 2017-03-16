<?php
class DBController {
	private $host = "localhost";
	private $user = "group15";
	private $password = "powerade";
	private $database = "group15";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		if (!$conn) {
			echo "Unable to connect to database - " . date('H:i:s');
        }
		return $conn;
	}
	
	/*function runQuery($query) {
		$result = mysql_query($this->conn,$query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($this->conn,$query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
	
	function updateQuery($query) {
		$result = mysql_query($this->conn,$query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}*/
	
	function insertQuery($query) {
		if (mysqli_query($conn, $query)) {
			echo "New record created successfully";
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	
	/*function deleteQuery($query) {
		$result = mysql_query($this->conn,$query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}*/
}
?>