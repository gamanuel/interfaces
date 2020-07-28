{include file="headerUser.tpl"}

<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <input type="hidden" value="{$id}" id="searchInputValue">
                <h3 class="border-bottom fontBold tituloPage">Tu busqueda: <span class="fontLight">{$id}</span></h3>
            </div>
            <div class="col-md-12">
                <span class="badge badge-pill badge-secondary">Canciones</span>
                <span class="badge badge-pill badge-secondary">Playlists</span>
            </div>
        </div>
    </div>

    <div class="container pl-4 pr-4">
        <div class="row" id="cancionTitle">

        </div>
        <div class="row" id="searchContainer">

        </div>
    </div>



</section>


{include file="player.tpl"}
{include file="footerPage.tpl"} {include file="footer.tpl"}