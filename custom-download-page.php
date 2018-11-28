<?php /* Template Name: Download-Page */ ?>

<?php get_header(); ?>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="content container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="standard-page-title">
          <h2> <?php the_title(); ?> </h2>
        </div>
        <div class="standard-page-content download-page-content">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
<?php endwhile; else: ?>
  <p>Keine Beiträge gefunden</p>
<?php endif; ?>

<?php get_footer(); ?>
