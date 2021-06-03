<?php

include_once 'config.php';


// CONDIÇÃO PARA ALTERAR O STATUS, CASO SEJA 0 VIRAR 1, CASO 1 VIRAR 0


if ($_GET['status'] == 0) {
    $resultado_id = "UPDATE feriado SET status = 1 WHERE id =". $_GET['id'];
    $result_id = mysqli_query($conn,$resultado_id);
    
}else{
    $resultado_id = "UPDATE feriado SET status = 0 WHERE id =". $_GET['id'];
    $result_id = mysqli_query($conn,$resultado_id);
    

}



header("location: listar.php");


?>