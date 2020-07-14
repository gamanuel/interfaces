<?php
  require_once "libs/Smarty.class.php";

  class view {

    protected $basehref;
    protected $smarty;    
    
    public function __construct() {
        $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/'; 
        //$this->basehref = 'http://45.7.86.183:804/'; 
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref',$this->basehref);        
    }
  }
 ?>
