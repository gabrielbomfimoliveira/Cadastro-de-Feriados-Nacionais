
<?php 
	session_start();
	include('verifica_login.php');
	
	//Conexão com banco de dados
	include_once("config.php");
	
	echo "<a href='painel.php'>Cadastrar</a><br><br>";

	//EXIBIR FERIADOS
	
	echo "<h1>Feriados Cadastrados</h1>";

	
	$result_horarios = "SELECT * FROM feriado";
	$resultado_horarios = mysqli_query($conn, $result_horarios);
	while($row_horarios = mysqli_fetch_array($resultado_horarios)){

		echo "Descrição: ".$row_horarios['descricao']."<br>";
		echo "Data: ".date('d/m/Y', strtotime($row_horarios['data']));
		//EXIBIR STATUS COMO ATIVO CASO 0 OU INATIVO CASO 1...
		if($row_horarios['status'] == 0){
			echo "<br>Ativo";
		}else{
			echo "<br>Inativo";
		}
		echo "<br><a href='edit_status.php?id=". $row_horarios['id'] . "&status=". $row_horarios['status']."'>Alterar Status</a><br><hr>";

		//APAGAR
		// echo "<br><a href='apaga.php?id=". $row_horarios['id'] . "'>Apagar</a><br><hr>";

		
	}






	// $result_horarios = "SELECT * FROM feriado WHERE DAY(data) = DAY(CURDATE()) AND MONTH(data) = MONTH(CURDATE()) AND YEAR(data) = YEAR(CURDATE())";



	// $resultado_horarios = mysqli_query($conn, $result_horarios);
	// while($row_horarios = mysqli_fetch_array($resultado_horarios)){
	// 	echo "Horário: ".date('d/m/Y', strtotime($row_horarios['data']))."<hr>";
	// 	echo "Descrição: ".$row_horarios['descricao']."<br>";
		
	// }
?>

