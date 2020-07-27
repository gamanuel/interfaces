{include file="headerUser.tpl"}

<input type="hidden" value="{$id}" id="mediaId">

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
                        <p id="songDetail">​</p>
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
            <div class="col-md-9 mt-2">
                <textarea class="form-control" id="opinionText" placeholder="Danos tu opinion..." rows="2"></textarea>
            </div>
            <div class="col-md-3 text-center my-auto mt-2 pointer">
                <div class="my-auto d-flex  starDivContainer">
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="1"></i>
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="2"></i>
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="3"></i>
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="4"></i>
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="5"></i>
                        </div>
            </div>

        </div>
        <div class="row mt-2">
            <div class="col-md-9">

            </div>
            <div class="col-md-3">
                <button class="btn btn-blue btn-block btn-sm mt-2" id="publishOpinion">Publica tu opinión</button>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row" id="opinionsDiv">
            <div class="col-md-6">
                <div class="card  mb-3">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSAkjktNk_waKZ6A064JikKQRYLxoKPNIUR_g&usqp=CAU" class="card-img imagenCardUser rounded-pill mr-2"> Yanina Latorre</h5>
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
                                <h5 class="card-title"><img src="images/avatar/2.jpg" class="card-img imagenCardUser rounded-pill mr-2"> Manuel Rivas</h5>
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
                                <h5 class="card-title"><img src="images/avatar/3.jpg" class="card-img imagenCardUser rounded-pill mr-2"> Martin Villa</h5>
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
                                <h5 class="card-title"><img src="images/avatar/4.jpg" class="card-img imagenCardUser rounded-pill mr-2"> Sebastian Saavedra</h5>
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

{include file="footer.tpl"}
<script src="js/mediaInfo.js"></script>