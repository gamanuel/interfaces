<?php
/* Smarty version 3.1.32, created on 2020-07-22 19:58:29
  from 'C:\xampp\htdocs\interfaces\TP5\templates\componenteMultimedia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f18c495603741_03428770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88195987a7a806923b84f3a75b8fcdd639972d1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\componenteMultimedia.tpl',
      1 => 1595458701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f18c495603741_03428770 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-6">
    <div class="row   rounded text-white mt-2 pointer mediaDetailRep bg-blue">
        <div class="col-2 col-md-2  my-auto p-2">
            <img src="images/songs/<?php echo $_smarty_tpl->tpl_vars['lin']->value;?>
.jpg" alt="" class="img-fluid imgMediaDetail rounded" srcset="">
        </div>
        <div class="col-5 col-md-4  my-auto">
            <p>Titulo canción</p>
            <small>Artista</small>
        </div>
        <div class="col-1 col-md-4">
        </div>
        <div class="col-2 col-md-1 text-right my-auto">
            <i class="fas  fa-play mx-2"></i>
        </div>
        <div class="col-2 col-md-1 text-center my-auto">
            <i class="fas fa-ellipsis-v"></i>
        </div>
    </div>
</div><?php }
}
