<?php get_header() ?>

<div class="container">
  <?php if(have_posts()):
    while (have_posts()) : the_post(); $author_id = get_the_author_meta( 'ID' ); $categories = get_the_category(); ?>
    <div class="row mt-5 pt-4">
      <div class="col-md-8">
        <h1 class="font-times text-golden"><?php the_title() ?></h1>
        <!-- <p class="text-muted"><?php The_excerpt() ?></p> -->
        <?php if ( has_post_thumbnail() ):
          the_post_thumbnail('large', array('class' => 'img-fluid'));
        endif ?>
        <div class="row my-5 pb-2">
          <div class="col-md-2 d-none d-md-block">
            <div id="post-author-section">
              <img src="<?php echo get_avatar_url($author_id) ?>" alt="" class="img-fluid border-left" style="border-radius: 3rem;">
            </div>
          </div>
          <div class="col">
            <h4 class="text-golden font-times">
              <?php echo get_the_author_meta( 'display_name', $author_id ); ?>
            </h4>
            <div class="mt-4 d-md-flex justify-content-between">
              <span class="text-muted">
                <?php echo date_i18n('F j, Y') . ' - ' . reading_time(); ?>
              </span> <br class="d-sm-block">
              <span class="text-muted">
                Compartir: <?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?>
              </span>
            </div>
            <div class="mt-5">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <h5 class="mb-3 sidebar-title py-3">Últimas publicaciones</h5>
        <?php $mostViewedArray = new WP_Query(
          array(
            'cat'         => $categories[0]->cat_ID,
            'orderby'     => 'ID',
            'order'       => 'DESC',
            'post_type'   => 'post',
            'post_status' => 'publish',
          )
        );?>

        <div class="list-group list-group-flush">
        <?php while ( $mostViewedArray->have_posts() ): $mostViewedArray->the_post() ?>
          <a class="list-group-item list-group-item-action bg-transparent" href="<?php the_permalink() ?>"><h6><?php the_title() ?></h6></a>
        <?php endwhile ?>
        </div>
      </div>
    </div>
    <?php endwhile;
  endif ?>
</div>

<?php get_footer() ?>