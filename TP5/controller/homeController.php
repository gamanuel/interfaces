<?php

require_once 'securedController.php';
require_once './view/homeView.php';

class homeController extends securedController {

  private $homeView;

  public function __construct(){
    parent::__construct();
    $this->homeView = new homeView();
  } 

  public function getHome(){
    $this->homeView->getHome();
  }

  public function getHomeUser(){
    $this->homeView->getHomeUser();
  }
}