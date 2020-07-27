<?php
/* Smarty version 3.1.32, created on 2020-07-27 12:26:31
  from 'C:\xampp\htdocs\interfaces\TP5\templates\faqs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f1ef2278c93f2_04071346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90d79d0f11833979b8bfaf8e00e3da64ffb8c615' => 
    array (
      0 => 'C:\\xampp\\htdocs\\interfaces\\TP5\\templates\\faqs.tpl',
      1 => 1595863589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerUser.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f1ef2278c93f2_04071346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerUser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 ">
                <h3 class="border-bottom fontBold">FAQS</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="accordion " id="accordionExample">
                    <div class="card">
                        <div class="card-header bg-blue d-flex pointer faqsDiv" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="headingOne" data-id="1">
                            <p class="mb-0 d-inline py-2">

                                ¿Qué tipo de servicio de música es Spofiy?

                            </p>
                            <h5 class="d-inline  my-auto ml-auto "><i class="my-auto pr-2 fas fa-1x fa-chevron-up arrowFAQS pointer" data-id="1"></i></h5>

                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Spofiy es un servicio de música en la nube que ofrece millones de pistas completas. En lugar de comprar y descargar canciones como si usara un servicio tradicional. Spofiy usa audio de transmisión continua para entregar música digital. Un formato de compresión
                                llamado Vorbis se usa para transmitir transmisiones de música a través de Internet con el audio que escucha que se reproduce a una velocidad de bits de 160 Kbps . Si se suscribe a algun plan de pago, esta calidad se duplica
                                a 320 Kbps.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-blue d-flex pointer faqsDiv" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" id="headingTwo" data-id="2">
                            <p class="mb-0 d-inline py-2">

                                ¿Ya se ha lanzado oficialmente Spofiy en mi país?

                            </p>
                            <h5 class="d-inline  my-auto ml-auto "><i class="my-auto pr-2 fas fa-1x fa-chevron-down arrowFAQS pointer" data-id="2"></i></h5>

                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Desde su lanzamiento en 2008, Spofiy ha lanzado constantemente su servicio de transmisión de música a varios países de todo el mundo. Puedes registrarte y suscribirte a Spofiy si actualmente vives en:
                                <hr>Argentina - Australia - Austria - Bélgica - Dinamarca - Islas Faroe - Finlandia - Francia - Alemania - Países Bajos - Nueva Zelanda - Noruega - España - Suecia - Suiza - Reino Unido - Estados Unidos.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-blue d-flex pointer faqsDiv" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" id="headingThree" data-id="3">
                            <p class="mb-0 d-inline py-2">

                                ¿Puedo acceder a Spofiy desde mi dispositivo móvil?

                            </p>
                            <h5 class="d-inline  my-auto ml-auto "><i class="my-auto pr-2 fas fa-1x fa-chevron-down arrowFAQS pointer" data-id="3"></i></h5>

                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body ">
                                Spofiy ahora admite una variedad de plataformas móviles que pueden usarse con su servicio de transmisión de música. Actualmente, hay aplicaciones web para: Android, iOS, BlackBerry, Windows Phone, Windows Mobile, S60 (Symbian) y webOS. Si se suscribe
                                a algun plan de pago, también tiene la capacidad de almacenar en caché las canciones sin conexión para que pueda escucharlas incluso cuando no esté conectado a Internet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="js/faqs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/homeUser.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
