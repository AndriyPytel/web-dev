
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
	
	$tablename = $_POST["tablename"];
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $username);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$firstname = $_POST["firstname"];
	if($firstname == "") {
		$sql = "SELECT * FROM ".$username.".".$tablename;
	}else{
		$sql = "SELECT * FROM ".$username.".".$tablename
		."WHERE firstname = '$firstname'";
	}
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	}
?>
