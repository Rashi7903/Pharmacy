<?php
		$conn = mysqli_connect("localhost", "root", "Ras@2204", "pharmacy");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>