<header class="banner">
  <div class="container">
    <div class="row nav-row">
      <a class="brand display-desktop col-md-4 col-xs-12" href="<?= esc_url(home_url('/')); ?>"><img style="width: 100%;" src="wp-content/themes/ekana-theme/assets/images/Sample-2.2.png" /></a>
      <div class="navbar-block right-float col-md-8 col-xs-12">
        <nav class="navbar" role="navigation" style="float: right;">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="brand display-mobile col-xs-12" href="<?= esc_url(home_url('/')); ?>"><img style="width: 100%;" src="wp-content/themes/ekana-theme/assets/images/Sample-2.2.png" /></a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <?php
            wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 1,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>


