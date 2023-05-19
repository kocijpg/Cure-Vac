<header class="site-header">
    <div class="container">

        <div class="site-header__inner">
            <div class="site-header__logo">
                <?php html_site_logo(); ?>
            </div>

            <div class="site-header__nav">
                <div class="header-actions d-lg-none">
                    <div class="header-actions__open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="header-actions__close">X</div>
                </div>
                <?php wp_nav_menu(array(
					'theme_location' => 'primary',
					'menu_id'        => 'main-menu',
				)); ?>
                <div class="mobile-footer-menu-container">
                    <ul>
                        <li><a href="/media-resources">Media Resources</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div class="back-link">
                    <a href="#">Back</a>
                </div>
                <?php wp_nav_menu(array(
                    'menu'        => 'languages-menu',
                )); ?> 
            </div>
        </div>
    </div>
</header>