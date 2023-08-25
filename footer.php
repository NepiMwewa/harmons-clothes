<footer class="footer-content">
  <section>
    <div class="logo-div add-margin">
      <img src="http://present.local/wp-content/uploads/2023/08/white-logo.webp" class="footer-logo">

      <h2>Luisa Milagro</h2>
    </div>
    <div class="footer-menu-container">
    <?php if(is_active_sidebar('footer-area')): ?>
      <div class="footer-widget-area">
        <?php dynamic_sidebar('footer-area');?>
      </div>
    <?php endif;?>
      <div class="center-div">
        <div>
          <h3 class="footer-heading-menu">Servicios</h3>
      <?php wp_nav_menu(array(
          'theme_location' 	=> 'footer-1',
            'menu_class' 		=> 'footer-menu-class',
            'container' 	 	=> 'nav',
            'depth'				=> 2,
            'fallback_cb' 		=> false
        ) );
        ?>
        </div>
        <div>
        <h3 class="footer-heading-menu">Adicional</h3>
          <?php
            wp_nav_menu(array(
              'theme_location' 	=> 'footer-2',
                'menu_class' 		=> 'footer-menu-class',
                'container' 	 	=> 'nav',
                'depth'				=> 2,
                'fallback_cb' 		=> false
            ) );
          ?>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="copyright-info">
        <p><?php
          echo ('&copy; ' . date_i18n( 'Y' ) . " Luisa Milagro" );
        ?></p>
      </div>
      <div class="privacy-menu-container">
        <?php
          wp_nav_menu( array(
            'theme_location' 	=> 'privacy',
            'menu_id' 		 	=> 'privacy-menu',
            'menu_class' 		=> '',
            'container' 	 	=> 'nav',
            'container_class'	=> '',
            'depth'				=> 1,
            'fallback_cb' 		=> false
          ) );
        ?>
      </div>
      <?php if(is_active_sidebar('copyright-area')): ?>
      <div class="copyright-widget-area">
        <?php dynamic_sidebar('copyright-area');?>
      </div>
    <?php endif;?>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>
