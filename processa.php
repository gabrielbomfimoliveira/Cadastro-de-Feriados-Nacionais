<?php
session_start();
include_once("config.php");



    //   VARIAVEIS PARA RECEBER OS VALORES DIGITADOS NO FORMULÁRIO

    $data = $_REQUEST['data'];
    $descricao = $_REQUEST['descricao'];
    $status = $_POST['status'];

    $data = explode(" ",$data);
    list($date) = $data;
    $data_sem_barra= array_reverse(explode("/",$date));
    $data_sem_barra= implode("-",$data_sem_barra);

    // VALIDAÇÃO PARA CHECAR SE O FERIADO JÁ ESTÁ CADASTRADO NO BD, CASO NÃO, CADASTRAR.

$dupesql= "SELECT * FROM feriado WHERE data = '$data_sem_barra'";

$duperaw = mysqli_query($conn,$dupesql);

if($row_horarios = mysqli_fetch_array($duperaw) == 0){


    $result_data = "INSERT INTO feriado (data, descricao,status) VALUES ('$data_sem_barra','$descricao','$status')";
    $resultado = mysqli_query($conn,$result_data);


    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<div class='alert alert-success'>Feriado cadastrado com sucesso</div>";
        header("Location:painel.php");

    }else{
        $_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao cadastrar feriado</div>";
        header("Location:painel.php");

    }

}else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>OPS! FERIADO JÁ CADASTRADO..."."$data_sem_barra</div>";
        header("Location:painel.php");

}
?>