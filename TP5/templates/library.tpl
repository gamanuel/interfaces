{include file="headerUser.tpl"}

<section class="marginBottom6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h3 class="border-bottom fontBold">{$id}</h3>
            </div>
        </div>
    </div>

    {if $id == 'Tus playlists'}
    <div class="container pl-4 pr-4">
        <div class="row">
            <div class="row" id="playlistContainer">

            </div>
        </div>
    </div>
    {else}
    <div class="container pl-4 pr-4">
        <div class="row" id="musicContainer">

        </div>
    </div>
    {/if}
</section>

 {include file="footer.tpl"}
<script src="js/library.js"></script>
{include file="player.tpl"}