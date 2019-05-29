<?php
	session_start();
?>
<?php
	if(!isset($_SESSION["servername"]) && !isset($_SESSION["username"])
		&& !isset($_SESSION["password"]) && !isset($_SESSION["dbName"])){
		echo "Session is not set";
	}else {
		$servername = $_SESSION["servername"];
		$username = $_SESSION["username"];
		$password = $_SESSION["password"];
		$tablename = $_POST["tablename"];
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $databaseName);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$sql = "INSERT INTO ".$username.".".$tablename." (firstname, lastname, email)
		VALUES ('$firstname', '$lastname', '$email')";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>
