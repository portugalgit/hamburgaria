<?php

//iniciar GPS
session_start();
//pegar a url
$URL = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
//retirar o index.php no final
$URL = str_replace("index.php","",$URL);

//definir a rota
define('ROOT',$URL);
define('ASSETS',$URL . "assets/");


//carregar aqui o ficheiro (croquis de localização do bairro)
include '../private/init.php';

//show(ASSETS);
//levantar a casa
$app = new App();

//print_r($_GET['url']);

