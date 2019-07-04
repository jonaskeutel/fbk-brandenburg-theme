    <!-- Footer -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 hidden-xs hidden-sm">
              <p> &copy; 2019,
                <a href="https://www.linkedin.com/in/rosa-braatz" target="_blank">Rosa Braatz, </a>
                <a href="https://www.linkedin.com/in/jonaskeutel/" target="_blank">Jonas Keutel</a>
              </p>
          </div>
          <div class="col-md-6 hidden-xs col-sm-7">
            <p><strong> <?php  bloginfo('name'); ?> </strong></p>
          </div>
            <?php wp_nav_menu( array(
              'theme_location' => 'footer-menu',
              'container' => 'div',
              'container_class' => 'col-md-3 col-xs-12 col-sm-5',
              'menu_class' => 'footer-menu',
              'fallback_cb' => false)
            ); ?>
        </div>
      </div>
    </footer>

    </div>

    <?php wp_footer(); ?>

  </body>
</html>
