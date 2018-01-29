<?php
/**
 * Created by PhpStorm.
 * User: isk
 * Date: 28.01.18
 * Time: 14:18
 */
?>
<!-- footer begin -->
<footer class="footer-1 bg-color-1">

    <!-- main footer begin -->
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="compact-widget">
                        <div class="widget-inner">

                            <h3 class="widget-title">
                                <?php __("Résumé", "wp-theme-base-translate"); ?>
                            </h3>
                            <p>
                                <?php
                                dynamic_sidebar("text-bloc-footer");
                                ?>
                            </p>


                            <div class="social-icons clearfix">
                                <a href="#" class="facebook" ><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter" ><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google" ><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="youtube" ><i class="fa fa-youtube-play"></i></a>
                                <a href="#" class="linkedin" ><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="compact-widget">
                        <h3 class="widget-title"><?php __('Catégories', 'wp-theme-base-translate'); ?></h3>
                        <div class="widget-inner">
                            <!--
                            <ul>
                                <li><a href="categories.html">Finance</a></li>
                                <li><a href="categories.html">Bilan</a></li>
                                <li><a href="categories.html">Conseils</a></li>
                                <li><a href="categories.html">Juridique</a></li>
                            </ul>
                            -->
                            <?php
                            $argsFooter = array(
                                "menu" => "footer-menu",
                                "menu_class" => "clearfix",
                                "container" => "div",
                                "container_class" => "widget_inner",
                                "container_id" => "",
                                "theme_location"=>"footer-menu"
                            );

                            wp_nav_menu($argsFooter);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">

                    <div class="compact-widget">
                        <h3 class="widget-title">
                            <?php __('Contact Us', 'wp-theme-base-translate'); ?>
                        </h3>
                        <div class="widget-inner">
                            <p>Address: 379 5th Ave  New York, NYC <br> 10018, United States</p>
                            <p>Phone: +(112) 345 6879</p>
                            <p>Fax: +(112) 345 8796</p>
                            <p>Email: contact@compact.com</p>
                        </div>
                    </div>


                </div>

                <div class="col-md-3">
                    <div class="compact-widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <div class="widget-inner">
                            <div class="newsletter newsletter-widget">
                                <p>Stay informed about our news and events</p>
                                <form action="" method="post">
                                    <p><input class="newsletter-email" type="email" name="email" placeholder="Your email"><i class="fa fa-envelope-o"></i></p>
                                    <p><input class="newsletter-submit" type="submit" value="Subscribe"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- main footer close -->

    <!-- sub footer begin -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    Copyright &copy; 2016 Designed by AuThemes. All rights reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- sub footer close -->

</footer>
<!-- footer close -->

</div>

<a id="to-the-top" ><i class="fa fa-angle-up"></i></a>

<!-- LOAD JS FILES -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/easing.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fitvids.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>

<!-- Project Grid -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/masonry.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.isotope.min.js"></script>

<!-- Waypoints-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sticky.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/compact.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tipper.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/about.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom-index1.js"></script>


<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/revslider-custom.js"></script>


<script type="text/javascript">
    /* Portfolio Sorting */
    jQuery(document).ready(function($){
        (function ($) {

            var container = $('#blog-grid');

            function getNumbColumns() {
                var winWidth = $(window).width(),
                    columnNumb = 1;
                if (winWidth > 1500) {
                    columnNumb = 4;
                } else if (winWidth > 1200) {
                    columnNumb = 3;
                } else if (winWidth > 900) {
                    columnNumb = 2;
                } else if (winWidth > 600) {
                    columnNumb = 2;
                } else if (winWidth > 300) {
                    columnNumb = 1;
                }

                return columnNumb;
            }

            function setColumnWidth() {
                var winWidth = $(window).width(),
                    columnNumb = getNumbColumns(),
                    postWidth = Math.floor(winWidth / columnNumb);
            }

            $('#portfolio-filter #filter a').click(function () {
                var selector = $(this).attr('data-filter');

                $(this).parent().parent().find('a').removeClass('current');
                $(this).addClass('current');

                container.isotope( {
                    filter : selector
                });

                setTimeout(function () {
                    reArrangeProjects();
                }, 300);

                return false;
            });

            function reArrangeProjects() {
                setColumnWidth();
                container.isotope('reLayout');
            }

            container.imagesLoaded(function () {
                setColumnWidth();


                container.isotope( {
                    itemSelector : '.item',
                    layoutMode : 'masonry',
                    resizable : false
                } );
            } );

            $(window).on('debouncedresize', function () {
                reArrangeProjects();
            } );
        } )(jQuery);
    } );

    /* DebouncedResize Function */
    (function ($) {
        var $event = $.event,
            $special,
            resizeTimeout;


        $special = $event.special.debouncedresize = {
            setup : function () {
                $(this).on('resize', $special.handler);
            },
            teardown : function () {
                $(this).off('resize', $special.handler);
            },
            handler : function (event, execAsap) {
                var context = this,
                    args = arguments,
                    dispatch = function () {
                        event.type = 'debouncedresize';

                        $event.dispatch.apply(context, args);
                    };


                if (resizeTimeout) {
                    clearTimeout(resizeTimeout);
                }


                execAsap ? dispatch() : resizeTimeout = setTimeout(dispatch, $special.threshold);
            },
            threshold : 150
        };
    } )(jQuery);
</script>


<?php
// Ajout de la fct wp_footer()
wp_footer();
?>
</body>
</html>

