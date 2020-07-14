<?php

require_once 'controller.php';

class securedController extends controller {



  public function __construct(){
    parent::__construct();
    $this->isAuthenticated();
  } 

  private function isAuthenticated(){
      if($_SESSION['USER'] != ""){
        session_destroy();
        header('Location: '.HOME.'login');
      }
  }

}