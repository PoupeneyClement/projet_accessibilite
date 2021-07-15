<?php
// fonction qui charge la feuille de style du thème parent
function montheme_enqueue_styles() {
wp_enqueue_style(
'styleParent', get_template_directory_uri() . '/style.css'
);
}
// exécution de la fonction
add_action(
'wp_enqueue_scripts', 'montheme_enqueue_styles'
);
?>