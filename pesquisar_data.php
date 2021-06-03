<?php
session_start();
include('verifica_login.php');
?>

<!-- CLASSE PARA PASSAR UMA DATA COMO PARAMETRO E ELA SERÁ PESQUISADA EM "proc_pesq_user.php" -->


<!-- <h2>Olá, <?php echo $_SESSION['usuario'];?></h2> -->
<!-- <h2><a href="logout.php">Sair</a></h2> -->


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Calendario</title>
   
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
		<script src="js/bootstrap-datepicker.min.js"></script> 
		<script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
		
	</head>
	<body>
		<div class="container">
		
		<br><br><a href='listar.php'>Listar feriados cadastrados</a><br><br>
			<h1>Pesquisar Feriado</h1>
			<?php
			if(isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
			<form class="form-horizontal" action="proc_pesq_user.php" method="post">
				 <div class="form-group">
					<label class="col-sm-2 control-label">Data</label>
					<div class="col-sm-10">
						<div class="input-group date">
							<input type="text" name = "data" class="form-control" id="exemplo" placeholder="Insira uma data" required>
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</div>
						</div>

					</div>
				  </div>


				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" name="btncadastrar" class="btn btn-success">Pesquisar</button>
					</div>
				</div>

			</form>

		</div>
		
		<script type="text/javascript">
			$('#exemplo').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				// startDate: '+0d',
			});
		</script>
	</body>
</html>