<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package min11benja
 */

get_header();
?>
<!-- Blog Post -->
        <div class="content-body">
            <div class="section-padd br-t ">
                <div class="container-body clearfix">
                    <div class="white-space-30"></div>
						<!-- php get blog post loop -->
						<?php
						while ( have_posts() ) :
							the_post();

							 get_template_part( 'template-parts/content-single', get_post_type() );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
                
						
					</div><!-- .blog-post-item -->
				</div><!-- .container-body .clearfix -->
			</div><!-- .section-padd .br-t -->	
		</div><!-- .content-body -->	




<?php

get_footer();
