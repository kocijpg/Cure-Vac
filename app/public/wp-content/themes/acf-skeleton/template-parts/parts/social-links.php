<div class="social-links-wrapper">
    <?php
    $social_links = get_social_links_array();

    foreach ( $social_links as $social_link ) :
        $social_link_url = get_theme_mod($social_link . '_link');
        if ( $social_link_url != '' ) : ?>
            <a href="<?php echo $social_link_url; ?>" target="_blank">
                <?php $social_icon = '';
                if( $social_link == 'facebook') {
                    $social_icon = 'fab fa-facebook-f';
                }
                if( $social_link == 'twitter') {
                    $social_icon = 'fab fa-twitter';
                }
                if( $social_link == 'linkedin') {
                    $social_icon = 'fab fa-linkedin-in';
                } ?>
                <i class="<?php echo $social_icon; ?>"></i>
            </a>
        <?php endif;
    endforeach; ?>
</div>
