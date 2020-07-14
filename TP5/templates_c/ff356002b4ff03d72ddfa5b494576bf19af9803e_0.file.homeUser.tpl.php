<?php
/* Smarty version 3.1.32, created on 2020-07-13 21:15:08
  from 'C:\xampp\htdocs\spofiy\templates\homeUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f0cf90c3c8007_97848767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff356002b4ff03d72ddfa5b494576bf19af9803e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spofiy\\templates\\homeUser.tpl',
      1 => 1594685707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f0cf90c3c8007_97848767 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <button class="btn btn-yellow btn-block" data-id="featured">Escuchar ahora</button>
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
                        <button class="btn btn-yellow btn-block" data-id="playlists">Escuchar ahora</button>
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
                        <button class="btn btn-yellow btn-block" data-id="favorite">Escuchar ahora</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<div class="bg-yellow  position-fixed" style="bottom: 0; width: 100%;">

    <div class="container">

        <div class="row">
            <div class="col-md-1">
                <img src="https://img.discogs.com/i-3zFLbT4-s6Dm_0Fs5zg3nmQ4w=/fit-in/600x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-12252821-1535317927-2134.jpeg.jpg" alt="..." width="60" class="p-1">
            </div>
            <div class="col-md-3 text-left">
                <p>Titulo Cancion</p>
            </div>
            <div class="col-md-1">
                <p><i class="far fa-2x align-middle fa-heart"></i></p>
            </div>
            <div class="col-md-1">
                <button class="btn btn-sm btn-outline-black"><i class="far fa-heart"></i></button>
            </div>
            <div class="col-md-1">
                <button class="btn btn-sm btn-outline-black"><i class="fas fa-share-alt"></i></button>
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