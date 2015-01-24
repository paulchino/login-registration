<?php 
	session_start();
	echo "hello {$_SESSION['first_name']}";
	echo "<a href='process.php'>LOG OFF </a>";

 ?>
