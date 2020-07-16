<?php
require_once 'view/view.php';

class homeView extends view {

    public function __construct(){
        parent::__construct();
    }

    public function getHome(){
        $this->smarty->display("templates/home.tpl");
    }

    public function getHomeUser(){
        $this->smarty->display("templates/homeUser.tpl");
    }

    public function getLibrary($id){
        $this->smarty->assign('id',$id);
        $this->smarty->display("templates/library.tpl");
    }

}