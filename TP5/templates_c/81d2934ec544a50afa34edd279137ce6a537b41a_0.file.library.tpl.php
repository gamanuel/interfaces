<?php
/* Smarty version 3.1.32, created on 2020-07-22 23:48:28
  from 'C:\xampp\htdocs\interfaces\TP5\templates\library.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f18fa7cc937b7_85701371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d2934ec544a50afa34edd279137ce6a537b41a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\library.tpl',
      1 => 1595472507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:player.tpl' => 1,
  ),
),false)) {
function content_5f18fa7cc937b7_85701371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="marginBottom6">
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
            <div class="row" id="playlistContainer">

            </div>
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
>
<?php $_smarty_tpl->_subTemplateRender("file:player.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
