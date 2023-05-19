<?php
/**
 * About Us Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

if( $is_preview ) : ?>
    <?php set_query_var('block', $block); 
    get_template_part('template-parts/parts/acf-block-preview'); ?>
<?php else :
    $block_name = sanitize_title($block['title']);

    // Create class attribute allowing for custom "className" and "align" values.
    $class_name = $block_name;
    if ( ! empty( $block['className'] ) ) {
        $class_name .= ' ' . $block['className'];
    }
    if ( ! empty( $block['align'] ) ) {
        $class_name .= ' align' . $block['align'];
    }

    $fields                     = get_fields();
    $background_img_about       = $fields['background_img_about'];
    $about_info                 = $fields['about_info'];
    $info_title                 = $fields['info_title'];
    $about_info_second          = $fields['about_info_second'];
    $woman_image                = $fields['woman_image'];
    $box_info                   = $fields['box_info'];
    $info_title_second          = $fields['info_title_second'];
    $about_info_third           = $fields['about_info_third'];
    $hero_mobile_image          = $fields['hero_mobile_image'];


    //print_r($scientific);
    ?>

    <!-- <style>
        /* .about-us{
            background-image : url(<?php echo $background_img_about['url']; ?>);
        } */
        @media only screen and (max-width: 992px){
            .about-us{
                background-image : url(<?php echo $hero_mobile_image['url']; ?>);
            }    
        }
    </style> -->


    <div class="<?php echo esc_attr( $class_name ); ?>">
        
        <?php if($background_img_about) : ?>
            <div class="background-image d-none d-md-block" style="background-image: url(<?php echo $background_img_about['url']; ?>);">
                <div class="container">
                    <div class="firsttitle ">
                        <div class="blue-line"></div>
                        <div class="title">About Us</div> 
                    </div>
                </div>
            </div>
        <?php endif; ?>    
        
        <div class="container">

            <div class="<?php echo esc_attr( $class_name ); ?>__info d-grid">
                <div class="infos">
                    <?php if( !empty( $about_info ) ) : ?>
                        <p>
                            <?php echo $about_info ?>
                        </p>
                    <?php endif; ?>
                    <div class="title">
                        <?php if( !empty( $info_title  ) ) : ?>
                            <p>
                                <?php echo $info_title  ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php if( !empty( $about_info_second  ) ) : ?>
                        <p>
                            <?php echo $about_info_second  ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
    
            <?php if($woman_image) : ?>
                   
                <div class="woman-image d-grid" style="background-image: url(<?php echo $woman_image['url']; ?>);">
                    <a href="#" class="left-box">
                        <?php if (!empty($box_info)) : ?>
                            <p>
                                <?php echo $box_info['title']; ?>
                            </p>
                        <?php endif; ?>
                    </a>
                </div>
                
            <?php endif; ?>
            
            <div class="<?php echo esc_attr( $class_name ); ?>__info d-grid">
                <div class="title">
                    <?php if( !empty( $info_title_second ) ) : ?>
                        <p>
                            <?php echo $info_title_second ?>
                        </p>
                    <?php endif; ?>
                </div>
                <?php if( !empty( $about_info_third  ) ) : ?>
                    <p>
                        <?php echo $about_info_third  ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>


    </div>


<?php endif;