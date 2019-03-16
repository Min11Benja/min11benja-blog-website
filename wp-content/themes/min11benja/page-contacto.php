<?php
/*
Template Name: Contact Page
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

    get_header('contacto');


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
                                    <span>C</span>
                                    <span>O</span>
                                    <span>N</span>
                                    <span>T</span>
                                    <span>A</span>
                                    <span>C</span>
                                    <span>T</span>
                                    <span>O</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-thumb">
                    <div class="thumb-top"><a href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-bw.png" class="image-popup" title="min11benja"><img src="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-bw.png" class="img-thumbnail no-radius"  alt=""></a></div>
                </div>

                <div class="content-hero">
                    <div class="v-content">
                        <h4 class="font-normal">No seas timid@, hablemos</h4>
                        <h1 class="myname">¿En que te puedo ayudar?</h1>
                        <h3 class="font-normal with-line">Contactame si quieres que colabore en algún proyecto, hable de un tema, asista a x evento, o para aclarar tus dudas. Soy todo oidos.</h3>
                       
                    </div>
                </div>
            </div>
            <!-- hero  -->
        </header>
        <!-- end Header -->
        <!-- Content body -->
        <div class="content-body">
       
            <div class="section-padd br-t ">
                <div class="container-body clearfix">
            
                    <div class="white-space-10"></div>
                    <h3 class="title"><span>Contactame</span></h3>
                    <div class="white-space-10"></div>

                    <!-- form comment -->
                    <form>
                        <div class="form-group">
                            <label>Tu nombre (*)</label>
                            <input type="text" class="form-control form-flat" name="fullname" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Tu correo (*)</label>
                                    <input type="email" class="form-control form-flat" name="email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Asunto </label>
                                    <input type="text" class="form-control form-flat" name="webiste">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tu mensaje (*)</label>
                            <textarea class="form-control form-flat" name="message" rows="8" required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btnc2 with-br"><span>Enviar</span></button>
                        </div>
                    </form><!-- end  form comment -->

                    <div class="white-space-10"></div>
                   

            <!-- end certificaciones -->

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
        </div>
        </div>
        </div>
        <!-- end Content body -->

<?php get_footer();?>