<?php get_header(); ?>

<div class="content container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="standard-page-title">
        <h1> Entschuldigung! </h1>
      </div>
      <div class="standard-page-content">
        Diese Seite können wir leider nicht finden. Da ist wohl etwas schief gegangen. Wir bitten um Entschuldigung.
        <br>
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="unvisible-link">Hier geht es zurück zur Startseite.</a>
        <br>
        Gerne können Sie uns auch schreiben und von dem Problem berichten. <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="unvisible-link">Hier geht es zum Kontaktformular.</a>
        <br>
        Vielen Dank für Ihre Hilfe und ihr Verständnis!
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>

<?php get_footer(); ?>
