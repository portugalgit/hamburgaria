<?php

Class Controller
{
    public function view($path,$data = [])
   {
        if(file_exists("../private/views/"  . THEME . $path. ".php"))
        {
           include "../private/views/" . THEME . $path . ".php";
        }
   }
}