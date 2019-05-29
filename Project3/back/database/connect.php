<!DOCTYPE html>
<?php
	session_start();
?>

<?php
	$servername = $_GET["servername"];
	$username = $_GET["username"];
	$password = $_GET["password"];

	$conn = new mysqli($servername, $username, $password, $username,3306);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	else {
		echo "<p>". "Connected successfully"."</p>";

		$_SESSION["servername"] = $servername;
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		$conn->close();
	}

?>
