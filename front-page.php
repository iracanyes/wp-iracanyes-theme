<?php
/**
 * Template Name: Page d'accueil
 * Description: Template de la Page d'accueil
 *
 */
// Ajout du header de la page
get_header();
?>


        <!-- slider -->
        <div id="slider">
            <!-- revolution slider begin -->
            <div class="fullwidthbanner-container">
                <div id="revolution-slider">
                    <ul>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img-rev-slider/bg-1.jpg" alt="">

                        </li>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img-rev-slider/bg-3.jpg" alt="">

                        </li>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img-rev-slider/bg-2.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- revolution slider close -->
        </div>
        <!-- slider close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-padding">

            <!-- section begin -->
            <section id="section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about/we-are-thumb.jpg" alt="about image" class="img-responsive">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="about-box">
                                <h2 class="box-title">We are Compact</h2>
                                <div class="tiny-border"></div>
                                <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. Suspendisse eu rhoncus ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
                                <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. Suspendisse eu rhoncus ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
                                <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. Suspendisse eu rhoncus ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
                                <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. Suspendisse eu rhoncus ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
                            </div>
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-project" class="no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="latest-projects clearfix">
                                <div class="latest-projects-intro">
                                    <h2 class="box-title">Derniers articles</h2>
                                    <div class="tiny-border-light"></div>            
                                    <p>Pellentesque gravida diam orci, vitae venenatis est eleifend sed. Proin non pretium turpis</p>        
                                </div>
                                <div class="latest-projects-wrapper">
                                    <div id="latest-projects-items" class="latest-projects-items">
                                        <div class="item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/small-2.jpg" alt="" class="img-responsive">
                                            <div class="project-details">
                                                <p class="folio-title"><a href="#">Plan For Your Bussiness</a></p>
                                                <p class="folio-cate"><i class="fa fa-tag"></i><a href="#">Finance</a>, <a href="#">Marketing</a></p>
                                                <div class="folio-buttons">
                                                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/medium-1.jpg" title="Plan For Your Bussiness" class="folio"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/projects/small-3.jpg" alt="" class="img-responsive">
                                            <div class="project-details">
                                                <p class="folio-title"><a href="#">Business Growth Solutions</a></p>
                                                <p class="folio-cate"><i class="fa fa-tag"></i><a href="#">Finance</a>, <a href="#">Marketing</a></p>
                                                <div class="folio-buttons">
                                                    <a href="images/projects/medium-2.jpg" title="Business Growth Solutions" class="folio"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="images/projects/small-4.jpg" alt="" class="img-responsive">
                                            <div class="project-details">
                                                <p class="folio-title"><a href="#">Enterprise Development</a></p>
                                                <p class="folio-cate"><i class="fa fa-tag"></i><a href="#">Finance</a>, <a href="#">Marketing</a></p>
                                                <div class="folio-buttons">
                                                    <a href="images/projects/medium-3.jpg" title="Enterprise Development" class="folio"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="images/projects/small-1.jpg" alt="" class="img-responsive">
                                            <div class="project-details">
                                                <p class="folio-title"><a href="#">Successful Business</a></p>
                                                <p class="folio-cate"><i class="fa fa-tag"></i><a href="#">Finance</a>, <a href="#">Marketing</a></p>
                                                <div class="folio-buttons">
                                                    <a href="images/projects/medium-4.jpg" title="Successful Business" class="folio"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="images/projects/small-5.jpg" alt="" class="img-responsive">
                                            <div class="project-details">
                                                <p class="folio-title"><a href="#">Marketing Strategy</a></p>
                                                <p class="folio-cate"><i class="fa fa-tag"></i><a href="#">Finance</a>, <a href="#">Marketing</a></p>
                                                <div class="folio-buttons">
                                                    <a href="images/projects/medium-5.jpg" title="Marketing Strategy" class="folio"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="images/projects/small-6.jpg" alt="" class="img-responsive">
                                            <div class="project-details">
                                                <p class="folio-title"><a href="#">Effective Recruitment</a></p>
                                                <p class="folio-cate"><i class="fa fa-tag"></i><a href="#">Finance</a>, <a href="#">Marketing</a></p>
                                                <div class="folio-buttons">
                                                    <a href="images/projects/medium-6.jpg" title="Effective Recruitment" class="folio"><i class="fa fa-search"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section>
                <!-- Container Begin -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="service-box service-style2">
                                <img src="images/services/thumbs-1.png" alt="" class="img-responsive">
                                <div class="service-content">
                                    <h3>Mobile Ready</h3>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box service-style2">
                                <img src="images/services/thumbs-2.png" alt="" class="img-responsive">
                                <div class="service-content">
                                    <h3>Very Easy Customizie</h3>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-box service-style2">
                                <img src="images/services/thumbs-3.png" alt="" class="img-responsive">
                                <div class="service-content">
                                    <h3>Free Icon Font Awesome</h3>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </section>
            <!-- section close -->
            
        </div>
        <!-- content close -->


<?php
// Ajout du footer de la page
get_footer();
?>