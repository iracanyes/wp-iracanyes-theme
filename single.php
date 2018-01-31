<?php
/**
 * Description: Template de page d'article individuel
 */

// Ajout du header
get_header();
?>


        <?php
        if(have_posts()):
            while(have_posts()):
                the_post();
        ?>
        <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
            <style>
                #subheader{
                        background: url("<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>");
                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php the_title(); ?></h1>
                        <ul class="breadcrumbs">
                            <li><a href="<?php echo get_permalink(7); ?>"><?php _e("Accueil","wp-theme-base-translate"); ?></a></li>
                            <b>/</b> 
                            <li class="active"><?php the_title(); ?></li>
                        </ul>            
                    </div>
                </div>
            </div>
        </section>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">

                            <div class="col-md-9">
                                <div class="blog-single">
                                    <!-- post begin -->
                                    <article>
                                        <div class="post-media">
                                            <!--
                                            <img src="<?php echo wp_get_attachment_image_src(the_ID(), "medium")[0]; ?>" class="img-responsive">
                                            -->
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="img-responsive">
                                        </div>
                                        <div class="post-content">
                                            <div class="post-title">
                                                <h1><?php the_title(); ?></h1>
                                            </div>
                                            <div class="post-metadata">
                                                <span class="posted-on">
                                                    <i class="fa fa-clock-o"></i>
                                                    <?php
                                                    the_time('F j, Y');
                                                    ?>
                                                </span>
                                                <span class="byline">
                                                    <i class="fa fa-user"></i>
                                                    <?php the_author(); ?>
                                                </span>
                                                <span class="cat-links">
                                                    <i class="fa fa-folder-open"></i>
                                                    <?php the_category(", ") ?>
                                                </span>
                                            </div>
                                            <div class="hr"></div>
                                            <div class="post-entry">
                                                <?php
                                                the_content();
                                                ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                      </article>
                                    <!-- post close -->
                                </div>


                            </div>
        <?php
            endwhile;

        endif;

        ?>
                    <div class="col-md-3">
                        <div class="main-sidebar">
                            <!-- 1er Widget
                            <aside class="widget widget_text">
                                <h3 class="widget-title">About</h3>
                                <div class="tiny-border"></div>                                         
                                <div class="textwidget">
                                    <p>
                                        Nulla eleifend, sapien eget porttitor maximus, nisl ante convallis dolor, nec consequat felis ex a ex. Etiam vestibulum enim euismod dui vestibulum, vitae fringilla nibh consectetur. Integer at volutpat augue. Donec consectetur, est nec laoreet scelerisque, lacus nulla fermentum odio, ut accumsan enim ipsum a justo.
                                    </p>                              
                                </div>
                            </aside>
                            -->
                            <?php
                            dynamic_sidebar("text-bloc-sidebar");
                            ?>
                            <!-- Deuxième Widget -->
                            <aside class="widget widget_categories">
                                <h3 class="widget-title"><?php _e("Catégories", "wp-theme-base-translate"); ?></h3>
                                <div class="tiny-border"></div>    
                                <?php
                            $argsSidebar = array(
                                "menu" => "sidebar-menu",
                                "theme_location"=>"sidebar-menu"
                            );

                            wp_nav_menu($argsSidebar);
                            ?>
                            </aside>


                        </div>                        
                    </div>
                </div>
            </div> 
        </div>
        <!-- content close -->

<?php
// Ajout du footer
get_footer();

?>