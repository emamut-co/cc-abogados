<?php get_header(); ?>
<div class="row">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
    <div class="row">
      <div class="card bg-transparent border-bottom-golden pb-4 mb-4">
        <div class="row no-gutters">
          <div class="col-md-4">
            <?php the_post_thumbnail(array(450), array('class' => 'card-img')) ?>
          </div>
          <div class="col-md-8 pl-3">
            <a class="font-merriweather text-golden" href="<?php echo the_permalink() ?>"><h3 class="card-title"><?php echo the_title() ?></h3></a>
            <p><?php echo the_excerpt() ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <div class="row">
      <div class="col">
        <?php emamut_numeric_posts_nav(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>

