<?php get_header();

$areasArray = new WP_Query(array(
  'post_type' => 'areas-de-practica',
  'post_status' => 'publish'
));

$ourTeamArray = new WP_Query(array(
  'post_type' => 'nuestro-equipo',
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
        <h2 class="main-title font-blue">Compromiso y experiencia</h2>
        <h3 class="main-subtitle font-golden">al servicio de tu caso</h3>
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

    <div class="row mt-5">
      <div class="col">
        <h3 class="subtitle">Nuestro equipo</h3>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6">
        <p>C&C Abogados ofrece asesoramiento legal y defensa judicial. Analizamos el caso y buscamos la solución más adecuada para nuestros clientes.</p>
      </div>
    </div>
    <div class="row-cols-1 mt-3" id="our-team">
    <?php while($ourTeamArray->have_posts()): $ourTeamArray->the_post() ?>
      <div class="col mb-3">
        <div class="card border-0">
          <div class="row no-gutters">
            <div class="col-md-3 rounded-lg">
              <?php the_post_thumbnail('full', ['class' => 'card-img']) ?>
            </div>
            <div class="col-md-9">
              <div class="card-body">
                <h5 class="card-title font-golden"><?php echo the_title() ?></h5>
                <p class="card-text"><?php the_content() ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile ?>
    </div>
  </div>
<?php get_footer() ?>