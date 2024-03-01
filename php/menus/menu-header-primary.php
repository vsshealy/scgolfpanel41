<?php 
    /**
     * php/menus/menu-header-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.03.01)
     * @copyright 2024 (2024.03.01)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-3',
            'menu_id' => 'Header-Primary'
        )
    );
?>