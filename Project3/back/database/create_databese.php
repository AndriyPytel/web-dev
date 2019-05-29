<?php
	session_start();
?>
<?php
$databaseName = $_POST["name"];
if(!isset($_SESSION["servername"]) && !isset($_SESSION["username"]) && !isset($_SESSION["password"])){
	echo "Session is not set";
}else {
	$servername = $_SESSION["servername"]; // localhost
	$username = $_SESSION["username"]; // root
	$password = $_SESSION["password"];  // root
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// Create database

	$sql = "CREATE DATABASE ".$databaseName;

	if ($conn->query($sql) === TRUE) {
		echo "Database " . $databaseName . " created successfully";
	} else {
		echo "Error creating database: " . $conn->error;
	}
	$_SESSION["dbName"] = $databaseName;
	$conn->close();
}
?>
