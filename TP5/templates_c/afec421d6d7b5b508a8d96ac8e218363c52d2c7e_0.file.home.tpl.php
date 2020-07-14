<?php
/* Smarty version 3.1.32, created on 2020-07-09 12:45:42
  from 'C:\xampp\htdocs\wifisan-dashboard\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f073ba62d91c0_29410617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afec421d6d7b5b508a8d96ac8e218363c52d2c7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wifisan-dashboard\\templates\\home.tpl',
      1 => 1594309540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f073ba62d91c0_29410617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-block btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="far fa-calendar-alt"></i> <span class="badge badge-pill badge-success">Comercio: Todos</span> <span class="badge badge-info">Desde: dd-mm-YYYY</span> <span class="badge badge-primary">Hasta: dd-mm-YYYY</span>
            </button>
        </div>
    </div>
    <div class="row mt-2 mb-2">
        <div class="col-md-12">
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="row border-bottom">
                        <div class="col-md-12  mb-2">
                            <label for="">Seleccione local</label>
                            <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                <option selected>Seleccione local</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-8">
                            <label for="">Filtro personalizado</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-md-12">
                                    <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-1">
                                    <button class="btn btn-sm btn-block btn-success">Confirmar </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="">Filtro basico</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-block btn-outline-dark">Ultimo Mes</button>
                                </div>
                                <div class="col-md-12 mt-1">
                                    <button class="btn btn-sm btn-block btn-outline-dark">Ultimo Trimestre</button>
                                </div>
                                <div class="col-md-12 mt-1">
                                    <button class="btn btn-sm btn-block btn-outline-dark">Ultimo </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="card text-white  mb-3 pointer" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus labore esse, ut suscipit a dignissimos soluta qui corrupti mollitia cumque quo quae non in! Aperiam, nulla doloremque. Fugit, aspernatur ipsum?"
                style="background-color: #264653;" style="max-width: 18rem;">
                <div class="card-header">Rend de Datos</div>
                <div class="card-body">
                    <h3 class="card-title text-center">40%</h3>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-white  mb-3 pointer" style="background-color: #E9C46A;" style="max-width: 18rem;" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus labore esse, ut suscipit a dignissimos soluta qui corrupti mollitia cumque quo quae non in! Aperiam, nulla doloremque. Fugit, aspernatur ipsum?">
                <div class="card-header">Rend de Datos</div>
                <div class="card-body">
                    <h3 class="card-title text-center">40%</h3>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-white  mb-3 pointer" style="background-color: #2A9D8F;" style="max-width: 18rem;" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus labore esse, ut suscipit a dignissimos soluta qui corrupti mollitia cumque quo quae non in! Aperiam, nulla doloremque. Fugit, aspernatur ipsum?">
                <div class="card-header">Rend de Datos</div>
                <div class="card-body">
                    <h3 class="card-title text-center">40%</h3>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-white  mb-3 pointer" style="background-color: #F4A261;" style="max-width: 18rem;" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus labore esse, ut suscipit a dignissimos soluta qui corrupti mollitia cumque quo quae non in! Aperiam, nulla doloremque. Fugit, aspernatur ipsum?">
                <div class="card-header">Rend de Datos</div>
                <div class="card-body">
                    <h3 class="card-title text-center">40%</h3>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-white  mb-3 pointer" style="background-color: #E76F51;" style="max-width: 18rem;" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus labore esse, ut suscipit a dignissimos soluta qui corrupti mollitia cumque quo quae non in! Aperiam, nulla doloremque. Fugit, aspernatur ipsum?">
                <div class="card-header">Rend de Datos</div>
                <div class="card-body">
                    <h3 class="card-title text-center">40%</h3>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-white  mb-3 pointer" style="background-color: #264653;" style="max-width: 18rem;" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus labore esse, ut suscipit a dignissimos soluta qui corrupti mollitia cumque quo quae non in! Aperiam, nulla doloremque. Fugit, aspernatur ipsum?">
                <div class="card-header">Rend de Datos</div>
                <div class="card-body">
                    <h3 class="card-title text-center">40%</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="card  mb-3">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-10 col-md-11">
                            <i class="fas fa-info-circle pointer" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus labore esse, ut suscipit a dignissimos soluta qui corrupti mollitia cumque quo quae non in! Aperiam, nulla doloremque. Fugit, aspernatur ipsum?"></i>                            <strong>Evolución de sesiones</strong>
                        </div>
                        <div class="col-2 col-md-1 text-right pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown">
                                <i class="fas fa-ellipsis-v  pointer"></i>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> Exportar a
                                        Excel</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-image"></i> Descargar Imagen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas class="bg-white rounded myChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card  mb-3">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-10 col-md-11">
                            <i class="fas fa-info-circle pointer" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus labore esse, ut suscipit a dignissimos soluta qui corrupti mollitia cumque quo quae non in! Aperiam, nulla doloremque. Fugit, aspernatur ipsum?"></i>                            <strong>Tipo de acceso</strong>
                        </div>
                        <div class="col-2 col-md-1 text-right pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown">
                                <i class="fas fa-ellipsis-v  pointer"></i>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fas fa-file-excel"></i> Exportar a
                                        Excel</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-image"></i> Descargar Imagen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas class="bg-white rounded myChart1"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body><?php }
}
