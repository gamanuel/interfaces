<?php
require_once 'view/view.php';

class loginView extends view {

    public function __construct(){
        parent::__construct($botonesHome = "");
    }

    public function getLogin() {
        $this->smarty->display("templates/login.tpl");
    }

    public function getForgotPassword() {
        $this->smarty->display("templates/forgotPassword.tpl");
    }

    public function getEjemplo(){
        $this->smarty->display("templates/ejemplo.tpl");
    }

    //User Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36 R.Port 50776 R.Ad ::1 S.Ad ::1 Name localhost
    public function resetPassword($id){
        $this->smarty->assign('id',$id);
        $this->smarty->display("templates/resetPassword.tpl");
    }

    public function asignar($nivel, $estaciones, $operadores,$depestActual){
        $this->smarty->assign('nivel',$nivel);
        $this->smarty->assign('estaciones',$estaciones);
        $this->smarty->assign('operadores',$operadores);
        $this->smarty->assign('depestActual',$depestActual);
        $this->smarty->display("templates/asignarDispositivo.tpl");
    }
 
}