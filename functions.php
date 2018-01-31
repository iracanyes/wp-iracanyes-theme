<?php
/**
 * Created by PhpStorm.
 * User: isk
 * Date: 28.01.18
 * Time: 14:09
 */


function wp_base_theme_setup(){
    // Ajout du support pour les images à l'une des articles
    add_theme_support("post-thumbnails");

    // Support Admin pour la gestion des menus
    add_theme_support("menus");

    //Support pour les sidebars
    add_theme_support("sidebars");

    // Support pour les images de fond
    add_theme_support("custom-background");

    // Support pour la traduction
    load_theme_textdomain(
        "wp-theme-base-translate",
        get_template_directory()."/languages"
    );


}
// Event Listener : Image à la une
add_action("after_setup_theme", "wp_base_theme_setup");

/*
     * Définition des menus
     *
     */
register_nav_menus(
    array(
        "main-menu" => __("Menu principal","menu-primaire"),
        "footer-menu" => __("Menu bas de page", "menu-bas-de-page"),
        "sidebar-menu" => __("Menu secondaire", "menu-secondaire")
    )
);


/*
 * Définition de widget pour le thème
 */
function wp_base_theme_widgets_init(){

    // Un widget de type texte en bas de page
    register_sidebar(
        array(
            "id" => "text-bloc-footer",
            "name" => __("Footer : Widget", "wp-theme-base-translate"),
            "description" => __("Ajout d'un contenu textuel ou autre.", "wp-theme-base-translate"),
            "before_widget" => "",
            "after_widget" => "",
            "before_title" => "<h3 class=\"widget-title\">",
            "after_title" => "</h3>",
        )
    );

    //Un widget de type texte à droite de la page détails de tous les articles
    register_sidebar(
        array(
            "name" => __("Sidebar : Widget", "wp-theme-base-translate"),
            "id" => "text-bloc-sidebar",
            "description" => __("Ajout d'un contenu textuel ou autre.", "wp-theme-base-translate"),
            "before_widget" => "<aside class=\"widget widget_text\">",
            "after_widget" => "</aside>",
            "before_title" => "<h3 class=\"widget-title\">",
            "after_title" => "</h3>",
        )
    );
}

add_action("widgets_init", "wp_base_theme_widgets_init");


// Ajout des ressources JS

if(!function_exists("wp_iracanyes_theme_enqueue_style")){
    function wp_iracanyes_theme_enqueue_scripts()
    {
        // Ajout du support JQuery
        // Fct pour ajouter les scripts pré-installé dans Wordpress
        wp_register_script("jquery");

    }

    add_action("wp_enqueue_scripts", "wp_iracanyes_theme_enqueue_scripts");
}


/**
 * Filter the excerpt length to 30 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wp_example_excerpt_length() {
    return 12;
}
add_filter( 'excerpt_length', 'wp_example_excerpt_length');


/**
 * Ajout clé Google Map API
 */

function mon_acf_init(){
    acf_update_setting("google_api_key", "AIzaSyCEgdMODEkYBGIiSkO1i9JJYvAdGfQz6uE") ;

}

add_action("acf/init", "mon_acf_init");
