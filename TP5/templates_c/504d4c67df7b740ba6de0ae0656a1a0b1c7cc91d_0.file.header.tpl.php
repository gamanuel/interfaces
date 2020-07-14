<?php
/* Smarty version 3.1.32, created on 2020-07-09 13:33:35
  from 'C:\xampp\htdocs\wifisan-dashboard\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f0746dfca7d57_19846334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '504d4c67df7b740ba6de0ae0656a1a0b1c7cc91d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wifisan-dashboard\\templates\\header.tpl',
      1 => 1594312414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0746dfca7d57_19846334 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="icon" href="images/fom.ico">
    <link href="css/style.css" rel="stylesheet">

    <title>Wifisan</title>
</head>

<body>

    <div class="container-fluid fixed-top bg-white shadow">
        <div class="row collapse collapseNav show no-gutters d-flex h-100 position-relative">
            <div class="col-3 px-0 w-sidebar navbar-collapse   d-none d-md-flex">
                <!-- spacer col -->
                <a href="#" class="navbar-brand"><img src="images/logoColor.png" width="60%" alt="" srcset=""></a>
            </div>
            <div class="col px-3 px-md-0 py-3">
                <div class="d-flex">
                    <!-- toggler -->
                    <a data-toggle="collapse" href="#" data-target=".collapseNav" role="button" class="text-dark">
                        <i class="fa fa-bars fa-lg"></i>
                    </a>

                    <div class="ml-auto dropdown">

                        <a class=" dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user"></i>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="login">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 h-100">
        <div class="row min-vh-100 collapse collapseNav show no-gutters d-flex h-100 position-relative">
            <div class="col-3 p-0 h-100 text-white w-sidebar navbar-collapse collapseNav collapse d-none d-md-flex sidebar">
                <!-- fixed sidebar -->
                <div class="navbar-dark bg-dark position-fixed h-100 w-sidebar">
                    <div class="mt-5 list-group list-group-flush">
                        <?php if (false == true) {?>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Visión General</a> <?php } else { ?>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white sideBarActive">Visión
                            General</a> <?php }?>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white sideBar">Boton </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white sideBar">Boton </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white sideBar">Boton </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white sideBar">Boton </a>

                    </div>
                </div>
            </div>
            <!-- Contenido -->
            <div class="col p-3"><?php }
}
