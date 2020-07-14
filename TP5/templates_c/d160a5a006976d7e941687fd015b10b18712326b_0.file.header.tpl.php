<?php
/* Smarty version 3.1.32, created on 2020-02-28 10:31:37
  from '/var/www/html/codigoStarter/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e59163951a989_64233384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd160a5a006976d7e941687fd015b10b18712326b' => 
    array (
      0 => '/var/www/html/codigoStarter/templates/header.tpl',
      1 => 1582896656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modalWait.tpl' => 1,
  ),
),false)) {
function content_5e59163951a989_64233384 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
    <html manifest="manifest.appcache">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- No guardar Cache -->
    <meta http-equiv="cache-control" content="no-cache" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="icon" href="images/fom.ico">
    <?php echo '<script'; ?>
 src="js/notificationAjax.js"><?php echo '</script'; ?>
>


    <title>FOM</title>
</head>

<body class="colorback1">
    
    <nav class="navbar navbar-expand-lg navbar-dark greenBackground fondoBarraNavegacion  navBarFontSize letterSpace sticky-top">
        <a class="logoSizeNavBar" href="home"><img class="img-fluid" src="images/logoNavBar.svg" alt="fom"></a>
        <h6 class="text-white ml-3"><?php echo $_smarty_tpl->tpl_vars['estacion']->value;?>
</h6>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white hoverNavBar mr-4" href="home">Inicio</a>
                </li>
               
                <li class="nav-item " id="liNotification">
                    
                </li>                    
                <li class="nav-item dropdown ">
                    <a class="nav-link text-white dropdown-toggle hoverNavBar" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bienvenido <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['botonesHome']->value, 'boton');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['boton']->value) {
?>
                            <a class="dropdown-item efectoHover" href="<?php echo $_smarty_tpl->tpl_vars['boton']->value->enlace;?>
"><?php echo $_smarty_tpl->tpl_vars['boton']->value->descripcion;?>
</a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
        <div class="modal fade" id="exampleModalCenter"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Notificaciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalNotifications">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
        <?php $_smarty_tpl->_subTemplateRender("file:modalWait.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
