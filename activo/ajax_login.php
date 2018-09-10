<?php
include("config.php");
session_start();

if(isset($_POST['ajax_login']))
{
	$my_email=$_POST['email'];
	$my_pass=$_POST['password'];
	
	$conn= new mysqli($host, $username, $password, $databasename);
	$sql= "SELECT * FROM users WHERE email='$my_email' and password='$my_pass' ";

	if (!$resultado = $conn->query($sql)) {
		echo "Errno: " . $conn->error . "\n";
	}else
	if ($resultado->num_rows === 0) {
		echo "Credenciales incorrectas";
	}else{
		$_SESSION['login_user']=$my_email;
		echo "success";
	}
	exit;
}
?>