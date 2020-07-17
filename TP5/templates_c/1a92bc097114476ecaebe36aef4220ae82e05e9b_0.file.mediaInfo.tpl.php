<?php
/* Smarty version 3.1.32, created on 2020-07-16 21:27:59
  from 'C:\xampp\htdocs\interfaces\TP5\templates\mediaInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f10f08f3a4307_99276854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a92bc097114476ecaebe36aef4220ae82e05e9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\mediaInfo.tpl',
      1 => 1594945677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f10f08f3a4307_99276854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h3 class="border-bottom fontBold">Información</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <img src="https://dam.esquirelat.com/wp-content/uploads/2019/03/Queen2AlbumCover_London1974cMickRockcover.jpg" class="img-fluid rounded" alt="" srcset="">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <h4 class="fontBold">Queen</h4>
                    </div>
                    <div class="col-md-12">
                        <small class="text-muted fontBold">Brian May · Roger Taylor · Freddie Mercury (fallecido) · John Deacon</small>
                    </div>
                    <div class="col-md-12 mt-2">
                        <i class="far  d-inline fa-1x fa-star"></i>
                        <i class="far  d-inline fa-1x fa-star"></i>
                        <i class="far  d-inline fa-1x fa-star"></i>
                        <i class="far  d-inline fa-1x fa-star"></i>
                        <i class="far  d-inline fa-1x fa-star"></i>
                    </div>
                    <div class="col-md-12 mt-2">
                        <p>Queen es una banda británica de rock formada en 1970 en Londres por el cantante Freddie Mercury, el guitarrista Brian May, el baterista Roger Taylor y el bajista John Deacon. Si bien el grupo ha presentado bajas de dos de sus miembros
                            (Mercury, fallecido en 1991, y Deacon, retirado en 1997), los integrantes restantes, May y Taylor, continúan trabajando bajo el nombre Queen, por lo que la banda aún se considera activa.4​</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 ">
                <h4 class="border-bottom fontBold">Opiniones</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Danos tu opinion..." rows="2"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-blue btn-block btn-sm mt-2">Publicar opinion</button>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array(1,2,3,4,5), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="col-md-6">
                <div class="card  mb-3">
                    <div class="row no-gutters">
                        <div class="col-5 col-md-4">
                            <img src="https://www.liberalerna.se/wp-content/uploads/gp_tryck_020-480x480.jpg" class="card-img imagenCardUser rounded-pill">
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Roberto Oscar Garcia</h5>
                                <p class="card-text">Queen fue absolutamente la mejor banda del día.</p>
                                <p class="card-text"><small class="text-muted"> <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card  mb-3">
                    <div class="row no-gutters">
                        <div class="col-5 col-md-4">
                            <img src="https://avada.theme-fusion.com/wp-content/uploads/2019/07/person_sample_4.jpg" class="card-img imagenCardUser rounded-pill">
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Manuel Garcia Amaro</h5>
                                <p class="card-text">Queen no me gusta para nada. Son muy malas las canciones</p>
                                <p class="card-text"><small class="text-muted"> <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i>
                                    <i class="far  d-inline fa-1x fa-star"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </div>

</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
