<?php

//SCRIPT PARA SAIR(EFETUAR LOGOUT)
session_start();
session_destroy();
header('Location: index.php');
exit();