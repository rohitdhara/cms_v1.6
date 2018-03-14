<?php
    $user="";
	session_destroy();
	session_unset(); 
	require("conection/connect.php");
	header("Location: index.php");
	exit();
?>
