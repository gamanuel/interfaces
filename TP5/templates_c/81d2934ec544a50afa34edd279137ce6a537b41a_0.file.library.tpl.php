<?php
/* Smarty version 3.1.32, created on 2020-07-27 20:17:00
  from 'C:\xampp\htdocs\interfaces\TP5\templates\library.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f1f606c661441_55333623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d2934ec544a50afa34edd279137ce6a537b41a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\library.tpl',
      1 => 1595891797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:footerPage.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:player.tpl' => 1,
  ),
),false)) {
function content_5f1f606c661441_55333623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="marginBottom6">
    <div class="container">
        <div class="row border-bottom ">
            <?php if ($_smarty_tpl->tpl_vars['id']->value == 'Tus playlists') {?>
            <div class="col-10 col-md-11 mt-3 ">
                <h3 class="fontBold tituloPage"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h3>
            </div>
            <div class="col-2 col-md-1 mt-3 text-right">
                <button class="btn  btn-outline-black btn-sm" data-toggle="modal" data-target="#modalPlaylist"><i class="fas fa-plus"></i></button>
            </div>
            <?php } else { ?>
            <div class="col-md-12 mt-3 ">
                <h3 class=" fontBold tituloPage"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h3>
            </div>
            <?php }?>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['id']->value == 'Tus playlists') {?>
    <div class="container pl-4 pr-4">
        <div class="row" id="playlistContainer">

        </div>
    </div>
    <?php } else { ?>
    <div class="container pl-4 pr-4">
        <div class="row" id="musicContainer">

        </div>
    </div>
    <?php }?>
</section>

<div class="modal fade" id="modalAddToPlaylist" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-blue">
      <div class="modal-header">
        <h5 class="modal-title text-white"> Agregar a una playlist</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white">
        <label > Canción: <strong id="songNameAddToPlaylist"></strong> </label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Seleccione una playlist</option>
            <option>  Nueva playlist </strong></option>
            <option>Previa</option>
            <option>Música para gym</option>
            <option>Cachengue</option>
            <option>Tropical House</option>
            <option>Deep House</option>
            <option>Para la Oficina</option>
            <option>Relajante</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-yellow">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
 src="js/library.js?v1.3"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footerPage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:player.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="modal fade" tabindex="-1" id="modalPlaylist" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-blue">
            <div class="modal-header bg-blue text-white">
                <h5 class="modal-title fontRegular">Nueva Playlist</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>
            <div class="modal-body bg-blue text-white">
                <label for="">Nombre de playlist</label>
                <input type="text" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-yellow">Confirmar</button>
            </div>
        </div>
    </div>
</div><?php }
}
