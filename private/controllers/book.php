<?php

Class Book extends Controller
{
 
  public function index()
  {
    $data['page_title'] = "Book";
    $this->view("book",$data);
  }

}