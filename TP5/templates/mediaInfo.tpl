{include file="headerUser.tpl"}

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
            {foreach from=[1,2,3,4,5] item=item }
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

            {/foreach}

        </div>
    </div>

</section>

{include file="footer.tpl"}