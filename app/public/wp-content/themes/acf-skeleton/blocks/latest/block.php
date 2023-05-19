
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

    $fields          = get_fields();
    $latests_posts   = $fields['latests_posts'];
    ?>

    <div class="latest-new">
        <div class="container"> <!--Burayı logo ile aynı hizaya gelsin diye bootsrap ile yaptık--> 
            <div class="title">Latest news</div>
    
            <div class="date-info">
                <?php foreach($latests_posts as $post){ 
    
                    $month = $post->post_date;
                    $month = date("M" , strtotime($month));
    
                    $day = $post->post_date;
                    $day = date("d" , strtotime($day)); 
                    
                    $content = $post->post_content; ?>
                    <div class="test" style="margin-bottom: 40px">
                        <div class="date">
                            <div class="month"><?php echo $month;?></div>
                            <div class="day"><?php echo $day;?></div>
                            <div class="hr"></div>
                        </div>
                        
                        <div class="content">
                            <a href="#">
                                <?php echo $content;?>
                                <i class="arrow fa-solid fa-arrow-right"></i>  
                            </a>
                        </div>
                    </div>   
                    
                    <!-- echo get_the_content('', false, $post); DOĞRU KULLANIMI BU -->
                <?php
                } ?>  
                <a href="#">
                    <span class="view">
                        <span>View all news</span>
                    </span>
                </a>
            
            </div>
        </div>
    </div>

<?php endif;



