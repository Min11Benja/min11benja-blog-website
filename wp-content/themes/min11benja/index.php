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
                        <h4 class="font-normal">Hola extrañ@, este es mi blog personal</h4>
                        <h1 class="myname">min11benja</h1>
                        <h2>Donde comparto mis experiencias, las personas que conozco, los libros que estoy leyendo y lo que estoy aprendiendo<small class="text-yellow"><br>&rarr; Espero y te unas a la conversación</small></h2>
                        <p><a href="#" class="btn btnc1"><span>Suscribete</span></a></p>
                    </div>
                </div>
            </div>
            <!-- hero  -->

 </header>
        <!-- end Header -->
        
        <!-- Content body -->
        <div class="content-body ">


            <div class="section-padd br-t " id="blog-cat">
                <div class="container-body clearfix tab_container">

                    <!--Cat Blog Tabs-->

                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1"><i class="fa fa-bar-chart-o "></i><br><span></span></label>

                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2"><i class="fa fa-mortar-board "></i><span></span></label>

                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3"><i class="fa fa-newspaper-o"></i><span></span></label>

                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4"><i class="fa fa-calendar"></i><span></span></label>

                    <input id="tab5" type="radio" name="tabs">
                    <label for="tab5"><i class="fa fa-users"></i><span></span></label>
                    
                   

                    <section id="content1" class="tab-content">
                        
                        <!--DEFAULT HEADER TYPE DESC BLOG POST-->
                        <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/counter-bg.png')"></div>
                            
                            </div>
                            <div class="description">
                                <h1 class="text-black">LOS TOP 3 MÁS VISTOS</h1>
                                <h2>Los temas más populares y vistos del blog</h2>

                            </div>
                        </div>
                        
                    <!--Blog Post Loop Top 3 post -->
                    
                      <?php
                        $q_mostViewed = [
                            'meta_key' => 'post_views_count',
                            'orderby' => 'meta_value_num',
                            'order' => 'DESC',
                            'posts_per_page' => '3'
                        ];
                        $mostViewed = new WP_Query($q_mostViewed);
                        if ($mostViewed->have_posts()) :
                            while ($mostViewed->have_posts()) :
                                $mostViewed->the_post(); ?>
                                   <?php  get_template_part( 'template-parts/content', get_post_type() ); ?> 
                            <?php endwhile; 
                        endif; ?>

                    <!--end loop -->
  
                    </section>
                    
                         <!--TEACH-->
                    <section id="content2" class="tab-content">
                        
                        <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/learning-share.jpeg')"></div>
                            </div>
                            <div class="description">
                                <h1 class="text-black">LO QUE ESTOY APRENDIENDO</h1>
                                <h2>Aprende conmigo, te dejo mis tips recursos y obstaculos</h2>

                            </div>
                        </div>
                        
                          <!--Blog Post Loop teach = 10 -->
                                
                    <?php query_posts('cat=10'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php  get_template_part( 'template-parts/content', get_post_type() ); ?>
                        <?php endwhile; endif; ?>
               <!--end loop -->
                        
                    </section>
                    
                      <!--REVIEWS-->
                    <section id="content3" class="tab-content">
                           <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/test-cat-bg.png')"></div>
                          
                            </div>
                            <div class="description">
                                <h1 class="text-black">RESEÑAS</h1>
                                <h2>Te comparto mi opinion en libros, peliculas, herramientas y servicios que eh probado</h2>

                            </div>
                        </div>
                        
                          <!--Blog Post Loop resenas = 11 -->
                                
                    <?php query_posts('cat=11'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php  get_template_part( 'template-parts/content', get_post_type() ); ?>
                        <?php endwhile; endif; ?>
               <!--end loop -->
                    </section>
                    
                    <!--EVENTS-->
                    <section id="content4" class="tab-content">
                        
                         <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/events-cat-bg.png')"></div>
                            
                            </div>
                            <div class="description">
                                <h1 class="text-black">EVENTOS</h1>
                                <h2>Te comparto mi experiencia en diversos eventos</h2>

                            </div>
                        </div>
                            <!--Blog Post Loop events = 12 -->
                                
                    <?php query_posts('cat=12'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php  get_template_part( 'template-parts/content', get_post_type() ); ?>
                        <?php endwhile; endif; ?>
               <!--end loop -->
                    </section>
                    
                    
                    <!--PEOPLE INTERVIEWS-->
                    <section id="content5" class="tab-content">
                        
                         <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/interview-cat-bg.png')"></div>
                            
                            </div>
                            <div class="description">
                                <h1 class="text-black">PERSONAS INTERESANTES</h1>
                                <h2>People dont cross our path by accident, they are either a blessing or a lesson</h2>

                            </div>
                        </div>
                        
                          <!--Blog Post Loop perople = 9 -->
                                
                    <?php query_posts('cat=9'); ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php  get_template_part( 'template-parts/content', get_post_type() ); ?>
                        <?php endwhile; endif; ?>
               <!--end loop -->
                    </section>

                
                    <?php wp_reset_query(); ?>
                <!--/ Cat Blog Tabs-->    
                   
                </div>
            </div>


            <!--Subscribe Form -->
            <section class="widget widget_blog_subscription">
                <form action="#" method="post" accept-charset="utf-8" id="subscribe-blog">
                    <p>Suscribete a nuestro Boletin semanal<br>¡Para obténer contenido exclusivo y enterarte de nuevos articulos antes que nadie!</p>
                    <p>
                        <input type="text" name="email" style="width: 95%;" placeholder="Deja tu correo" value="" id="subscribe-field">
                    </p>
                    <p>
                        <input type="submit" value="¡Suscribeme!">
                    </p>
                </form>
            </section>
            <!-- End Subscribe Form -->

        </div>
        <!-- end Content body -->

                    
<?php

get_footer();