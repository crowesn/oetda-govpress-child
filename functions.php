<?php
 
add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {
if ( 'primary' === $args->theme_location ) {
        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();

        $items .=   '<li class="menu_search">' . $searchform . '</li>' ;
}
    return $items;
}
 
?>