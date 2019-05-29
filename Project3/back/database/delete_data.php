
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
			$id = $_POST["id_record"];
			$tablename = $_POST["tablename"];
			// sql to delete a record
			$sql = "DELETE FROM ".$username.".".$tablename." WHERE id='$id'";
			if ($conn->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
			}
			$conn->close();

		}
?>
