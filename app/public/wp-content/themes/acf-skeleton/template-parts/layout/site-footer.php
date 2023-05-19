<?php 
$copyright = get_theme_mod('copyright_text');
?>
<footer class="site-footer">
    <div class="container">
        <div class="site-footer__inner">
        
            <div class="site-footer__links">
                <a href="#">
                    <?php if ( is_active_sidebar( 'footer_widgets_1' ) ) : ?>
                        <div id="footer-widgets-1" class="footer-widgets widget-area" role="complementary">
                            <?php dynamic_sidebar( 'footer_widgets_1' ); ?>
                        </div>
                    <?php endif; ?>
                </a>
            </div>
            
            <div class="site-footer__empty">
                <?php if ( is_active_sidebar( 'footer_widgets_2' ) ) : ?>
                    <div id="footer-widgets-2" class="footer-widgets widget-area" role="complementary">
                        <?php dynamic_sidebar( 'footer_widgets_2' ); ?>
                    </div>
                <?php endif; ?>
            </div>


            <div class="site-footer__social">
                <?php if ( is_active_sidebar( 'footer_widgets_3' ) ) : ?>
                    <div id="footer-widgets-3" class="footer-widgets widget-area" role="complementary">
                        <?php dynamic_sidebar( 'footer_widgets_3' ); ?>
                    </div>
                <?php endif; ?>
            </div>
            
        </div>
        <?php if( !empty( $copyright ) ) : ?>
            <div class="site-footer__copyright">
                @ <?php echo date('Y') . ' ' . $copyright; ?>
            </div>
        <?php endif; ?>

        
    </div>
</footer>