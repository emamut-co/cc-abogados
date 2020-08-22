<?php get_header();

$areasArray = new WP_Query(array(
  'post_type'       => 'areas-de-practica',
  'post_status'     => 'publish',
  'posts_per_page'  => -1
));

$usersArray = get_users( array(
  'meta_key'    => 'sticky',
  'meta_value'  => 1
) );

$casesArray = new WP_Query(array(
  'post_type'       => 'casos',
  'post_status'     => 'publish',
  'posts_per_page'  => 4
)); ?>

  <div class="container mx-auto">
    <div class="row justify-content-end mt-5 pt-3">
      <div class="col text-right">
        <ul class="list-inline" id="social-icons">
          <li class="list-inline-item px-3">
            <a href="https://www.facebook.com/CCAbogadosEC" target="_blank" class="mr-3">
              <i class="fab fa-facebook-f fa-lg"></i>
            </a>
          </li>
          <li class="list-inline-item px-3">
            <a href="https://www.instagram.com/abogados_cc/" target="_blank" class="mr-3">
              <i class="fab fa-instagram fa-lg"></i>
            </a>
          </li>
          <!-- <li class="list-inline-item px-3">
            <a href="#" target="_blank" class="mr-3">
              <i class="fab fa-linkedin-in fa-lg"></i>
            </a>
          </li> -->
          <li class="list-inline-item px-3">
            <a href="https://twitter.com/abogados_cc" target="_blank" class="mr-3">
              <i class="fab fa-twitter fa-lg"></i>
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
        <h2 class="main-title text-blue">Compromiso y experiencia</h2>
        <h3 class="main-subtitle text-golden">al servicio de tu caso</h3>
        <p class="mt-3">Si necesitas asesoría en tus conflictos, nuestro equipo jurídico está aquí para ayudarte.</p>

        <a href="#" class="btn btn-dark btn-action">Solicita asesoría gratuita</a>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col">
        <p class="text-golden">Áreas de práctica</p>
      </div>
    </div>

    <div class="row">
      <div class="col border-bottom-golden" id="areas-de-practica">
        <ul class="list-inline">
        <?php while($areasArray->have_posts()): $areasArray->the_post() ?>
          <li class="list-inline-item"><a class="text-dark" href="#areas-identifier"><?php echo the_title() ?></a></li>
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

    <div class="row-cols-1 mt-3 border-bottom-golden pb-3" id="our-team">
    <?php foreach($usersArray as $user): ?>
      <div class="col mb-4">
        <div class="card border-0 bg-transparent">
          <div class="row no-gutters">
            <div class="col-md-3 rounded-lg">
              <img class="card-img" src="<?php echo get_avatar_url( $user->ID ) ?>" alt="">
            </div>
            <div class="col-md-9">
              <div class="card-body">
                <h5 class="card-title font-times text-golden"><?php echo $user->display_name ?></h5>
                <div class="row">
                  <div class="col-md-6">
                    <?php echo get_user_meta($user->ID, 'description', true) ?>
                  </div>
                  <div class="col-md-6">
                    <?php echo get_field('works', 'user_' . $user->ID) ?>
                    <a href="mailto:<?php echo $user->user_email ?>" class="text-golden"><i class="far fa-envelope"></i> Contáctese con <?php echo get_user_meta($user->ID, 'first_name', true) ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
    </div>
  </div>
  <div class="row mt-3" id="areas-identifier" style="background: url(<?php echo get_template_directory_uri() ?>/images/bg-areas.png) no-repeat">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-6">
          <h3 class="subtitle">Áreas de práctica</h3>
          <p class="mt-3">C&C Abogados cuenta con un equipo de asesores legales en distintas ramas del derecho, para solventar sus dudas.</p>
        </div>
        <div class="col-md-6">
          <div class="row row-cols-1 row-cols-md-2" id="areas-list">
          <?php while($areasArray->have_posts()): $areasArray->the_post() ?>
            <div class="card border-0 mb-3">
              <div class="card-body p-0">
                <h6 class="card-title"><strong><?php echo the_title() ?></strong></h6>
                <p class="pl-2"><?php the_content() ?></p>
              </div>
            </div>
          <?php endwhile ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3" id="cases">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 class="subtitle">Casos</h3>
          <p class="mt-3">La confianza de nuestros clientes se refleja en los resultados.</p>
        </div>
        <div class="col-md-8">
          <div class="row row-cols-1 row-cols-md-2">
            <?php while($casesArray->have_posts()): $casesArray->the_post() ?>
              <div class="col mb-4">
                <div class="card rounded-0">
                  <div class="card-body">
                    <h5 class="card-title font-times text-golden"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php echo the_permalink() ?>" class="card-text mt-3 text-golden">
                      <img src="<?php echo get_template_directory_uri() ?>/images/arrow-right.png" alt="" class="img-fluid"> Leer más
                    </a>
                  </div>
                </div>
              </div>
            <?php endwhile ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer() ?>