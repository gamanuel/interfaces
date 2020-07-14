<?php
  require_once 'routeClass.php';
  require_once 'controller/logInController.php';
  require_once 'controller/homeController.php';
  
  $r = new Router();

  $level = new logInController();

  //Ejemplo parametros en la url
  //$r->addRoute("login/:PARAMETRO","GET", "logInController", "getLogin");

  $r->addRoute("home-user", "GET", "homeController", "getHomeUser");  
  $r->addRoute("library/:ID", "GET", "homeController", "getLibrary");  

  // Ruta default - debe ir al final 
  $r->addRoute("home", "GET", "homeController", "getHome");
  
  //run
  $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);