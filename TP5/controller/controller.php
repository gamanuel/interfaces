<?php

require_once './model/modularModel.php';

define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

class controller {

  public function __construct(){
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    //$this->modularModel = new modularModel();
    
    if(session_status() != PHP_SESSION_ACTIVE){
      session_start();
    }
    
    if(!isset($_SESSION['USER'])){
      $_SESSION['ID'] = "";
      $_SESSION['NAME'] = "";
      $_SESSION['USER'] = "";
    }

  } 
}