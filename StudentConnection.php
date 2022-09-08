<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);


if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
$sql = " SELECT * FROM `mark`";
$result = $conn->query($sql);

?>  