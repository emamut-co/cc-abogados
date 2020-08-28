      <div class="row mt-3 py-5 bg-dark-blue" id="contact-form">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-golden font-times">ESTAMOS AQUÍ PARA AYUDAR.</h3>
              <div class="row">
                <div class="col-md-8" style="font-size: 1.05rem">
                  <p class="text-white">Contáctanos para resolver tus inquietudes.</p>
                  <p class="mt-4 text-white">Si no puedes visitarnos en nuestra oficina, podemos atenderte a través de videollamada.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <?php echo do_shortcode('[contact-form-7 id="42" title="Contact form 1"]') ?>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-4 bg-dark-blue2">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="media">
                <img src="<?php echo get_template_directory_uri() ?>/images/ico-location.png" alt="" class="mr-3">
                <div class="media-body text-white">
                  <p>Av. Naciones Unidas E2-30 y Núñez de Vela <br> Edificio Metropolitan, piso 4, oficina 407</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 border-left-golden">
              <div class="media">
                <img src="<?php echo get_template_directory_uri() ?>/images/ico-phone.png" alt="" class="mr-3">
                <div class="media-body text-white">
                  <p>098 489 5903</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 border-left-golden">
              <div class="media">
                <img src="<?php echo get_template_directory_uri() ?>/images/ico-share.png" alt="" class="mr-3">
                <div class="media-body">
                  <?php if(!empty(get_option('facebook'))): ?>
                  <a href="<?php echo get_option('facebook') ?>" target="_blank"><i class="fab fa-facebook-f text-white fa-lg ml-4"></i></a>
                  <?php endif;
                  if(!empty(get_option('instagram'))): ?>
                  <a href="<?php echo get_option('instagram') ?>" target="_blank"><i class="fab fa-instagram text-white fa-lg ml-4"></i></a>
                  <?php endif;
                  if(!empty(get_option('linkedin'))): ?>
                  <a href="<?php echo get_option('linkedin') ?>"><i class="fab fa-linkedin text-white fa-lg ml-4"></i></a>
                  <?php endif;
                  if(!empty(get_option('twitter'))): ?>
                  <a href="<?php echo get_option('twitter') ?>" target="_blank"><i class="fab fa-twitter text-white fa-lg ml-4"></i></a>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <?php wp_footer(); ?>
</html>