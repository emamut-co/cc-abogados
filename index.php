<?php get_header();

$areasArray = new WP_Query(array(
  'post_type' => 'areas-de-practica',
  'post_status' => 'publish'
)); ?>

  <div class="container mx-auto">
    <div class="row justify-content-end mt-4">
      <div class="col text-right">
        <ul class="list-inline" id="social-icons">
          <li class="list-inline-item px-3">
            <a href="#" class="mr-3">
              <i class="fab fa-facebook-f fa-lg"></i>
            </a>
          </li>
          <li class="list-inline-item px-3">
            <a href="#" class="mr-3">
              <i class="fab fa-instagram fa-lg"></i>
            </a>
          </li>
          <li class="list-inline-item px-3">
            <a href="#" class="mr-3">
              <i class="fab fa-linkedin-in fa-lg"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-2">
        <img src="<?php echo get_template_directory_uri() ?>/images/lustitia.png" alt="" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2 class="title font-blue">Compromiso y experiencia</h2>
        <h3 class="subtitle font-golden">al servicio de tu caso</h3>
        <p class="mt-3">Si necesitas asesoría en tus conflictos, nuestro equipo jurídico está aquí para ayudarte.</p>

        <a href="#" class="btn btn-dark btn-action">Solicita asesoría gratuita</a>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <p class="font-golden">Áreas de práctica</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <ul class="list-inline" id="areas-de-practica">
        <?php while($areasArray->have_posts()): $areasArray->the_post() ?>
          <li class="list-inline-item"><?php echo the_title() ?></li>
        <?php endwhile ?>
        </ul>
      </div>
    </div>
  </div>

<?php get_footer() ?>