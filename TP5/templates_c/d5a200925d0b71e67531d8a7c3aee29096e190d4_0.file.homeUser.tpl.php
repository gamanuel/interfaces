<?php
/* Smarty version 3.1.32, created on 2020-07-16 20:21:26
  from 'C:\xampp\htdocs\interfaces\TP5\templates\homeUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f10e0f6c23989_71612382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5a200925d0b71e67531d8a7c3aee29096e190d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\homeUser.tpl',
      1 => 1594941678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f10e0f6c23989_71612382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="mb-4">
    <div class="container">

        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h3 class="border-bottom fontBold">Home</h3>
            </div>
        </div>
        <div class="card-deck">
            <div class="col-12 px-0 mt-3 col-md-6">
                <div class="card bg-dark text-white">
                    <img src="images/cardBackground.jpg" class="card-img cardImage" alt="...">
                    <div class="card-img-overlay">
                        <label class="color-yellow">NUESTRAS</label>
                        <h4 class="card-title fontBold">Recomendaciones</h4>
                        <p class="card-text">Podras escuchar todas las canciones que nuestro equipo ha seleccionado especialmente para vos.
                        </p>
                        <p class="card-text"></p>
                        <a href="library/recomendaciones" class="btn btn-yellow btn-block" data-id="featured">Escuchar ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 mt-3 col-md-6">
                <div class="card bg-dark text-white">
                    <img src="images/cardBackground.jpg" class="card-img cardImage" alt="...">
                    <div class="card-img-overlay">
                        <label class="color-yellow">TUS</label>
                        <h4 class="card-title fontBold">Playlists</h4>
                        <p class="card-text">Creá tus listas, compartilas con tus amigos, agrega toda la musica que quieras, donde quieras.
                        </p>
                        <p class="card-text"></p>
                        <a  href="library/playlists" class="btn btn-yellow btn-block" data-id="playlists">Escuchar ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 mt-3 col-md-6">
                <div class="card bg-dark text-white">
                    <img src="images/cardBackground.jpg" class="card-img cardImage" alt="...">
                    <div class="card-img-overlay">
                        <label class="color-yellow">COMUNIDAD</label>
                        <h4 class="card-title fontBold">Ayudanos a mejorar</h4>
                        <p class="card-text">Valora lo que escuches y se parte de la comunidad de spofiy, asd asd asd asd asd asdas asda asd.
                        </p>
                        <p class="card-text"></p>
                        <button class="btn btn-yellow btn-block" data-id="cummunity">Escuchar ahora</button>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 mt-3 col-md-6">
                <div class="card bg-dark text-white">
                    <img src="images/cardBackground.jpg" class="card-img cardImage" alt="...">
                    <div class="card-img-overlay">
                        <label class="color-yellow">TUS</label>
                        <h4 class="card-title fontBold">Favoritos</h4>
                        <p class="card-text">Las canciones que más te gustan, todas juntas en un solo lugar. Disfrutá cada momento.
                        </p>
                        <p class="card-text"></p>
                        <a href="library/favoritos" class="btn btn-yellow btn-block" data-id="favorite">Escuchar ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<div class=" position-fixed" style="bottom: 0; width: 100%;">
    <div class="bg-yellow">

        <div class="container playerDesktop">
            <div class="row h-100">
                <div class="col-md-12 d-flex ">
                    <img src="https://img.discogs.com/i-3zFLbT4-s6Dm_0Fs5zg3nmQ4w=/fit-in/600x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-12252821-1535317927-2134.jpeg.jpg" alt="..." width="60" class="my-auto ">
                    <div class="mx-3">
                        <p class="mx-2 text-black m-0 d-block"> <strong> Titulo Canción</strong></p>
                        <small class="mx-2 text-black d-block text-white"> <strong> Artista</strong></small>
                        <small class="mx-2 text-black d-block"> <strong> 100 visitas</strong></small>
                    </div>
                    <div class="my-auto ml-5 mr-2">
                        <i class="align-middle my-auto  far fa-1x fa-heart"></i>
                    </div>
                    <div class="my-auto ml-3 mr-2">
                        <button class="btn btn-sm btn-outline-black "><i class="fas fa-folder-plus"></i></button>
                    </div>
                    <div class="my-auto ml-2 mr-5">
                        <button class="btn btn-sm btn-outline-black "><i class="fas fa-share-alt"></i></button>
                    </div>
                    <div class="my-auto text-black mx-5">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="my-auto mx-5 text-black d-flex">
                        <i class=" my-auto fas fa-volume-up"></i>
                        <input type="range" class="ml-2 form-control-range custom-range" id="formControlRange">
                    </div>
                    <div class="my-auto mx-5 text-black">
                        <i class="fas  fa-step-backward mx-2"></i>
                        <i class="fas fa-play mx-2"></i>
                        <i class="fas fa-step-forward mx-2"></i>
                    </div>
                    <div class="ml-auto my-auto text-black">
                        <i class=" fas fa-times"></i>
                    </div>


                </div>
            </div>
        </div>
        <div class="container playerMobile">
            <div class="row h-100 " style="font-size: 1.2em;">
                <div class="col py-2 d-flex ">
                    <i class="my-auto pr-2 fas fa-1x fa-chevron-up pointer" data-toggle="collapse" href="#collapsePlayer"></i>
                    <div class="mx-2">
                        <p class="mx-2 text-black m-0 d-block"> <strong> Titulo Canción</strong></p>
                        <small class="mx-2 text-black d-block text-white"> <strong> Artista</strong></small>
                    </div>
                    <div class="my-auto mx-3 text-black">
                        <i class="fas   fa-step-backward mr-2"></i>
                        <i class="fas  fa-play mx-2"></i>
                        <i class="fas  fa-step-forward ml-2"></i>
                    </div>
                    <div class="ml-auto my-auto text-black">
                        <i class=" fas fa-times"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue shadow collapse" id="collapsePlayer">
            <div class="container">
                <div class="row text-white">
                    <div class="col border-bottom text-center pt-3">
                        <p>Visitas: 400</p>
                    </div>
                </div>
                <div class="row text-white">
                    <div class="col border-bottom text-center pt-3">
                        <div class="pb-3 d-flex">
                            <i class=" my-auto fas fa-volume-up"></i>
                            <input type="range" class="ml-2 form-control-range custom-range" id="formControlRange">
                        </div>
                    </div>
                </div>
                <div class="row text-white">
                    <div class="col border-bottom text-center pt-3 ">
                        <div class="pb-3 d-flex ">
                            <i class="my-auto mx-auto far fa-2x fa-heart"></i>
                            <button class="mx-auto  btn btn-outline-light "><i class="fas fa-folder-plus"></i></button>
                            <button class="mx-auto  btn  btn-outline-light "><i class="fas fa-share-alt"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row text-white">
                    <div class="col border-bottom text-center pt-3 ">
                        <div class="pb-3 d-flex ">
                            <i class="far mx-auto fa-2x fa-star"></i>
                            <i class="far mx-auto fa-2x fa-star"></i>
                            <i class="far mx-auto fa-2x fa-star"></i>
                            <i class="far mx-auto fa-2x fa-star"></i>
                            <i class="far mx-auto fa-2x fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="js/homeUser.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
