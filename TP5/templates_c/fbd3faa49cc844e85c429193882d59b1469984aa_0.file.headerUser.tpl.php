<?php
/* Smarty version 3.1.32, created on 2020-07-25 14:05:13
  from 'C:\xampp\htdocs\interfaces\TP5\templates\headerUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f1c6649c35ba4_94886485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbd3faa49cc844e85c429193882d59b1469984aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\headerUser.tpl',
      1 => 1595696711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1c6649c35ba4_94886485 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/fom.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <title>Spofiy</title>
</head>

<body>

    <div class="sticky-top">


        <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top paddingNavbar">
            <a class="navbar-brand text-white" href="#"><i class="far fa-play-circle"></i> <span class="fontLight">spo</span><span class="fontBold">fiy</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <!-- <li class="nav-item active text-white">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> -->
                    <li class="nav-item mr-2">
                        <a class="nav-link text-white spofiyHover" href="#">FAQS</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-white spofiyHover" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user-circle"></i> Hola Manuel
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-blue " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white hoverDropdownMenu" href="library/recomendaciones">Recomendaciones</a>
                            <a class="dropdown-item text-white hoverDropdownMenu" href="library/playlists">Playlists</a>
                            <a class="dropdown-item text-white hoverDropdownMenu" href="library/favoritos">Favoritos</a>
                            <a class="dropdown-item text-white hoverDropdownMenu" href="#">Notificaciones</a>
                            <a class="dropdown-item text-white hoverDropdownMenu" href="#">Mi perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-white hoverDropdownMenu" href="#">Cerrar Sesión</a>
                        </div>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">

                </form>
            </div>
        </nav>

        <div class="bg-yellow shadow ">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-md-8">
                        <div class="form-group mt-2 mb-2">
                            <input type="search" placeholder="Que estas buscando?" class="form-control form-control-sm" id="searchInput">
                        </div>
                    </div>
                    <div class="col-2 col-md-2 mt-2 mb-2">
                        <button class="btn btn-block btn-sm btn-black" id="btnSearch"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="col-2 col-md-2 mt-2 mb-2">
                        <button class="btn btn-block btn-sm btn-outline-black" data-toggle="collapse" href="#collapseFilters"><i class="fas fa-filter" ></i></button>
                    </div>
                </div>

            </div>
        </div>
        <div class="bg-blue shadow collapse" id="collapseFilters">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-white mt-3">
                        <p>Elegí que filtrar en tu búsqueda :</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-md-2 mt-1 mb-3">
                        <button class="btn btn-block btn-sm btn-outline-yellow btnFilter">Generos</button>
                    </div>
                    <div class="col-4 col-md-2 mt-1 mb-3">
                        <button class="btn btn-block btn-sm btn-outline-yellow btnFilter">Artistas</button>
                    </div>
                    <div class="col-4 col-md-2 mt-1 mb-3">
                        <button class="btn btn-block btn-sm btn-outline-yellow btnFilter">Albumes</button>
                    </div>
                    <div class="col-4 col-md-2 mt-1 mb-3">
                        <button class="btn btn-block btn-sm btn-outline-yellow btnFilter">Podcasts</button>
                    </div>
                    <div class="col-4 col-md-2 mt-1 mb-3">
                        <button class="btn btn-block btn-sm btn-outline-yellow btnFilter">Canciones</button>
                    </div>
                    <div class="col-4 col-md-2 mt-1 mb-3">
                        <button class="btn btn-block btn-sm btn-outline-yellow btnFilter">Playlists</button>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <?php echo '<script'; ?>
 src="js/search.js"><?php echo '</script'; ?>
><?php }
}
