<?php

Class Controller
{
    public function view($path, $data = [])
   {
        if(file_exists("../private/views/" .$path. ".php"))
        {
           include "../private/views/" .$path. ".php";
        }
   }
}