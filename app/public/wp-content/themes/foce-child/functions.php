<!-- Par default -->

<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

// Début de mon travail 

// Charger les styles du thème parent et du thème enfant
add_action('wp_enqueue_scripts', 'foce_child_enqueue_styles');

function foce_child_enqueue_styles()
{

    // Charger le style du thème parent
    wp_enqueue_style(
        'parent-style', // Identifiant unique pour le style du thème parent
        get_template_directory_uri() . '/style.css', // Charge automatiquement le fichier style.css du thème parent
        array(), // Pas de dépendance pour le parent
        filemtime(get_template_directory() . '/style.css'), // Dernière modification du fichier
        false // Pas d'option de type (par défaut, c'est 'all')
    );

    // Charger le style du thème enfant
    wp_enqueue_style(
        'child-style', // Identifiant unique pour le style du thème enfant
        get_stylesheet_directory() . '/style.css', // Charge automatiquement le fichier style.css du thème enfant
        array('parent-style'), // Dépendance au style du thème parent
        filemtime(get_stylesheet_directory() . '/style.css'), // Dernière modification du fichier
        false // Pas d'option de type
    );
}



// Enregistrer et charger le script JavaScript du thème enfant
function foce_child_enqueue_scripts()
{
    wp_enqueue_script(
        'child-script', // Identifiant unique pour le script JS
        get_stylesheet_directory_uri() . '/js-child/index.js', // Chemin vers index.js dans le dossier "js" du thème enfant
        array(), // Dépendances, vide ici car aucune dépendance spécifique
        null, // Version (null pour éviter de spécifier une version)
        true // Charger le script dans le footer (true)
    );
}

// Ajouter l'action pour charger les styles et les scripts
add_action('wp_enqueue_scripts', 'foce_child_enqueue_scripts');

?>



<?php
// Fonction pour charger les scripts du thème parent dans le thème enfant
function foce_child_enqueue_parent_scripts()
{
    // Charger le script customizer.js du thème parent
    wp_enqueue_script(
        'parent-customizer', // Identifiant unique pour le script customizer.js du thème parent
        get_template_directory_uri() . '/js/customizer.js', // Chemin vers le fichier customizer.js du thème parent
        array(), // Pas de dépendances supplémentaires
        null, // Pas de version spécifique
        true // Charger dans le footer
    );

    // Charger le script navigation.js du thème parent
    wp_enqueue_script(
        'parent-navigation', // Identifiant unique pour le script navigation.js du thème parent
        get_template_directory_uri() . '/js/navigation.js', // Chemin vers le fichier navigation.js du thème parent
        array(), // Pas de dépendances supplémentaires
        null, // Pas de version spécifique
        true // Charger dans le footer
    );


    // Connecté le script index.js du thème enfant pour ajout Js
    wp_enqueue_script(
        'child-script', // Identifiant unique pour le script du thème enfant
        get_stylesheet_directory_uri() . '/js-child/index.js', // Chemin vers le fichier index.js dans le dossier js-child du thème enfant
        array('parent-customizer', 'parent-navigation'), // Dépendances du script du thème enfant (assurez-vous que les scripts du parent sont chargés avant)
        null, // Pas de version spécifique
        true // Charger dans le footer
    );
}

// Ajouter l'action pour charger les scripts
add_action('wp_enqueue_scripts', 'foce_child_enqueue_parent_scripts');
?>

<?php
// Fonction pour enregistrer les menus
function theme_enfant_scripts()
{
    // Enqueue le fichier JS
    wp_enqueue_script('menu.js', get_stylesheet_directory_uri() . '/js-child/menu.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enfant_scripts');

// FONT AWESOME

function foce_enqueue_assets()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('foce-style', get_stylesheet_uri());
    wp_enqueue_script('foce-menu', get_template_directory_uri() . '/js/menu.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'foce_enqueue_assets');


function foce_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Menu principal', 'foce'),
    ));
}
add_action('after_setup_theme', 'foce_register_menus');
