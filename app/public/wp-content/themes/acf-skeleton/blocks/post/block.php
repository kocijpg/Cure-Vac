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

    $fields = get_fields();
    $title_post = $fields['title_post'];
    $content_post = $fields['content_post'];
    $link_post = $fields['link_post'];
    // print_r($content_post); 
    ?>


    <div class="<?php echo esc_attr( $class_name ); ?>">
        <div class="container">
            <div class="post__info d-grid">

                <div class="second-post">

                    <div class="baslik">
                        <?php if( !empty( $title_post ) ) : ?>
                            <p>
                                <?php echo $title_post ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <div class="bilgi">
                        <?php if( !empty( $content_post ) ) : ?>
                            <p>
                                <?php echo $content_post ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <a href="#" class="link">
                        <?php if (!empty($link_post)) : ?>
                            <p>
                            <?php echo $link_post['title']; ?>
                            <!-- <i class="arrow fa-solid fa-arrow-right"></i> -->
                            </p>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php endif;