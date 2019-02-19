<?php /* Template Name: Startseite */ ?>

<?php get_header(); ?>

<div class="content container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="paper-stack">
        <div class=" paper">
          <div class="landing-page-website-description">
            <?php bloginfo('description'); ?>
          </div>
          <div class="landing-page-website-title">
            <?php bloginfo('name'); ?>
          </div>
        </div>
      </div>
      <br>
      <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="landing-page-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; else: ?>
        <div class="landing-page-content">
          <p>Entschuldigung. Auf dieser Seite, scheint der Inhalt zu fehlen. Wir arbeiten bestimmt schon an neuen Inhalten.</p>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>



<?php get_footer(); ?>
