<?php
/* Smarty version 3.1.32, created on 2020-02-28 10:25:09
  from '/var/www/html/clinic-history/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e5914b552a443_09321456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fff587466894a3839c4455656b2ce0853f374bb5' => 
    array (
      0 => '/var/www/html/clinic-history/templates/login.tpl',
      1 => 1582893557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5914b552a443_09321456 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">        
        <title>FOM - Login</title>
    </head>
    

    <body class="loginBackground">  
        <div class="container h-100">
            <div class="row h-100 justify-content-center  align-items-center">
            <div class="col-md-5 bg-white shadow">
                <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <img src="images/logo.svg" class="logoSizeLogin mt-3 mb-3 mx-auto mr-4" alt="Italian Trulli" title="FOM">        
                    </div>
            
                    <div class="mt-3 row">                        
                        <form class="col-12" method="post">
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" id="user-id" class="form-control" placeholder="Usuario" required>
                                </div>
                                <div class="form-group">
                                    <input type="password"  id="password-id" class="form-control" placeholder="Contraseña" required>
                                    <label class="fontForgotPassword"><a  tabindex="-1" href="forgotPassword">¿Olvidaste tu contraseña?</a></label>
                                    <div class="col pl-0">
                                        <a class="fontForgotPassword" href="solicitarCuenta">Solicitar Cuenta</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>   
                    </div>
                    <div class="row" id="div-container"></div>
                    <div class="row mb-4 mt-2">
                        <div class="col-md-12 pl-2 pr-2">
                            <button class="col-md-12 btn greenBackground text-white" id="btn-login" type="button" name="button">Loguearse</button>
                        </div>
                    </div>
                    
                </div>
                </div>
            </div>
            </div>  
        </div>      
          
        <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/notify.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
