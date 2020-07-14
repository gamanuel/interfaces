<?php

require_once 'controller.php';
require_once './view/loginView.php';

class logInController extends controller  {

  private $loginView;

  public function __construct(){
    parent::__construct();
    $this->loginView = new loginView();
  } 

  public function getLogin(){    
    if($_SESSION['USER'] == ""){
      $this->loginView->getLogin();
    }    
    else {
      header("Location: ".HOME."home");
    }
  }

  // Verifica que los datos ingresados por el usuario correspondan a los cargados en la bd - Almacena datos en la sesion.

  public function authentication(){

    $user = $_POST['user'];
    $password = $_POST['password'];

    $response = new stdClass();
    $response->status = 'success';
    $response->code = 200;
    print_r(json_encode($response));
    exit();


    /* if(!empty($user) && !empty($password)){
      
      //$operador = $this->modularModel->getRegistro("operador","usuario = '".$user."'","O");
      
      if((!empty($operador)) && (password_verify($password, $operador->clave))) {
        
        if(session_status() != PHP_SESSION_ACTIVE){
          session_start();
        };

        $_SESSION['ID'] = $operador->idoperador;
        $_SESSION['MAIL'] = $operador->mail;
        $_SESSION['NAME'] = $operador->nombre;

        $response->status = 'success';
        $response->code = 200;
        print_r(json_encode($response));
      }
      else{
        $response->status = 'authentication error';
        $response->code = 401;
        print_r(json_encode($response));            
      }
    }
    else {
      $response->status = 'data error';
      $response->code = 400;
      print_r(json_encode($response));         
    } */
  }

  public function logOut(){
    session_start();
    session_destroy();
    header('Location: '.HOME.'login');
    die();
  }

}
