    <!-- Footer -->
    <footer class="footer navbar navbar-default navbar-fixed-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
              <p class="navbar-text">&copy; 2018, <a href="#">Rosa Braatz, Jonas Keutel</a></p>
          </div>
          <div class="col-md-6" style="text-align: center">
            <p class="navbar-text" style="float: none"><strong> <?php  bloginfo('title'); ?> </strong></p>
          </div>
            <?php wp_nav_menu( array(
              'theme_location' => 'footer-menu',
              'container' => 'div',
              'container_class' => 'col-md-3',
              'menu_class' => 'nav navbar-nav navbar-right',
              'fallback_cb' => false)
            ); ?>
        </div>
      </div>
    </footer>

    </div>

    <?php wp_footer(); ?>

  </body>
</html>
