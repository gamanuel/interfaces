{include file="header.tpl"}

<section class="home-primary-bg">
    <div class="container">
        <div class="row text-white text-center ">
            <div class="col-md-3"></div>
            <div class="col-md-6 marginTop-10">
                <h2 class="titleHome"> <span class="fontLight">Escuchá tu música</span> <br> <span class="fontBlack"></span>donde quieras, cuando quieras</span>
                </h2>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-3 col-md-4"></div>
            <div class="col-6 col-md-4 mt-4"><button class="btn btn-yellow btn-block" data-toggle="modal" data-target="#loginModal">Empezar ahora</button></div>
            <div class="col-3 col-md-4"></div>
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
                <h3 class="color-black fontBlack">Canciones</h3>
            </div>
        </div>
        <div class="row">
            {foreach from=[1,2,3,4] item=item key=list}
            <div class="col-6 col-md-3 col-lg-3 p-4">
                <img src="images/songs/{$list}.jpg" alt="..." class="img-thumbnail">
            </div>
            {/foreach}
        </div>
    </div>
</section>

<article class=" mt-5 bg-yellow">
    <div class="container">
        <div class="row">
            <div class="col-md-12   text-center">
                <h5 class="fontBold mt-4">¿Todavía no tenés una cuenta?</h5>
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

                    <div class=" text-center text-danger" id="alertContainer"></div>

                    <button type="button" class="btn mt-4 btn-block btn-yellow" id="btnLogin">Iniciar Sesión</button>

                    <div class="text-center mt-3">
                        <a href="" class="text-center text-white ">¿Aún no tenés cuenta? Registrate aquí</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



{include file="footerPage.tpl"} {include file="footer.tpl"}
<script src="js/home.js"></script>



</body>

</html>