<?php

Class About extends Controller
{
 
  public function index()
  {
    $data['page_title'] = "About";
    $this->view("about",$data);
  }

}