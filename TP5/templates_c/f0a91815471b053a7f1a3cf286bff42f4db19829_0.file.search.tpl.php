<?php
/* Smarty version 3.1.32, created on 2020-07-27 19:42:30
  from 'C:\xampp\htdocs\interfaces\TP5\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f1f5856d62723_40751009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a91815471b053a7f1a3cf286bff42f4db19829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\search.tpl',
      1 => 1595889518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:player.tpl' => 1,
    'file:footerPage.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f1f5856d62723_40751009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="searchInputValue">
                <h3 class="border-bottom fontBold tituloPage">Tu busqueda: <span class="fontLight"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</span></h3>
            </div>
            <div class="col-md-12">
                <span class="badge badge-pill badge-secondary">Canciones</span>
                <span class="badge badge-pill badge-secondary">Playlists</span>
            </div>
        </div>
    </div>

    <div class="container pl-4 pr-4">
        <div class="row" id="cancionTitle">

        </div>
        <div class="row" id="searchContainer">

        </div>
    </div>



</section>


<?php $_smarty_tpl->_subTemplateRender("file:player.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footerPage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
