
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

    $fields         = get_fields();
    // $position       = $fields['position'];

    $args           = array( 
        'post_type' => 'members',
        'posts_per_page' => -1
    );
    $the_query      = new WP_Query( $args ); 
    
    ?>
    <?php
    $terms = get_terms([
        'taxonomy' => 'position',
        'hide_empty' => false,
    ]);
    ?>
    <!-- This is the active for the reload page is certain select for Executive Board -->
    <div class="container">
        <div class="border-positions">
            <div class="options">
                <?php foreach ($terms as $key => $term) : ?>
                    <div class="member-position <?php echo($key === 0) ? 'active' : ''; ?>"><?php echo $term->name; ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php if ( $the_query->have_posts() ) : ?>
        <div class="container">
            
           
                
            <div class="members-wrap">
                
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php 
                $memberID       = get_the_ID();
                $memberTitle    = get_the_title();
                $memberAvatar   = get_the_post_thumbnail( $memberID, 'full' );
                $memberPostion  = get_field('position', $memberID);
                $taxposition    = get_the_terms( $memberID, 'position' );
    
                ?>

                <!-- Member name -->
                
                <div class="member"  <?php echo ($taxposition) ? 'data-position="'. $taxposition[0]->name . '"' : '' ; ?>>
                <div class="blue-line"></div> 
                    <div class="image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    
                    <h2 class="member__title"><?php the_title(); ?></h2>
                    
                    <div class="entry-content">
                        
                        <?php echo $memberPostion; ?> 
                        
                    </div>
                    
                </div>
        
                <?php endwhile;
                wp_reset_postdata(); ?>
                </div>
            
        </div>

    <?php else:  ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<?php endif;