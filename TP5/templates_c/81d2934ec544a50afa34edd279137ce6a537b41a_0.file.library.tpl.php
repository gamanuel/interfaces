<?php
/* Smarty version 3.1.32, created on 2020-07-22 21:15:50
  from 'C:\xampp\htdocs\interfaces\TP5\templates\library.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f18d6b65e07a4_30760544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d2934ec544a50afa34edd279137ce6a537b41a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\library.tpl',
      1 => 1595463211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:componentePlaylist.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f18d6b65e07a4_30760544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h3 class="border-bottom fontBold"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h3>
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['id']->value == 'Tus playlists') {?>
    <div class="container pl-4 pr-4">
        <div class="row">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array(1,2,3,4,5,6,7,8), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> <?php $_smarty_tpl->_subTemplateRender("file:componentePlaylist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php } else { ?>
    <div class="container pl-4 pr-4">
        <div class="row" id="musicContainer">

        </div>
    </div>
    <?php }?>
</section>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="js/library.js"><?php echo '</script'; ?>
><?php }
}
