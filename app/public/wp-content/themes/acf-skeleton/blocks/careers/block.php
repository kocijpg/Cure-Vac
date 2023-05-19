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
    $background_image           = $fields['background_image'];
    ?>

    <div class="<?php echo esc_attr( $class_name ); ?>">
        <?php if($background_image) : ?>
            <div class="background-image d-none d-md-block" style="background-image: url(<?php echo $background_image['url']; ?>);">
                <div class="container">
                    <div class="firsttitle ">
                        <div class="blue-line"></div>
                        <div class="title">Careers</div> 
                    </div>
                </div>
            </div>
        <?php endif; ?>


    </div>


<?php endif;