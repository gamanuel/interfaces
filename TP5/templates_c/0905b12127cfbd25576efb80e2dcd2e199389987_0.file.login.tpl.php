<?php
/* Smarty version 3.1.32, created on 2020-07-09 11:43:29
  from 'C:\xampp\htdocs\wifisan-dashboard\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f072d1152fb13_57094383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0905b12127cfbd25576efb80e2dcd2e199389987' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wifisan-dashboard\\templates\\login.tpl',
      1 => 1594305806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f072d1152fb13_57094383 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/login.css">

    <title>Wifisan</title>
</head>


<body class="loginBackground">
    <div class="container h-100">
        <div class="row h-100 justify-content-center  align-items-center">
            <div class="col-md-5 bg-white shadow rounded border border-violet">
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
                                            <label for="">Usuario (dirección de correo)</label>
                                            <input type="email" id="user" class="form-control" placeholder="Usuario" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="password" id="password" class="form-control" placeholder="Contraseña" required>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row" id="statusContainer"></div>
                        <div class="row mb-4 mt-2">
                            <div class="col-md-12">
                                <button class="col-md-12 btn btn-violet text-white" id="btnLogin" type="button" name="button">Iniciar Sesion</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
