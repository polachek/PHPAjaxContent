<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $conn = new mysqli($host, $username, $password, $databasename);
   $sql= "SELECT * FROM users WHERE email='$user_check'";
   
   if (!$resultado = $conn->query($sql)) {
		echo "Errno: " . $conn->error . "\n";
	}else
	if ($resultado->num_rows === 0) {
		unset($_SESSION['login_user']);
		header('Location: localhost/activo');
		die();
	}
?>