{include file="headerUser.tpl"}

<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h3 class="border-bottom fontBold">{$id}</h3>
            </div>
        </div>
    </div>

    {if $id == 'Tus playlists'}
    <div class="container pl-4 pr-4">
        {foreach from=[1,2,3,4,5,6,7,8] item=item} {include file="componentePlaylist.tpl"} {/foreach}
    </div>
    {else}
    <div class="container pl-4 pr-4">
        {foreach from=[1,2,3,4,5,6,7,8] item=item} {include file="componenteMultimedia.tpl"} {/foreach}
    </div>
    {/if}
</section>


{include file="footer.tpl"}