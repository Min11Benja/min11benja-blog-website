<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package min11benja
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
   <div class="blog-card alt">
       
       <!--Blog post Meta data-->
        <div class="meta">
            
            <!--check to see if the post has a thubnail if not placeholder 350x150 px-->
           <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            
                <div class="photo" style="background-image: url('<?php echo $image[0]; ?>')"></div>
            
            <?php else: ?>
            
                <div class="photo" style="background-image: url(https://via.placeholder.com/350x150)"></div>
            
            <?php endif; ?>
            
            <ul class="details">
                      <!--Display Dynami post author-->
                <li class="author"><a href="#">
                        <?php the_author(); ?></a></li>
                <!--Display Dynami post date-->
                <li class="date">
                    <?php echo get_the_date( 'Y-m-d' ); ?>
                </li>
         
                <!--Display Dynami post views-->
                <li> 
                    
                    <i class="fa fa-eye" aria-hidden="true"></i> Vistas: #
                    <?php echo getPostViews(get_the_ID()); ?>
                </li>
                <!--Display Dynami post comments-->
                <li> 
                    <i class="fa fa-comments-o fa-1"></i> Comentarios: #
                    <?php $totalcomments = get_comments_number(); echo $totalcomments; ?>
                </li>
            </ul><!--.details-->
       </div><!--.meta-->
       
        <div class="description">
            <!--Display Dynami Title-->
            <h1 class="text-black">
                <?php the_title(); ?>
            </h1>
         <h2><?php the_subtitle(); ?></h2>  
            <!--display dynamic expert-->
            <p class="text-black">
                <?php the_excerpt();?>
            </p>
            <p class="read-more">
                <!--article cat 1 dynamic link-->
                <a href="<?php the_permalink();?>" class="post-link">Leer más</a>
            </p>
        </div><!--.description-->
       
</div><!---.blog-card .alt->
	


	<footer class="entry-footer">
		<?php min11benja_entry_footer(); ?>
	</footer><!-- .entry-footer -->
    
</article><!-- #post-<?php the_ID(); ?> -->
