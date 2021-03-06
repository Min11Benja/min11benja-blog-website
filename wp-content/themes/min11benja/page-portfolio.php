<?php
/*
Template Name: Portfolio Page
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
if(is_page(16)) {
 get_header('portfolio');
}
else {
 get_header();
}
 wp_head();
?>

  
<header>
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
                                    <span>M</span>
                                    <span>I</span>
                                    <span>S</span>
                                    <span></span>
                                    <span>T</span>
                                    <span>R</span>
                                    <span>A</span>
                                    <span>B</span>
                                    <span>A</span>
                                    <span>J</span>
                                    <span>O</span>
                                    <span>S</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-thumb">
                    <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-bw.png" class="image-popup" title="min11benja"><img src="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-bw.png" class="img-thumbnail no-radius"  alt="min11benja-logo-icon"></a></div>
                </div>

                <div class="content-hero">
                    <div class="v-content">
                        <h4 class="font-normal">Hola extrañ@, soy</h4>
                        <h1 class="myname">min11benja</h1>
                        <h3 class="font-normal with-line">Estos son algunos de los proyectos en los que eh trabajado</h3>
                        <p> <a href="https://drive.google.com/open?id=1mt_V_c_t2jUHVSmJt4DpAnJLj6Y7yTT4" class="btn btnc1" target="_blank"><span>Descargar C.V.</span></a> - <a href="#" class="btn btnc1" target="_blank"><span>Cotizar proyecto</span></a></p>
                    </div>
                </div>
            </div>
            <!-- hero  -->
        </header>
        <!-- end HEader -->
        <!-- Content body -->
        <div class="content-body">

            <!-- start about me section -->
            <section id="portfolio">

                <!-- start portfolio section-->
                <section id="portfolio">

                    <!-- filter portfolio -->
                    <div class="section-padd br-t ">
                        <div class="container-body clearfix">
                            <h2 class="title dark"><span>Portafolio de trabajos previos</span></h2>
                            <ul class="list-inline list-filter-galery">

                                <li class="active" data-filter="*"><a href="#">Todo</a></li>
                                <li data-filter=".vid"><a href="#">Videos</a></li>
                                <li data-filter=".pgw"><a href="#">Paginas Web</a></li>
                                <li data-filter=".img"><a href="#">Diseño Grafico</a></li>


                            </ul>
                        </div>
                    </div>

                    <!-- grid portfolio -->
                    <div class="galery-box clearfix ">
                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://www.richards.com.mx/" target="_blank">Richards <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/richards.png" alt="pagina-web-richards-restaurante">
                        </div>
                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://s3.amazonaws.com/anana-temp-site/corecompetent-temp/lp-guia-psicometrica.html" target="_blank">Core Competent<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div id="bs-gslider1" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/c1.png" alt="min11benja - imagen de pagina landing para core competent 1 de 5">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/c2.png" alt="min11benja - imagen de pagina landing para core competent 2 de 5">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/c3.png" alt="min11benja - imagen de pagina landing para core competent 3 de 5">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/c4.png" alt="min11benja - imagen de pagina landing para core competent 4 de 5">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/c5.png" alt="min11benja - imagen de pagina landing para core competent 5 de 5">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://s3.amazonaws.com/eme-lp/index.html" target="_blank">Eme Bar <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/eme.png" alt="min11benja-eme-bar-website">
                        </div>


                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://s3.amazonaws.com/imlux/index.html" target="_blank">Imlux<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/imlux.png" alt="min11benja-imlux-website">
                        </div>

                         <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://www.ilbasilico.mx/" target="_blank">IlBasilico<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/ilbasilico-website.png" alt="min11benja-ilbasilico-website">
                        </div>
                        
                         <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://www.anana.mx/" target="_blank">Ananá-en construccion<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/anana-construccion.png" alt="min11benja-anana-en-construccion-website">
                        </div>
                        
                     

                       
                        
                        
                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://elgourmet.mx/" target="_blank">El Gourmet<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/elgourmet.png" alt="min11benja pagina web para restaurante el gourmet">
                        </div>

                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://s3.amazonaws.com/aws-website-paolatorrenutriologa-91u3m/index.html" target="_blank">Paola Torre <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/paola-torre.png" alt="min11benja pagina landing para Nutriologa Paola Torre">
                        </div>



                        <!--Part 2-->

                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://s3.amazonaws.com/jumpout/index.html" target="_blank">Jump Out <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/jump-out.png" alt="min11benja pagina landing para Jump Out">
                        </div>

                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://s3.amazonaws.com/urbanclean/index.html" target="_blank">Urban Clean <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/urban-clean.png" alt="min11benja pagina landing para Urban Clean">
                        </div>
                        
                            <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://www.magnocalderon.com/" target="_blank">Magno Calderon <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/magno-calderon.png" alt="min11benja-magnocalderon-paginaweb-website">
                        </div>
                        
                         <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://doña-ines.com.s3-website-us-east-1.amazonaws.com/" target="_blank">Doña Ines SLP <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/donaines.png" alt="min11benja-donaines-paginaweb-website">
                        </div>
                        
                          <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://laparrillaslp.com/" target="_blank">La Parrilla SLP <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/laparrilla.png" alt="min11benja-laparrilla-paginaweb-website">
                        </div>
                        
                         <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://qleanersco.mx/" target="_blank">Qleaners <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/qleaners.png" alt="min11benja-qleaners-paginaweb-website">
                        </div>
                        
                          <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://yeiyari.mx/" target="_blank">Yeiyari - en construccion <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/yeiyari-en-construccion.png" alt="min11benja-yeiyari-paginaweb-website">
                        </div>
                        
                          <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://s3.amazonaws.com/mussicalive.com/index-5.html" target="_blank">Mussica - en construccion <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/mussica-enconstruccion.png" alt="min11benja-mussica-paginaweb-website">
                        </div>
                        
                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://s3.amazonaws.com/anana-temp-site/index.html" target="_blank">ASG Tek - Wordpress <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/asgtek.png" alt="min11benja-asg-tek-paginaweb-website">
                        </div>
                        
                           <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://containerparkslp.com/" target="_blank">Container Park SLP <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/containerpark.png" alt="min11benja-containerparkslp-paginaweb-website">
                        </div>
                       
                        
                        
                        
                        
                        <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="http://www.nomilive.com/" target="_blank">Nomilive <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/nomilive.png" alt="min11benja pagina landing para Nomilive">
                        </div>
                        
                          <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://codepen.io/Min11Benja/full/awzXzR/" target="_blank">Code Snipet- Jobs Quote <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/stevejobs-snipet.png" alt="min11benja-codesnipet-stevejobs-quote">
                        </div>


                        <!--PART 3-->


                        <div class="col-sm-4 col-xs-6 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">


                                        <div class="my-thumb">
                                            <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/iutuber-hand-logo-version-youtube.png" class="image-popup" title=" Logo iutuber"><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="iutuber-logo-icon"></a></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/iutuber-hand-logo-version-youtube.png" alt="min11benja logo para marca de iutubers">
                        </div>
                        <div class="col-sm-4 col-xs-6 item-box vid">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://www.youtube.com/watch?v=uoV1Hk8rno4" target="_blank">Video - Estartupero<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/good-idea-video.png" alt="video thubnail para canal estartupero - como saber si mi idea de startup es buena">
                        </div>
                        
                         <div class="col-sm-4 col-xs-6 item-box vid">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://www.youtube.com/watch?v=aJATT57Ys68" target="_blank">Video - SpeedCode Tinder<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/tinder-video.png" alt="min11benja - video speedcode ">
                        </div>
                        
                        <div class="col-sm-4 col-xs-6 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">

                                        <div class="my-thumb">
                                            <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/min11benja-color.png" class="image-popup" title=" Logo min11benja"><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="min11benja-logo-icon"></a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/min11benja-color.png" alt="min11benja-logo-icon">
                        </div>



                        <div class="col-sm-4 col-xs-6 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">

                                        <div class="my-thumb">
                                            <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/estartupero.png" class="image-popup" title=" Logo iutuber"><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="estartupero-logo-icon"></a></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/estartupero.png" alt="min11benja-logo-estartupero">
                        </div>




                        <div class="col-sm-4 col-xs-6 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="" target="_blank">Instagram <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div id="bs-gslider3" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3010">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/21%20pasos%20arancar%20una%20startup.png" alt="min11benja imagen para pefil instagram estartupero 21 pasos para arancar una startup">
                                    </div>
                                    <div class="item active">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/21-steps-startup-4-01.png" alt=" imagen para perfil de estartupero en instagram 1 de 5">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/startup-21-18.png" alt="imagen para perfil de estartupero en instagram 2 de 5">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/14-17%20pasos%20arancar%20una%20startup.png" alt="imagen para perfil de estartupero en instagram 3 de 5">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/13-10%20pasos%20arancar%20una%20startup.png" alt="imagen para perfil de estartupero en instagram 4 de 5">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/3-Circle%20Venn%20Diagram.png" alt="imagen para perfil de estartupero en instagram 5 de 5">
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-6 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">

                                        <div class="my-thumb">
                                            <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/estartupero.png" class="image-popup" title=" Logo iutuber"><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="estartupero-logo-icon"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/estartupero.png" alt="min11benja-img-logo-estartupero">
                        </div>
                        <!---->
                        <div class="col-sm-4 col-xs-6 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">

                                        <div class="my-thumb">
                                            <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/instagra-roket.png" class="image-popup" title=" estartupero portada instagram"><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="estartupero-portada-instagram"></a></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/instagra-roket.png" alt="min11benja-speedcode-instagram">
                        </div>

                      <div class="col-sm-4 col-xs-6 item-box vid">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://www.youtube.com/watch?v=tPGlJtG1qBU" target="_blank">estartupero - video <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/video-idea.png" alt="min11benja-speedcode-video-roben-idea-startup">
                        </div>
                        

                        <div class="col-sm-4 col-xs-6 item-box vid">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://www.youtube.com/watch?v=SG0sRGRU3Q8&t=1s" target="_blank">speedcode - video <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/mario-speedcode-video.png" alt="min11benja-speedcode-video-super-mario-ui-front-end">
                        </div>

                        <div class="col-sm-4 col-xs-6 item-box vid">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://www.youtube.com/watch?v=H6sK-h4dh4c" target="_blank">speedcode - video <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/hubspot-speedcode-video.png" alt="min11benja-speedcode-video-hubspot-ui-front-end">
                        </div>

                        <div class="col-sm-4 col-xs-6 item-box vid">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://www.youtube.com/watch?v=FGlWIU4nNJw" target="_blank">speedcode - video <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/martian-ui.jpg" alt="min11benja-speedcode-video-martian-ui-front-end">
                        </div>


                       
                           <div class="col-sm-4 col-xs-6 item-box vid">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://www.youtube.com/watch?v=ybzXZMxmkxM&" target="_blank">marketing - video <i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/FACEBOOKvSYOUTUBE.png" alt="min11benja-speedcode-video-facebook-vs-youtube">
                        </div>

                        <div class="col-sm-6 col-xs-6 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">

                                        <div class="my-thumb">
                                            <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/LVL%20UP%208.5%20x%2011%20trifold.jpg" class="image-popup" title=" Lvl Up School flyer 1/2"><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="lvl up school flyer 1"></a></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/LVL%20UP%208.5%20x%2011%20trifold.jpg" alt="min11benja-speedcode-instagram">
                        </div>

                        <div class="col-sm-6 col-xs-6 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">

                                        <div class="my-thumb">
                                            <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/LVL%20UP%208.5%20x%2011%20trifold2.jpg" class="image-popup" title=" Lvl Up School flyer 2/2"><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="lvl up school flyer 2"></a></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/LVL%20UP%208.5%20x%2011%20trifold2.jpg" alt="min11benja-speedcode-instagram">
                        </div>
                        
                           <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://codepen.io/Min11Benja/pen/xQQxJR" target="_blank">Correo - Responsivo<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/nomilive-newsltter-email.png" alt="min11benja-nomilive-newsletter-followup">
                        </div>
                        
                           <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://codepen.io/Min11Benja/full/ReyPPR/" target="_blank">Correo - Responsivo<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/asg-tek-newsletter.jpg" alt="min11benja-asg-tek-newsletter">
                        </div>
                        
                     
                        
                           <div class="col-sm-4 col-xs-6 item-box pgw">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="https://codepen.io/Min11Benja/pen/xQQxJR" target="_blank">Correo - Responsivo<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/arcones-email.png" alt="min11benja-arcones-laexcelencia-productos">
                        </div>
                        
                         
                        
                        
                        <!--FULL IMAGE 6/6 POsters-->
                        
   <div class="col-sm-12 col-xs-6 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">

                                        <div class="my-thumb">
                                            <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/Level%20Up%2001%20Portada%20Fb%20Fan%20Page.jpg" class="image-popup" title=" Lvl Up School Facebook Cover"><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="lvl up school Facebook Cover"></a></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/Level%20Up%2001%20Portada%20Fb%20Fan%20Page.jpg" alt="min11benja-speedcode-instagram">
                        </div>



                        <div class="col-sm-6 col-xs-12 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        <h3><a href="" class="link-work">Posters - Eventos<i class="fa fa-link"></i></a></h3>
                                    </div>
                                </div>
                            </div>
                            <div id="bs-gslider3" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3010">
                                <div class="carousel-inner" role="listbox">

                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/poster-candidatas.jpg" alt="min11benja poster evento concurso de miss ahualulco 2010">
                                    </div>
                                    <div class="item active">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/poster-gta.jpg" alt="min11benja poster evento feria patronal de ahualulco 2015">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/poster-navidad.jpg" alt="min11benja poster fiesta navideña">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/poster-skool-startup.jpg" alt="min11benja poster taller de emprendimiento">
                                    </div>
                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/poster-ppp.jpg" alt="min11benja poster para evento puro pinche party concurso">
                                    </div>

                                    <div class="item">
                                        <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/Bike%20Themed%20Event%20Flyer.png" alt="min11benja poster meetup convocatoria 2.3 estartupero">
                                    </div>



                                </div>
                            </div>
                        </div>
                        
                         <div class="col-sm-6 col-xs-12 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        
                                        <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/stev-jobs-illustration-01.png" class="image-popup" title=" Steve Jobs Illustración "><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="Steve Jobs Quote Illustration"></a></div>
                  
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/stev-jobs-illustration-01.png" alt="min11benja-rick-morty-infographic-english-grammar-basic-tenses-lost-in-time">
                        </div>

  <div class="col-sm-6 col-xs-12 item-box img">
                            <div class="hover-area">
                                <div class="text-vcenter-area">
                                    <div class="text-vcenter">
                                        
                                        <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/Simple%20Ricks%20English%20Grammar%20Tenses%20Cheet%20Sheet%20-%20min11benja.png" class="image-popup" title=" rick morty infografia "><img src="<?php bloginfo('template_directory');?>/" class="img-thumbnail no-radius"  alt="rick-morty-infographic-english-grammar-basic-tenses-lost-in-time"></a></div>
                                        
                                        
                                      
                                    </div>
                                </div>
                            </div>
                            <img src="<?php bloginfo('template_directory');?>/assets/theme/img/thumb/Simple%20Ricks%20English%20Grammar%20Tenses%20Cheet%20Sheet%20-%20min11benja.png" alt="min11benja-rick-morty-infographic-english-grammar-basic-tenses-lost-in-time">
                        </div>




                     


                    </div>
                    <!-- end grid portfolio -->




                    <div class="section-padd">
                        <div class="container-body clearfix">
                            <!-- recent client -->
                            <h2 class="title"><span>Clientes recientes</span></h2>
                            <div class="white-space-10"></div>
                            <ul class="list-inline text-center list-force-img clearfix">
                                <li><a href="#"><img src="<?php bloginfo('template_directory');?>/assets/theme/img/patner/anana-cllient.jpg" alt="min11benja logo de cliente anana"></a></li>
                                <li><a href="#"><img src="<?php bloginfo('template_directory');?>/assets/theme/img/patner/fission-client.jpg" alt="min11benja logo de cliente fission branding"></a></li>

                            </ul>
                            <!-- recent client -->

                            <!-- testimonial -->
                            <h2 class="title"><span>Testimonios</span></h2>
                            <div class="white-space-10"></div>
                            <ul class="list-unstyled list-testimonial clearfix">
                                <li>
                                    <img src="<?php bloginfo('template_directory');?>/assets/theme/img/people/1.jpg" alt="min11benja imagen de perfil para javier de imapctum" class="img-thumbnail img-circle">
                                    <div class="text-testimonial">
                                        <h3>Recomendado ampliamente
                                            <small class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-empty"></i>
                        <span>(4.5/5)</span>
                      </small>
                                        </h3>
                                        Hago constar que durante el tiempo de labor en mi empresa, el señor Benjamin siempre mostró una actitud de superación , proactiva y en busca de mejora constante sin conformarse con lo establecido ademas de mostrar su honestidad y valores.
                                        <h4>Lic. Carlos Javier García Rodríguez- <small>Fundador  <a href="#"><i class="fa fa-globe"></i> www.impactum.com</a></small></h4>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php bloginfo('template_directory');?>/assets/theme/img/people/2.jpg" alt="min11benja imagen de perfil de Luis Alberto de fission branding" class="img-thumbnail img-circle">
                                    <div class="text-testimonial">
                                        <h3>Lorem ipsum dolor
                                            <small class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-empty"></i>
                        <span>(4.5/5)</span>
                      </small>
                                        </h3>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor. Phasellus viverra nulla ut metus varius laoreet.
                                        <h4>Luis Alberto Gamboa - <small>Fundadora  <a href="#"><i class="fa fa-globe"></i> www.fission-branding.com</a></small></h4>
                                    </div>
                                </li>

                            </ul>
                            <!-- end testimonial -->
                        </div>
                    </div>


                </section>
                <!-- end portfolio section -->



                <!-- social links -->
                <div class="clearfix br-t">
                    <div class="col-md-2 col-xs-4 no-padding">
                        <div class="desc-mini no-br-l">
                            <div class="mid-desc-mini">
                                <h3><a href="https://www.youtube.com/channel/UCWV-MWIHZy4e2YiHvjwqZcA" class="black-link" target="_blank">&nbsp;<i class="fa fa-youtube"></i> &nbsp;</a></h3>
                                <p><a href="https://www.youtube.com/channel/UCWV-MWIHZy4e2YiHvjwqZcA" class="black-link" target="_blank">Youtube</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 no-padding">
                        <div class="desc-mini">
                            <div class="mid-desc-mini">
                                <h3><a href="https://codepen.io/Min11Benja/" class="black-link" target="_blank">&nbsp;<i class="fa fa-codepen"></i> &nbsp;</a></h3>
                                <p><a href="https://codepen.io/Min11Benja/" class="black-link" target="_blank">CodePen</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 no-padding">
                        <div class="desc-mini">
                            <div class="mid-desc-mini">
                                <h3><a href="https://twitter.com/Min11Benja" class="black-link" target="_blank">&nbsp;<i class="fa fa-twitter"></i>&nbsp;</a></h3>
                                <p><a href="https://twitter.com/Min11Benja" class="black-link" target="_blank">Twitter</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 no-padding">
                        <div class="desc-mini">
                            <div class="mid-desc-mini">
                                <h3><a href="https://www.instagram.com/min11benja/" class="black-link" target="_blank">&nbsp;<i class="fa fa-instagram"></i>&nbsp;</a></h3>
                                <p><a href="https://www.instagram.com/min11benja/" class="black-link" target="_blank">Instagram</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 no-padding">
                        <div class="desc-mini">
                            <div class="mid-desc-mini">
                                <h3><a href="https://www.linkedin.com/in/min11benja/" class="black-link" target="_blank">&nbsp;<i class="fa fa-linkedin"></i>&nbsp;</a></h3>
                                <p><a href="https://www.linkedin.com/in/min11benja/" class="black-link" target="_blank">LinkedIn</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 no-padding">
                        <div class="desc-mini">
                            <div class="mid-desc-mini">
                                <h3><a href="https://www.facebook.com/min11benja/" class="black-link" target="_blank">&nbsp;<i class="fa fa-facebook"></i>&nbsp;</a></h3>
                                <p><a href="https://www.facebook.com/min11benja/" class="black-link" target="_blank">Facebook</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end social links -->
            </section>

        </div>
        <!-- end Content body -->

<?php get_footer();?>