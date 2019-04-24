<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

	if ($username == "Admin" && $password == "qwerty") 
	{
		echo "Login sukses";
		$_SESSION['is_login'] = true;
		header('Location: http://localhost/auth/beranda.php');
	}
	else
	{
		echo "Login gagal";
		header('Location: http://localhost/auth/form_login.php');
	}
?>