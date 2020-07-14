<?php
require_once 'view.php';

class webView extends view {

    public function __construct(){
        parent::__construct();
    }

    public function getHome() {
        $this->smarty->display("templates/home.tpl");
    }
}