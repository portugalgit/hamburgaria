<?php

Class Menu extends Controller
{
 
  public function index()
  {
    $data['page_title'] = "Menu";
    $this->view("menu",$data);
  }

}
