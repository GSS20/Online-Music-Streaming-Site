<?php
	ob_start();
	session_start();

	$con = mysqli_connect("127.0.0.1", "root", "", "soulmusic");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>