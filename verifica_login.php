<?php
// session_start();
//SCRIPT PARA VERIFICAR LOGIN
if(!$_SESSION['usuario']) {
	header('Location: index.php');
	exit();
}

?>