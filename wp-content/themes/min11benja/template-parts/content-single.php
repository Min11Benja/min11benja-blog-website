<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package min11benja
 */

?>



<div class="post-header">
    <?php
    echo '<span class="cat">'. get_the_category( $id )[0]->name .'</span>';
     echo '<span class="cat">'. get_the_category( $id )[1]->id .'</span>';
    ?>
   
    <h1>
        <?php the_title( '<h1 class="">', '</h1>' ); ?>
    </h1>

</div><!-- .entry-header -->


<div class="post-img">
    <a href="dark_blog-single-post.html" class="open-link">
        <!--check for feature image-->
        <?php 
        if( has_post_thumbnail() ){ ?>

        <img src='<?php the_post_thumbnail_url(); ?>' alt="min11benja-post-thubnail" class="img-full">

        <?php }?>


    </a>
</div>


<div class="post-entry">
    <div class="post-entry">
        <?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'min11benja' ),
			'after'  => '</div>',
		) );
		?>

        <div class="post-tags">
            
            <?php
                $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) {
                    echo '<a href="#" rel="tag" >'. $tag->name . ' </a>'; 
                  }
                }
            ?>
          
        </div>
        
        
        
    </div>
</div><!-- .entry-content -->

<!--end blog post -->

<div class="white-space-10"></div>
<!-- blog author -->
<div class="blog-author">
    <img src="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-author-thumbnail.png" class="img-thumbnail img-circle" alt="">
    <div class="desc">
        <h3><a href="#">Escrito por min11benja</a></h3>
        <p>Me llamo Benjamin, soy dessarrollador *front end*, y en mis tiempos libres escribo, armo maquinas, doy clases, grabo y comparto videos, pero la mayoria del tiempo me encontraras buscando resolver problemas interesantes y sonsacando a personas para que vean cierta pelicula vayan algun evento o sigan su sueño.</p>
        <p class="author-socials">
            <a target="_blank" href="https://www.facebook.com/min11benja/"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://twitter.com/Min11Benja"><i class="fa fa-twitter"></i></a>
            <a target="_blank" href="https://www.instagram.com/min11benja/"><i class="fa fa-instagram"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCWV-MWIHZy4e2YiHvjwqZcA"><i class="fa fa-youtube"></i></a>
        </p>
    </div>
</div><!-- end blog author -->

<div class="white-space-30"></div>
<h3 class="title"><span>Si te agrado esto a lo mejor y tambien te interese lo siguiente</span></h3>
<div class="white-space-10"></div>

 


<?php

$related = new WP_Query(
    array(
        'category__in'   => wp_get_post_categories( $post->ID ),
        'posts_per_page' => 5,
        'post__not_in'   => array( $post->ID )
    )
);

if( $related->have_posts() ) { 
    while( $related->have_posts() ) { 
        $related->the_post(); 
        /*whatever you want to output*/
         get_template_part( 'template-parts/content', get_post_type() );
    }
    wp_reset_postdata();
}

?>

