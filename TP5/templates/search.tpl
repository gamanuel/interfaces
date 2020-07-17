{include file="headerUser.tpl"}

<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h3 class="border-bottom fontBold">Tu busqueda: <span class="fontLight">{$id}</span></h3>
            </div>
        </div>
    </div>
  
    <div class="container pl-4 pr-4">
        {foreach from=[1,2,3,4] item=item} {include file="componenteMultimedia.tpl"} {/foreach}
    </div>

   

</section>


{include file="footer.tpl"}