<?php
/* Smarty version 4.3.4, created on 2024-11-18 22:09:33
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673c0f7db37fa7_18303911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_673c0f7db37fa7_18303911 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Contenedor carrusel ">
              <li class="carousel-item active" role="option" aria-hidden="false">
                      <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/dd9040ddd74e2a87e590b97ccb798ba4b0f8dd9f_1.png" alt="" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">¡Bienvenido a Camino de la Sierra!</h2>
                  <div class="caption-description"><p>Te invitamos a explorar nuestro catálogo y descubrir la diversidad de estilos y técnicas que hacen de nuestras artesanías algo verdaderamente especial. En Camino de la Sierra, cada compra es una conexión con la historia, el arte y la tradición de nuestra tierra.</p>
<p></p></div>
                </figcaption>
                          </figure>
                  </li>
              <li class="carousel-item " role="option" aria-hidden="true">
                      <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/afaa86a43f988982a2ac8a5a97a038868b96bb1b_2.png" alt="" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Envíos a toda la república mexicana</h2>
                  <div class="caption-description"><p>Como norma general, los paquetes se envían dentro de las 48 horas siguientes a la recepción del pago, través de UPS con número de seguimiento y entrega sin firma.</p></div>
                </figcaption>
                          </figure>
                  </li>
              <li class="carousel-item " role="option" aria-hidden="true">
                      <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/c0ad02e9dcd56610ce13ef85395b162535b57b3f_3.png" alt="" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Descubre nuestras ofertas</h2>
                  <div class="caption-description"><p>¡Estate atento a las promociones de nuestros productos!</p></div>
                </figcaption>
                          </figure>
                  </li>
          </ul>
    <div class="direction" aria-label="Botones del carrusel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Anterior">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Siguiente">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
