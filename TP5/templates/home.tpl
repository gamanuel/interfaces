{include file="header.tpl"}

<section class="home-primary-bg">
    <div class="container">
        <div class="row text-white text-center ">
            <div class="col-md-3"></div>
            <div class="col-md-6 marginTop-10">
                <h2 class="titleHome"> <span class="fontLight">Escucha tu musica</span> <br> <span class="fontBlack"></span>donde quieras, cuando quieras</span>
                </h2>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-4"><button class="btn btn-yellow btn-block">Empezar ahora</button></div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="color-yellow fontBlack">TENDENCIA</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="color-black fontBlack">Álbumes</h3>
            </div>
        </div>
        <div class="row">
            {foreach from=[1,2,3,4] item=item }
            <div class="col-6 col-md-3 col-lg-3 p-4">
                <img src="https://img.discogs.com/i-3zFLbT4-s6Dm_0Fs5zg3nmQ4w=/fit-in/600x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-12252821-1535317927-2134.jpeg.jpg" alt="..." class="img-thumbnail">
            </div>
            {/foreach}
        </div>
    </div>
</section>

<article class=" mt-5 bg-yellow">
    <div class="container">
        <div class="row">
            <div class="col-md-12   text-center">
                <h5 class="fontBold mt-4">Todavia no tenes una cuenta?</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-md-5">
            </div>
            <div class="col-6 col-md-2 text-center mt-2 mb-4">
                <button class="btn btn-block btn-blue"> Registrarse</button>
            </div>
            <div class="col-3 col-md-5">
            </div>
        </div>
    </div>
</article>

<div class="modal fade" data-backdrop="static" data-keyboard="false" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-blue">
            <div class="modal-header">
                <h5 class="modal-title text-white">Iniciar Sesión</h5>
                <button type="button" class="text-white close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>
            <div class="modal-body bg-blue text-white">

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="user" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                    <div class="text-center text-danger" id="alertContainer"></div>

                    <button type="button" class="btn mt-4 btn-block btn-yellow" id="btnLogin">Iniciar Sesion</button>
                    <button type="button" class="btn mt-3  btn-block btn-outline-light">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>




{include file="footer.tpl"}
<script src="js/home.js"></script>



</body>

</html>