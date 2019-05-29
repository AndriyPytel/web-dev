
<?php
	session_start();
?>

<?php
	if(!isset($_SESSION["servername"]) && !isset($_SESSION["username"])
		&& !isset($_SESSION["password"]) && !isset($_SESSION["tablename"])){
		echo "Session is not set";
	}else {
	$servername = $_SESSION["servername"];
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $username);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$newName = $_POST["new_value"];
	$id = $_POST["id_record"];
	$tablename = $_POST["tablename"];

	$sql = "UPDATE ".$username.".".$tablename." SET firstname='$newName' WHERE id=".$id.";";
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}
	$conn->close();
	}
?>
