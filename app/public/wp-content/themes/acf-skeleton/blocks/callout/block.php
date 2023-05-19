<?php
/**
 * Callout Block Template.
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
    $title = $fields['title'];
    $description = $fields['description'];
    $cta = $fields['cta'];
    $image = $fields['image']; ?>

    <div class="<?php echo esc_attr( $class_name ); ?>">
        <div class="callout__left">
            <?php if( !empty( $title ) ) : ?>
                <div class="h1 callout__title">
                    <?php echo $title; ?>
                </div>
            <?php endif; ?>
            <?php if( !empty( $description ) ) : ?>
                <div class="callout__description">
                    <?php echo $description; ?>
                </div>
            <?php endif; ?>
            <?php if( !empty( $cta ) ) : ?>
                <div class="callout__cta">
                    <a href="<?php echo $cta['url']; ?>" <?php !empty($cta['target']) ? 'target="' . $cta['target'] . '"' : 'target="self"'?>>
                        <?php echo $cta['title']; ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <?php if( !empty( $image ) ) : ?>
            <div class="callout__right">
                    <div class="callout__image">
                        <?php echo wp_get_attachment_image( $image['id'], 'full'); ?>
                    </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif;
