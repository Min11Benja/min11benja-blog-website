<?php
/*
Template Name: header-portfolio
*/
/**
 * The header for our theme
╔ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═  ═ ═ ═ ═ ═ ═ ╗
       \||/
       \||/     Tema: min11benja              
     .<><><>.   Autor: Benjamin Martinez Jurez (www.min11benja.com)
    .<><><><>.  Fecha Creacion: 21 Septiembre 2018
    '<><><><>'  Contacto: info@min11benja.com / redoxz811@gmail.com
    ''<><><>''   
      `''''´    
╚ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═  ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ═ ╝
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package min11benja
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>min11benja - Blog Portafolio - Portafolio </title>
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory');?>/assets/external/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Sarala:400,700%7COpen+Sans:400,300' rel='stylesheet' type='text/css'>

    <!-- Theme Style -->
    <link href="<?php bloginfo('template_directory');?>/assets/theme/css/style.css" rel="stylesheet" type="text/css">
    <!-- Your custom css OMITIDO PARA ESTA PAGINA ENE SPECIFICO-->
  

    <!-- Font Icons -->
    <link href="<?php bloginfo('template_directory');?>/assets/external/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Captcha -->
    <link href="<?php bloginfo('template_directory');?>/assets/external/simpleCaptcha/jquery.simpleCaptcha.css" rel="stylesheet">
    <!-- lightbox -->
    <link href="<?php bloginfo('template_directory');?>/assets/external/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
	
    

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80877573-1 "></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-80877573-1 ');
</script>


	
	<?php wp_head(); ?>
</head>

<body >
    <!-- Page Loader -->
    <div class="page-loader">
        <div class="v-align-center">
            <div class="middle-content">
                <div class="img-p-area"> <img src="<?php bloginfo('template_directory');?>/assets/theme/img/min11benja-bw.png" alt="" class="img-thumbnail no-radius"></div>
                <span class="itsme">min11benja</span>
                <h4>Portafolio</h4>
                <p>Cargando...</p>
                <div class="anim-pg">
                    <span></span>
                </div>
                <div class="force-pg"><button type="button" id='force-close-pg' class="btn">ALV con esto &rarr;</button></div>
            </div>
        </div>
    </div>
    <!-- End Page Loader -->
    <!-- body-area -->
    <div class="body-area">
        <!-- Header -->
        <header class="main-header">
            <div class="nav-main">
                <span class="itsme">min11benja </span>
                <a href="#menu-ovefly" class="toogle-overfly"><i class="fa fa-bars open-t"></i> <i class="fa fa-times close-t"></i></a>
                <a href="#search-ovefly" class="toogle-overfly"><i class="fa fa-search open-t"></i> <i class="fa fa-times close-t"></i></a>
                <a href="#share-ovefly" class="toogle-overfly"><i class="fa fa-plus open-t"></i> <i class="fa fa-times close-t"></i></a>
            </div>

            <div class="over-fly-area" id="menu-ovefly">
                <div class="inner-overfly">
                    <div class="middle-overfly">
                        
                        <h2 class="title-over">Menu</h2>
                        
                        
                        <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
					
					<?php
						wp_nav_menu( array(
						
						/*Must be registered with register_nav_menu() in order to be selectable by the user.*/
							'theme_location'	=> 'portfolio',
		
						/*container_id: ID that is applied to the container.*/
							'container_id'		=> 'menu',
							
						/*container_class: css class that is applied to the container.*/
							'container_class'	=> 'main-nav',
							
						/*menu_class: css class to use for the ul element which forms the menu*/
							'menu_class'		=> 'nav2'
						) );
					?>
                                         
                        
                    </div>
                </div>
            </div>

            <!--Buscador-->
            <div class="over-fly-area" id="search-ovefly">
                <div class="inner-overfly">
                    <div class="middle-overfly">
                        <h2 class="title-over">Encuentra mi articulo</h2>
                        <form class="from-search">
                            <div class="form-group">
                                <input type="search" name="s" class="form-control input-lg input-search" placeholder="Escribe palabra aquí !">
                            </div>
                            <div class="form-group">
                                <button class="btn btnc2"><span>Buscar</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/Buscador-->

            <!--Share-->
            <div class="over-fly-area" id="share-ovefly">
                <div class="inner-overfly">
                    <div class="middle-overfly">
                        <h2 class="title-over">Si te gusto este contenid por favor comparte con tus amig@s</h2>
                        <!-- You MUST change the URL definition in these links to share YOUR page - simply change the URL -->
                        <div class="social-share">
                            <a href="https://plus.google.com/share?url=http://www.min11benja.com" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            <a href="http://pinterest.com/pin/create/button/?url=http://min11benja.com" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="http://www.facebook.com/share.php?u=http://www.min11benja.com" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="http://twitter.com/home?status=http://www.min11benja.com" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/share-->
