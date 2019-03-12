<?php get_header(); ?>

  <div class="content container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="standard-page-title">
          <h1> <?php the_title(); ?> </h1>
        </div>
        <div class="standard-page-content">
          <?php the_content(); ?>
        </div>
        <?php endwhile; else: ?>
          <div class="standard-page-content">
            <p>Entschuldigung. Auf dieser Seite, scheint der Inhalt zu fehlen. Wir arbeiten bestimmt schon an neuen Inhalten.</p>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>

<?php get_footer(); ?>
