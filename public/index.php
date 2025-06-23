<?php

//iniciar GPS
session_start();
//pegar a url
$rota = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
//retirar o index.php no final
$rota = str_replace("index.php","",$rota);

//definir a rota
define('ROOT',$rota);
define('ASSETS',$rota. "assets/");

//carregar aqui o ficheiro (croquis de localização do bairro)
require "../private/core/init.php";

//show(ASSETS);

//levantar a casa
$app = new App();

//print_r($_GET['url']);

