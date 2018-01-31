<?php
/**
 * Description: Template de Page par défaut du site
 */

// Ajout du header de la page
get_header();
?>


<!-- content begin -->

<div id="content" class="no-padding">

    <!-- section begin -->
    <section id="section-contact">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <?php
                    if( $section1 = get_field("section1")):
                    ?>
                    <div class="intro-text text-center">
                        <h2><?php echo $section1["titre"]; ?></h2>
                        <p>
                            <?php echo $section1['texte']; ?>
                        </p>
                    </div>
                    <?php
                    endif;
                    ?>
                    <!--
                    <form action="" class="wpcf7-form">
                        <div class="col-one-third">
                            <input type="text" placeholder="Your Name">
                        </div>
                        <div class="col-one-third margin-one-third">
                            <input type="email" placeholder="Your Email">
                        </div>
                        <div class="col-one-third">
                            <input type="text" placeholder="Your Phone">
                        </div>
                        <div class="col-full"><textarea placeholder="Your Message"></textarea></div>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <div class="divider-single"></div>
                            <button class="btn btn-primary btn-big">Send Email</button>
                        </div>
                    </form>
                    -->
                    <?php
                    if($form = get_field("contact_form")):
                        echo $form;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section gmap begin -->
    <section id="section-gmap" class="no-padding">
        <div id="map-canvas" class="map-canvas"></div>
    </section>
    <!-- section gmap close -->

</div>

<!-- content close -->

       
<?php
// Ajout du footer de la page
get_footer();
?>
