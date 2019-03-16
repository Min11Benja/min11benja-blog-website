<?php
/**
 * The template for displaying the footer
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

<!-- footer -->
        <footer class="main-footer">
            &COPY; Copyright 2018 | Pagina Web hecha con ♥ por <a href="<?php echo get_page_link(14); ?>">min11benja</a>
        </footer>
        <!-- footer -->
    </div>
    <!-- body-area -->


    <!-- portfolio details ajax -->
    <div class="over-fly-area" id="load-works">
        <div class="inner-overfly" id="work-wait-msg">
            <div class="middle-overfly">
                <h2 class="title-over">POR FAVOR ESPERAR...</h2>
            </div>
        </div>
        <div class="work-close"><a href="#" class="close-panel-work btn btn-xs btn-default">Cerrar</a></div>
        <div id="load-work-html"></div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/jquery.easing-1.3.pack.js"></script>

    <!-- Include all compiled plugins (below)-->
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/jquery.easypiechart.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/isotope.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/validator/jquery.validate.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/simpleCaptcha/jquery.simpleCaptcha.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/Simple-Ajax-Uploader/SimpleAjaxUploader.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/external/metisMenu/metisMenu.js"></script>

    <!-- theme config -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/theme/js/theme.js"></script>


</body>

</html>

