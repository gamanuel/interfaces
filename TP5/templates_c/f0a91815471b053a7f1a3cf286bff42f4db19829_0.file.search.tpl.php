<?php
/* Smarty version 3.1.32, created on 2020-07-17 18:05:01
  from 'C:\xampp\htdocs\interfaces\TP5\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f12127d908f26_37217520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0a91815471b053a7f1a3cf286bff42f4db19829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\search.tpl',
      1 => 1595015498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:componenteMultimedia.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f12127d908f26_37217520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h3 class="border-bottom fontBold">Tu busqueda: <span class="fontLight"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</span></h3>
            </div>
        </div>
    </div>
  
    <div class="container pl-4 pr-4">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array(1,2,3,4), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> <?php $_smarty_tpl->_subTemplateRender("file:componenteMultimedia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

   

</section>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}