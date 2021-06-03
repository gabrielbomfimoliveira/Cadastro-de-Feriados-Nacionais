<?php

//SCRIPT PARA APAGAR DA TABELA (ESTÁ INATIVO, CASO QUEIRA ATIVAR, É PRECISO TIRAR O COMENTÁRIO NO "listar.php")
session_start();
include_once("config.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "DELETE FROM feriado WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn,$result_usuario);

if (mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style = 'color:green;'>Feriado apagado com sucesso!</p>";
    header("Location: painel.php");
}else{

    if (mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<p style = 'color:red;'>Feriado apagado com sucesso!</p>";
        header("Location: painel.php");
    }
}


