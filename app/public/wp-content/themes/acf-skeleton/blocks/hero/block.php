<?php
/**
 * Hero Block Template.
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
      
    $heroImages         = $fields['hero_slide_images'];

    $big_title          = $fields['big_title'];
    $small_title        = $fields['small_title'];
    $box_info           = $fields['box_info'];
    $box_info_link      = $fields['box_info_link'];
    $dna_image          = $fields['dna_image']; 
    ?>


    <div class="<?php echo esc_attr( $class_name ); ?>">
        <?php if($heroImages) : ?>
            <div class="background-slides desktop d-none d-md-block">
                <?php foreach($heroImages as $slideImages) : ?>
                    <?php 
                        $desktopImage = wp_get_attachment_image_src( $slideImages['desktop_image'], 'full' )[0];
                    ?>
                    <div class="slide-image" style="background-image: url(<?= $desktopImage; ?>);"></div>
                  
                <?php endforeach; ?>
            </div>

            <div class="background-slides mobile d-md-none">
                <?php foreach($heroImages as $slideImages) : ?>
                    <?php 
                        $mobileImage = wp_get_attachment_image_src( $slideImages['mobile_image'], 'full' )[0];
                    ?>
                    <div class="slide-image" style="background-image: url(<?= $mobileImage; ?>);"></div>
                  
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="hero__inner">
                <div class="hero__heading">
                    <?php if( !empty( $big_title ) ) : ?>
                        <h1 class="title h1-large">
                            <?php echo $big_title; ?>
                        </h1>
                    <?php endif; ?>
                    <?php if( !empty( $small_title ) ) : ?>
                        <div class="small">
                            <?php echo $small_title; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="hero__box d-grid">
                    <div class="left-box">
                        <div class="blue-line"></div>
                        <?php if( !empty( $box_info ) ) : ?>
                            <p>
                                <?php echo $box_info ?>
                            </p>
                        <?php endif; ?>
                        <div class="dna-image"><?php echo wp_get_attachment_image( $dna_image, 'full' ); ?></div>
                    </div>
                        
                    <a href="#" class="right-box">
                        <?php if (!empty($box_info_link)) : ?>
                            <!-- p kullanmak a'nın içinde mantıklı değil -->
                            <p>
                                <?php echo $box_info_link['title']; ?>
                            <!-- <i class="arrow fa-solid fa-arrow-right"></i> -->
                            </p>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif;
