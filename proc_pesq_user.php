<?php
session_start();
include_once("config.php");


//CASO A DATA PASSADA COMO PARAMETRO EM "proc_pesq_user.php" SEJA ENCONTRADA, RETORNA "É FERIADO + DATA"
// CASO NÃO SEJA ENCONTRADA, RETORNA "NÃO É FERIADO..."



    $data = $_REQUEST['data'];

    $data = explode(" ",$data);
    list($date) = $data;
    $data_sem_barra= array_reverse(explode("/",$date));
    $data_sem_barra= implode("-",$data_sem_barra);

$dupesql= "SELECT * FROM feriado WHERE data = '$data_sem_barra'";

$duperaw = mysqli_query($conn,$dupesql);

if($row_horarios = mysqli_fetch_array($duperaw) == 0){
	$_SESSION['msg'] = "<div class='alert alert-danger'>Feriado não encontrado</div>";
    header("Location:pesquisar_data.php");

}else{
	$_SESSION['msg'] = "<div class='alert alert-success'>É feriado! Data: "."$data_sem_barra</div>";
    header("Location:pesquisar_data.php");

    }

?>