<?php
/*
Template Name: Blog Cat Page
*/
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
if(is_page(18)) {
 get_header('blog');
}
else if(is_page(16)) {
 get_header('portfolio');
}
else {
 get_header();
}
 wp_head();
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
                    
                   
                    <!--NEW-->
                    <section id="content1" class="tab-content">
                        
                        <!--DEFAULT HEADER TYPE DESC BLOG POST-->
                             <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/counter-bg.png')"></div>
                                <ul class="details">
                                    <li>Total Articulos:#482</li>
                                    <li>Total Suscriptores:#10,101</li>
                                    <li>Total Vistas: #1,000,000</li>
                                    <li>Total Comentarios:#744</li>
                                </ul>
                            </div>
                            <div class="description">
                                <h1 class="text-black">LOS TOP 3 MÁS VISTOS</h1>
                                <h2>Los temas más populares y vistos de cada categoría</h2>

                            </div>
                        </div>
                        
                 <!--PHP LOOP ARTICLE IF POST & IF CAT-1-->
                         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                         <?php if (in_category('Enseñar')) : ?>
                        
                           <div class="blog-card alt">
                            <div class="meta">
                                
                                <!--if it has thubnail-->
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(array(150,150));?>
                                        <?php else: ?>
                                            <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/counter-bg.png')"></div>
                                <?php endif; ?>      
                                
                                
                                
                                <ul class="details">
                                     <!--Display Dynami post author-->
                                    <li class="author"><a href="#"><?php the_author(); ?></a></li>
                                     <!--Display Dynami post date-->
                                    <li class="date"><?php echo get_the_date( 'Y-m-d' ); ?></li>
                                     <!--Display Dynami post tags-->
                                    <li class="tags">
                                        
                                        <?php 
                                        $tags = get_tags(array(
                                        'hide_empty' => false
                                        ));
                                        echo '<ul>';
                                        foreach ($tags as $tag) {
                                          echo '<li>' . $tag->name . '</li>';
                                        }
                                        echo '</ul>';
                                        ?>
                                        
                                    </li>
                                    <!--Display Dynami post views-->
                                    <li>Vistas: #<?php echo getPostViews(get_the_ID()); ?></li>
                                     <!--Display Dynami post comments-->
                                    <li>Comentarios:#<?php $totalcomments = get_comments_number(); echo $totalcomments; ?></li>
                                </ul>
                            </div>
                            <div class="description">
                                <!--Display Dynami Title-->
                                <h1 class="text-black"><?php the_title(); ?></h1>
                                <!--Display dynami sub title-->
                                <h2><?php the_subtitle(); ?></h2>
                                <!--display dynamic expert-->
                                <p class="text-black"> <?php the_excerpt();?></p>
                                <p class="read-more">
                                    <!--article cat 1 dynamic link-->
                                    <a href="<?php the_permalink();?>" class="post-link">Leer más</a>
                                </p>
                            </div>
                        </div>
                        <?php endif; endwhile; endif; ?>
                        
                    </section>
                    
                    <!--TEACH-->
                    <section id="content2" class="tab-content">
                        
                        <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/learning-share.jpeg')"></div>
                                <ul class="details">
                                    <li>Total Articulos:#482</li>
                                    <li>Total Suscriptores:#10,101</li>
                                    <li>Total Vistas: #1,000,000</li>
                                    <li>Total Comentarios:#744</li>
                                </ul>
                            </div>
                            <div class="description">
                                <h1 class="text-black">LO QUE ESTOY APRENDIENDO</h1>
                                <h2>Aprende conmigo, te dejo mis tips recursos y obstaculos</h2>

                            </div>
                        </div>
                        
                    </section>
                    
                    <!--REVIEWS-->
                    <section id="content3" class="tab-content">
                           <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/test-cat-bg.png')"></div>
                                <ul class="details">
                                    <li>Total Articulos:#482</li>
                                    <li>Total Suscriptores:#10,101</li>
                                    <li>Total Vistas: #1,000,000</li>
                                    <li>Total Comentarios:#744</li>
                                </ul>
                            </div>
                            <div class="description">
                                <h1 class="text-black">RESEÑAS</h1>
                                <h2>Te comparto mi opinion en libros, peliculas, herramientas y servicios que eh probado</h2>

                            </div>
                        </div>
                    </section>
                    
                    <!--EVENTS-->
                    <section id="content4" class="tab-content">
                        
                         <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/events-cat-bg.png')"></div>
                                <ul class="details">
                                    <li>Total Articulos:#482</li>
                                    <li>Total Suscriptores:#10,101</li>
                                    <li>Total Vistas: #1,000,000</li>
                                    <li>Total Comentarios:#744</li>
                                </ul>
                            </div>
                            <div class="description">
                                <h1 class="text-black">EVENTOS</h1>
                                <h2>Te comparto mi experiencia en diversos eventos</h2>

                            </div>
                        </div>
                          
                    </section>
                    
                    
                    <!--PEOPLE INTERVIEWS-->
                    <section id="content5" class="tab-content">
                        
                         <div class="blog-card">
                            <div class="meta">
                                <div class="photo" style="background-image: url('<?php bloginfo('template_directory');?>/assets/theme/img/blog/interview-cat-bg.png')"></div>
                                <ul class="details">
                                    <li>Total Articulos:#482</li>
                                    <li>Total Suscriptores:#10,101</li>
                                    <li>Total Vistas: #1,000,000</li>
                                    <li>Total Comentarios:#744</li>
                                </ul>
                            </div>
                            <div class="description">
                                <h1 class="text-black">PERSONAS INTERESANTES</h1>
                                <h2>People dont cross our path by accident, they are either a blessing or a lesson</h2>

                            </div>
                        </div>
                    </section>


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