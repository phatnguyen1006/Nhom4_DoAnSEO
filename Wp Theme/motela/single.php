<?php get_header(); ?>

<?php  if( function_exists('nicdark_single')){ do_action("nicdark_single_nd"); }else{ ?>

<?php if ( get_the_title() != '' ) { ?>

    <!--start section-->
    <div class="nicdark_section nicdark_border_bottom_1_solid_grey">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_grid_12 nicdark_text_align_center">

                <div class="nicdark_section nicdark_height_80"></div>

                <p class="nicdark_single_post_date nicdark_display_inline_block nicdark_color_grey nicdark_font_size_13 nicdark_second_font nicdark_letter_spacing_1"><?php the_time(get_option('date_format')) ?></p>
                <div class="nicdark_section nicdark_height_20"></div>
                <h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone nicdark_text_align_center nicdark_font_weight_600 nicdark_word_break_break_word"><?php the_title(); ?></h1>

                <div class="nicdark_section nicdark_height_80"></div>

            </div>

        </div>
        <!--end container-->

    </div>
    <!--end section-->

<?php } ?>

<div class="nicdark_section nicdark_height_50"></div>

<!--start nicdark_container-->
<div class="nicdark_container nicdark_clearfix">


    <!--start all posts previews-->
    <?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
        <div class="nicdark_grid_8"> 
    <?php }else{ ?>

        <div class="nicdark_grid_12">
    <?php } ?>



    <?php if(have_posts()) :
        while(have_posts()) : the_post(); ?>
            
            <!--#post-->
            <div class="nicdark_section nicdark_container_single_php" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?>

                <!--start content-->
                <?php the_content(); ?>
                <!--end content-->

            </div>
            <!--#post-->


            <div class="nicdark_section">

                 
                <?php $args = array(
                    'before'           => '<!--link pagination--><div id="nicdark_link_pages" class="nicdark_section"><p class="nicdark_margin_0 nicdark_first_font nicdark_color_greydark  nicdark_display_inline nicdark_padding_0 nicdark_border_radius_15">',
                    'after'            => '</p></div><!--end link pagination-->',
                    'link_before'      => '',
                    'link_after'       => '',
                    'next_or_number'   => 'number',
                    'nextpagelink'     => esc_html__('Next page', 'motela'),
                    'previouspagelink' => esc_html__('Previous page', 'motela'),
                    'pagelink'         => '%',
                    'echo'             => 1
                ); ?>
                <?php wp_link_pages( $args ); ?>

            
                <?php if(has_tag()) { ?>  
                    <!--tag-->
                    <div id="nicdark_tags_list" class="nicdark_section nicdark_border_top_1_solid_grey nicdark_padding_top_20">
                        
                        <img alt="<?php esc_attr_e('Single Post Tag','motela'); ?>" width="20" class="nicdark_float_left nicdark_margin_right_20 nicdark_margin_top_4" src="<?php echo get_template_directory_uri(); ?>/img/icon-tag.png">
                        <?php the_tags(''); ?>

                    </div>
                    <!--END tag-->
                <?php } ?>


                <!--categories-->
                <div id="nicdark_categories_list" class="nicdark_section nicdark_border_bottom_1_solid_grey nicdark_padding_bottom_20">
                    
                    <img alt="<?php esc_attr_e('Single Post Category','motela'); ?>" width="20" class="nicdark_float_left nicdark_margin_right_20 nicdark_margin_top_3" src="<?php echo get_template_directory_uri(); ?>/img/icon-folder.png">
                    <?php the_category(', '); ?>
                   
                </div>
                <!--END categories-->

                

                <?php 

                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
                     
                ?>
                

            </div>

        
        <?php endwhile; ?>
    <?php endif; ?>


    </div>


    <!--sidebar-->
    <?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
        
        <div class="nicdark_grid_4">
            <?php if ( ! get_sidebar( 'nicdark_sidebar' ) ) : ?><?php endif ?>
            <div class="nicdark_section nicdark_height_50"></div>
        </div>
        
    <?php } ?>
    <!--end sidebar-->


</div>
<!--end container-->


<div class="nicdark_section nicdark_height_60"></div>  

<?php } ?>    

<?php get_footer(); ?>