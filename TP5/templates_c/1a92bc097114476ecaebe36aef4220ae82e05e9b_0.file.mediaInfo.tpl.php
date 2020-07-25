<?php
/* Smarty version 3.1.32, created on 2020-07-25 13:22:59
  from 'C:\xampp\htdocs\interfaces\TP5\templates\mediaInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f1c5c63aa4075_46440236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a92bc097114476ecaebe36aef4220ae82e05e9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\mediaInfo.tpl',
      1 => 1595694178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f1c5c63aa4075_46440236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="mediaId">

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
                <img src="https://dam.esquirelat.com/wp-content/uploads/2019/03/Queen2AlbumCover_London1974cMickRockcover.jpg" id="imageMedia" class="img-fluid rounded" alt="" srcset="">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <h4 class="fontBold" id="nameMedia">Queen</h4>
                    </div>
                    <div class="col-md-12">
                        <small class="text-muted fontBold" id="artistMedia">Brian May · Roger Taylor · Freddie Mercury (fallecido) · John Deacon</small>
                    </div>
                    <div class="col-md-12 mt-2">
                        <i class="fas  d-inline fa-1x fa-star"></i>
                        <i class="fas  d-inline fa-1x fa-star"></i>
                        <i class="fas  d-inline fa-1x fa-star"></i>
                        <i class="fas  d-inline fa-1x fa-star"></i>
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
            <div class="col-md-9">

            </div>
            <div class="col-md-3">
                <button class="btn btn-blue btn-block btn-sm mt-2">Publica tu opinión</button>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
         <div class="col-md-6">
                <div class="card  mb-3">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSAkjktNk_waKZ6A064JikKQRYLxoKPNIUR_g&usqp=CAU"  class="card-img imagenCardUser rounded-pill mr-2"> Yanina Latorre</h5>
                                <p class="card-text">Queen no me gusta para nada. Son muy malas las canciones</p>
                                <p class="card-text"><small class="text-muted"> 
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
            <div class="col-md-6">
                <div class="card  mb-3">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><img src="images/avatar/5.jpg" class="card-img imagenCardUser  rounded-pill mr-2">Roberto Oscar Garcia</h5>
                                <p class="card-text">Queen fue absolutamente la mejor banda del día.</p>
                                <p class="card-text "><small class="text-muted">
                                     <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas  text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas  text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas  text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far  text-dark d-inline fa-1x fa-star"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card  mb-3">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><img src="images/avatar/6.jpg"  class="card-img imagenCardUser rounded-pill mr-2"> Manuel Garcia Amaro</h5>
                                <p class="card-text">Queen no me gusta para nada. Son muy malas las canciones</p>
                                <p class="card-text"><small class="text-muted"> 
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card  mb-3">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><img src="images/avatar/2.jpg"  class="card-img imagenCardUser rounded-pill mr-2"> Manuel Rivas</h5>
                                <p class="card-text">Queen no me gusta para nada. Son muy malas las canciones</p>
                                <p class="card-text"><small class="text-muted"> 
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card  mb-3">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><img src="images/avatar/3.jpg"  class="card-img imagenCardUser rounded-pill mr-2"> Martin Villa</h5>
                                <p class="card-text">Queen no me gusta para nada. Son muy malas las canciones</p>
                                <p class="card-text"><small class="text-muted"> 
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card  mb-3">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><img src="images/avatar/4.jpg"  class="card-img imagenCardUser rounded-pill mr-2"> Sebastian Savedra</h5>
                                <p class="card-text">Queen no me gusta para nada. Son muy malas las canciones</p>
                                <p class="card-text"><small class="text-muted"> 
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="fas text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i>
                                    <i class="far text-dark d-inline fa-1x fa-star"></i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="js/mediaInfo.js"><?php echo '</script'; ?>
><?php }
}
