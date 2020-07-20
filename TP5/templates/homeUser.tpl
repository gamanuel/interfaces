{include file="headerUser.tpl"}

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
                        <div class="row ">
                            <div class="col-md-8">
                            </div>
                            <div class="col-12 col-lg-4  text-right">
                                <a href="library/recomendaciones" class="btn btn-yellow btn-block" data-id="featured">Descubrilas</a>
                            </div>
                        </div>
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
                        <div class="row">
                            <div class="col-md-8">
                            </div>
                            <div class="col-12 col-lg-4 text-right">
                                <a href="library/playlists" class="btn btn-yellow btn-block" data-id="playlists">Escuchalas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-0 mt-3 col-md-6">
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
                            <div class="col-12 col-lg-4 text-right">
                                <button class="btn btn-block btn-yellow" data-id="cummunity">Unite al grupo</button>
                            </div>
                        </div>
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
                        <div class="row">
                            <div class="col-md-8">
                            </div>
                            <div class="col-12 col-lg-4 text-right">
                                <a href="library/favoritos" class="btn btn-yellow btn-block" data-id="favorite">Recordalos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


{include file="player.tpl"} {include file="footer.tpl"}

<script src="js/homeUser.js"></script>

</body>

</html>