<?php

//iniciar GPS
session_start();

//carregar aqui o ficheiro (croquis de localização do bairro)
include '../private/init.php';

//levantar a casa
$app = new App();

//print_r($_GET['url']);

