<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package min11benja
 */


?>
<?php 
 get_header('blog');
?>


 <!-- hero  -->
            <div class="hero-01">
                <div class="hero-border">
                    <div class="top"></div>
                    <div class="bottom"></div>
                    <div class="left"></div>
                    <div class="right">
                        <div class="v-area">
                            <div class="v-middle  show-span">
                                <div class="p5" id="label-menu">
                                    
                                    <span>S</span>
                                    <span>T</span>
                                    <span>O</span>
                                    <span>R</span>
                                    <span>I</span>
                                    <span>E</span>
                                    <span>S</span>
                                    <span></span>
                                    <span>M</span>
                                    <span>A</span>
                                    <span>T</span>
                                    <span>T</span>
                                    <span>E</span>
                                    <span>R</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-thumb">
                    <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/pic/min11benja-bw.png" class="image-popup" title="min11benja"><img src="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-bw.png" class="img-thumbnail no-radius"  alt=""></a></div>
                </div>

                <div class="content-hero">
                    <div class="v-content">
                        <h4 class="font-normal">min11benja</h4>
                       
                        <h2>Escribimos para probar la vida dos veces<small class="text-yellow">&rarr; en el momento y en retrospectiva.</small></h2>
                       
                    </div>
                </div>
            </div>
            <!-- hero  -->

 </header>
        <!-- end Header -->
	<!-- Blog Post -->
        <div class="content-body">
            <div class="section-padd br-t ">
                <div class="container-body clearfix">
                     <div class="blog-post-item">
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

	

<?php get_footer(); ?>
