<?php
/**
 * mna Block Template.
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

    $fields             = get_fields();
    $background_mrna    = $fields['background_mrna'];
    $title_one          = $fields['title_one'];
    $text_one           = $fields['text_one'];
    $link_one           = $fields['link_one'];
    $content_mrna       = $fields['content_mrna'];
    $doctor             = $fields['doctor'];

    $mobile_mrna        = $fields['mobile_mrna'];
    $mobile_doctor      = $fields['mobile_doctor'];
    // print_r($background_mrna);

    if($mobile_mrna == ''):
        $mobile_mrna = $background_mrna;
    endif;
    ?>

    <style>
        .mrna{
            background-image : url(<?php echo $background_mrna['url']; ?>);
        }
        @media only screen and (max-width: 992px){
            .mrna{
                background-image : url(<?php echo $mobile_mrna['url']; ?>);
            }    
        }
    </style>

    <div class="<?php echo esc_attr( $class_name ); ?>">
       
        <div class="container">
            <div class="mrna__info d-grid">
                

                <div class="firstpost">
                    <div class="blue-line"></div>
                    <div class="baslik">
                        <?php if( !empty( $title_one ) ) : ?>
                            <p>
                                <?php echo $title_one ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <div class="bilgi">
                        <?php if( !empty( $text_one ) ) : ?>
                            <p>
                                <?php echo $text_one ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <a href="#" class="link">
                        <?php if (!empty($link_one)) : ?>
                            <!-- p kullanmak a'nın içinde mantıklı değil -->
                            <p>
                            <?php echo $link_one['title']; ?>
                            <!-- <i class="arrow fa-solid fa-arrow-right"></i> -->
                            </p>
                        <?php endif; ?>
                    </a>
                    
                    <div class="mrna-image"><?php echo wp_get_attachment_image( $content_mrna, 'full' );?></div>
                    <div class="doctor-image"><?php echo wp_get_attachment_image( $doctor, 'full' );?></div>
                    
                    <div class="mobile-doctor"><?php echo wp_get_attachment_image( $mobile_doctor, 'full' );?></div>
                    
                    <!-- buraya başka bir div gelecek mobile için ve css de düzeltilecek @media ile -->
                </div>
            </div>
        </div>
    </div>
    

<?php endif;