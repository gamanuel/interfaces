<div class=" position-fixed d-none" id="player" style="bottom: 0; width: 100%;">
    <div class="bg-yellow">

        <div class="container playerDesktop">
            <div class="row h-100">
                <div class="col-md-12 d-flex ">
                    <img src=""  alt="..." width="60" class="my-auto rounded mediaImagePlayer">
                    <div class="mx-3 pointer mediaDetail">
                        <p class="mx-2 text-black m-0 d-block  mediaNamePlayer text-truncate" style="max-width: 130px;"> <strong> </strong></p>
                        <small class="mx-2 text-black d-block text-white mediaArtistPlayer text-truncate" style="max-width: 130px;"> <strong> </strong></small>
                        <small class="mx-2 text-black d-block"> <strong> 100 visitas</strong></small>
                    </div>
                    <div class="my-auto ml-5 mr-2 pointer ">
                        <h5 class="my-auto ">
                            <i class="align-middle likeButton my-auto  text-black far fa-1x fa-heart likeButton" ></i>
                        </h5>
                    </div>
                    <div class="my-auto ml-3 mr-2">
                        <button class="btn btn-sm btn-outline-black "><i class="fas fa-folder-plus"></i></button>
                    </div>
                    <div class="my-auto ml-2 mr-5">
                        <button class="btn btn-sm btn-outline-black "><i class="fas fa-share-alt"></i></button>
                    </div>
                    <div class="my-auto text-black mx-5 starDivContainer pointer">
                        <i class="far fa-star rateDesktop pointer " data-id="1"></i>
                        <i class="far fa-star rateDesktop pointer " data-id="2"></i>
                        <i class="far fa-star rateDesktop pointer " data-id="3"></i>
                        <i class="far fa-star rateDesktop pointer " data-id="4"></i>
                        <i class="far fa-star rateDesktop pointer " data-id="5"></i>
                    </div>
                    <div class="my-auto mx-5 text-black d-flex">
                        <i class=" my-auto fas fa-volume-up"></i>
                        <input type="range" class="ml-2 form-control-range custom-range" id="formControlRange">
                    </div>
                    <div class="my-auto mx-5 text-black">
                        <i class="fas  fa-step-backward mx-2"></i>
                        <i class="fas fa-play pointer mx-2 playBtnChange"></i>
                        <i class="fas fa-step-forward mx-2"></i>
                    </div>
                    <div class="ml-auto my-auto text-black pointer">
                        <i class=" fas fa-times closePlayer "></i>
                    </div>


                </div>
            </div>
        </div>
        <div class="container playerMobile">
            <div class="row h-100 " style="font-size: 1.2em;">
                <div class="col py-2 d-flex ">
                    <i class="my-auto pr-2 fas fa-1x fa-chevron-up pointer" data-toggle="collapse" href="#collapsePlayer" id="arrowOpenPlayer"></i>
                    <div class="mx-2 mediaDetail">
                        <p class="mx-2 text-black m-0 d-block mediaNamePlayer text-truncate" style="max-width: 130px;"> <strong> </strong></p>
                        <small class="mx-2 text-black d-block text-white mediaArtistPlayer text-truncate" style="max-width: 130px;"> <strong> </strong></small>
                    </div>
                    <div class="my-auto mx-3 text-black">
                        <i class="fas   fa-step-backward mr-2"></i>
                        <i class="fas  fa-play pointer mx-2 playBtnChange"></i>
                        <i class="fas  fa-step-forward ml-2"></i>
                    </div>
                    <div class="ml-auto my-auto text-black pointer">
                        <i class=" fas fa-times closePlayer"></i>
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
                            <i class="my-auto mx-auto far fa-2x fa-heart Mobile text-white likeButton" ></i>
                            <button class="mx-auto  btn btn-outline-light "><i class="fas fa-folder-plus"></i></button>
                            <button class="mx-auto  btn  btn-outline-light "><i class="fas fa-share-alt"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row text-black">
                    <div class="col border-bottom text-center text-white pt-3 ">
                        <div class="pb-3 d-flex ">
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="1"></i>
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="2"></i>
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="3"></i>
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="4"></i>
                            <i class="far mx-auto fa-2x fa-star rateDesktop " data-id="5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/player.js"></script>