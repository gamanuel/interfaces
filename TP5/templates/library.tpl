{include file="headerUser.tpl"}

<section class="marginBottom6">
    <div class="container">
        <div class="row border-bottom ">
            {if $id == 'Tus playlists'}
            <div class="col-10 col-md-11 mt-3 ">
                <h3 class="fontBold">{$id}</h3>
            </div>
            <div class="col-2 col-md-1 mt-3 text-right">
                <button class="btn  btn-outline-black btn-sm" data-toggle="modal" data-target="#modalPlaylist"><i class="fas fa-plus"></i></button>
            </div>
            {else}
            <div class="col-md-12 mt-3 ">
                <h3 class=" fontBold">{$id}</h3>
            </div>
            {/if}
        </div>
    </div>

    {if $id == 'Tus playlists'}
    <div class="container pl-4 pr-4">
        <div class="row" id="playlistContainer">

        </div>
    </div>
    {else}
    <div class="container pl-4 pr-4">
        <div class="row" id="musicContainer">

        </div>
    </div>
    {/if}
</section>

<div class="modal fade" id="modalAddToPlaylist" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-blue">
      <div class="modal-header">
        <h5 class="modal-title text-white"> Agregar a una playlist</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white">
        <label > Canción: <strong id="songNameAddToPlaylist"></strong> </label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Seleccione una playlist</option>
            <option>Previa</option>
            <option>Musica para gym</option>
            <option>Cachengue</option>
            <option>Tropical House</option>
            <option>Deep House</option>
            <option>Para la Oficina</option>
            <option>Relajante</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-yellow">Confirmar</button>
      </div>
    </div>
  </div>
</div>

{include file="footer.tpl"}
<script src="js/library.js?v1.3"></script>
{include file="player.tpl"}



<div class="modal fade" tabindex="-1" id="modalPlaylist" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-blue">
            <div class="modal-header bg-blue text-white">
                <h5 class="modal-title fontRegular">Nueva Playlist</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>
            <div class="modal-body bg-blue text-white">
                <label for="">Nombre de playlist</label>
                <input type="text" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-yellow">Confirmar</button>
            </div>
        </div>
    </div>
</div>