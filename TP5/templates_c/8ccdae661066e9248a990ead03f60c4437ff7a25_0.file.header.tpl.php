<?php
/* Smarty version 3.1.32, created on 2020-07-25 14:04:56
  from 'C:\xampp\htdocs\interfaces\TP5\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f1c6638ee3873_38000413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ccdae661066e9248a990ead03f60c4437ff7a25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\header.tpl',
      1 => 1595696652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1c6638ee3873_38000413 (Smarty_Internal_Template $_smarty_tpl) {
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top paddingNavbar">
        <a class="navbar-brand text-white" href="#"><i class="far fa-play-circle"></i> <span class="fontLight">spo</span><span class="fontBold">fiy</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item mr-2">
                    <a class="nav-link text-white spofiyHover" href="#">FAQS</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link text-white spofiyHover" href="" data-toggle="modal" data-target="#loginModal"><i class="far fa-user-circle " ></i> Iniciar Sesion</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">

            </form>
        </div>
    </nav><?php }
}
