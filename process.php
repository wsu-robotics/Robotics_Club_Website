<?php
	$username = $_POST['user'];
	$password = $_POST['password'];
	
	if($username == "kayl" && $password == "awesome"){
		header('Location: new_content.php');
	} else {
		header('Location: index.php');
	}

?>
