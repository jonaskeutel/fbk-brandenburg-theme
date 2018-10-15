<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="content container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <?php the_content(); ?>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
<?php endwhile; else: ?>
  <p>Keine Beiträge gefunden</p>
<?php endif; ?>

<?php get_footer(); ?>