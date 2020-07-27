<?php
/* Smarty version 3.1.32, created on 2020-07-27 12:42:49
  from 'C:\xampp\htdocs\interfaces\TP5\templates\homeUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f1ef5f970f9b8_58777987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5a200925d0b71e67531d8a7c3aee29096e190d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\homeUser.tpl',
      1 => 1595864428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:player.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f1ef5f970f9b8_58777987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="mb-4">
    <div class="container">

        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h3 class="border-bottom fontBold tituloPage">Home</h3>
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
                        <div class="row ">
                            <div class="col-md-8">
                            </div>
                            <div class="col-12 col-lg-4  text-right rotateAnimationHome">
                                <a href="library/recomendaciones" class="btn btn-yellow btn-block" data-id="featured">Descubrilas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 mt-3 col-md-6">
                <div class="card bg-dark text-white ">
                    <img src="images/cardBackground.jpg" class="card-img cardImage" alt="...">
                    <div class="card-img-overlay">
                        <label class="color-yellow">TUS</label>
                        <h4 class="card-title fontBold">Playlists</h4>
                        <p class="card-text">Creá tus listas, compartilas con tus amigos, agrega toda la musica que quieras, donde quieras.
                        </p>
                        <p class="card-text"></p>
                        <div class="row">
                            <div class="col-md-8">
                            </div>
                            <div class="col-12 col-lg-4 text-right rotateAnimationHome">
                                <a href="library/playlists" class="btn btn-yellow btn-block" data-id="playlists">Escuchalas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-12 px-0 mt-4 col-md-6">
                <div class="card bg-dark text-white">
                    <img src="images/cardBackground.jpg" class="card-img cardImage" alt="...">
                    <div class="card-img-overlay">
                        <label class="color-yellow">TUS</label>
                        <h4 class="card-title fontBold">Favoritos</h4>
                        <p class="card-text">Las canciones que más te gustan, todas juntas en un solo lugar. Disfrutá cada momento.
                        </p>
                        <p class="card-text"></p>
                        <div class="row">
                            <div class="col-md-8">
                            </div>
                            <div class="col-12 col-lg-4 text-right rotateAnimationHome">
                                <a href="library/favoritos" class="btn btn-yellow btn-block" data-id="favorite">Recordalos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-12 px-0 mt-4 col-md-6">
                <div class="card bg-dark text-white">
                    <img src="images/cardBackground.jpg" class="card-img cardImage" alt="...">
                    <div class="card-img-overlay">
                        <label class="color-yellow">COMUNIDAD</label>
                        <h4 class="card-title fontBold">Ayudanos a mejorar</h4>
                        <p class="card-text">Valora lo que escuches y se parte de la comunidad de spofiy, animate y dejanos tu comentario...
                        </p>
                        <p class="card-text"></p>
                        <div class="row">
                            <div class="col-md-8">
                            </div>
                            <div class="col-12 col-lg-4 text-right rotateAnimationHome">
                                <button class="btn btn-block btn-yellow" data-id="cummunity">Unite al grupo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php $_smarty_tpl->_subTemplateRender("file:player.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="js/homeUser.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
