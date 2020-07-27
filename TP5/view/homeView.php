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

    public function getMediaInfo($id){
        $this->smarty->assign('id',$id);
        $this->smarty->display("templates/mediaInfo.tpl"); 
    }

    public function getSearch($id){
        $this->smarty->assign('id',$id);

        $this->smarty->display("templates/search.tpl"); 
    }

    public function getFAQS(){
        $this->smarty->display("templates/faqs.tpl");
    }

}