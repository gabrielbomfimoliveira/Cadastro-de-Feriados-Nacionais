<?php
session_start();
// VERIFICAR LOGIN 
include('verifica_login.php');
?>


		<!-- BOAS VINDAS -->

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>PAINEL COLABORADOR</title>

		<h2> COLABORADOR EFETUOU LOGIN</h2>



		
	</head>
	<body>
	</body>
</html>