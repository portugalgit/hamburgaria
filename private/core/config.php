<?php

define("WEBSITE_TITULO","Hamburgaria");

//database
define("DB_NAME","hamb_db");
define("DB_USER","root");
define("DB_PASS","");

//debug
define('DEBUG', true);

if(DEBUG){

    ini_set('display_errors', 1);
}else{
    ini_set('display_errors', 0);
}