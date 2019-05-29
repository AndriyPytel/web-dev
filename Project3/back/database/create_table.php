<?php
	session_start();
?>
<?php
	if(!isset($_SESSION["servername"]) && !isset($_SESSION["username"])
		&& !isset($_SESSION["password"]) && !isset($_SESSION["tablename"])){
			echo "Session is not set";
	}else {
	
		$servername = $_SESSION["servername"]; // localhost
		$username = $_SESSION["username"]; // root
		$password = $_SESSION["password"];  // root
		$tableName = $_POST["tablename"];
		// Create connection
		$conn = new mysqli($servername, $username, $password, $username,3306);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		else {
			echo "<p>". "Connected successfully"."</p>";
		}
		// sql to create table
		$sql = "CREATE TABLE ".$tableName." (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
		)";

		if ($conn->query($sql)) {
			echo "Table ".$tableName." created successfully";
		} else {
			echo "Error creating table: " . $conn->error;
		}
		$conn->close();

	}
?>
