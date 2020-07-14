<?php
/* Smarty version 3.1.32, created on 2020-02-28 10:31:37
  from '/var/www/html/codigoStarter/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e5916394ff098_15126917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a408f5cff92bf2203c928c9c6fd6ecb9d084818' => 
    array (
      0 => '/var/www/html/codigoStarter/templates/home.tpl',
      1 => 1582896656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e5916394ff098_15126917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">
    <div class="row mbr-justify-content-center">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['botonesHome']->value, 'boton');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['boton']->value) {
?>
                <div class="col-lg-4 mbr-col-md-5 ">
                    <a title="<?php echo $_smarty_tpl->tpl_vars['boton']->value->detalle;?>
" href="<?php echo $_smarty_tpl->tpl_vars['boton']->value->enlace;?>
" class="text-dark subrayado">
                        <div class="btnHome colorFondo<?php echo $_smarty_tpl->tpl_vars['boton']->value->color;?>
">
                            <div class="ico-btnHome">
                                <span class="mbr-iconfontHome fa <?php echo $_smarty_tpl->tpl_vars['boton']->value->icono;?>
 "></span>
                            </div>
                            <div class="text-btnHome btnHomeCenter">
                                <h2 class="h2Home mbr-fonts-styleHome mbr-boldHome mbr-section-title3Home display-5Home"><?php echo $_smarty_tpl->tpl_vars['boton']->value->descripcion;?>
</h2>
                                
                            </div>
                        </div>
                    </a>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
