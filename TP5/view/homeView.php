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

    //User Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36 R.Port 50776 R.Ad ::1 S.Ad ::1 Name localhost
}