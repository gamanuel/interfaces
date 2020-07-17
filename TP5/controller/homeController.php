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

  public function getLibrary($params = []){
    $id = $params[':ID'];
    $string;
    if($id === 'playlists'){
      $string = 'Tus ' . $id;
    }
    else if($id === 'favoritos'){
      $string = 'Tus ' . $id;
    }
    else if($id === 'recomendaciones'){
      $string = 'Nuestras ' . $id;
    }

    $this->homeView->getLibrary($string);
  }

  public function getSearch($params = []){
    $id = $params[':ID'];
    $this->homeView->getSearch($id);
  }

  public function getMediaInfo(){
    $this->homeView->getMediaInfo();
  }
}