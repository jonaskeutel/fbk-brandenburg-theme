<?php


// add theme support for custom elements

function fbk_add_theme_support($value=''){
  add_theme_support('custom-header');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'fbk_add_theme_support');

// register the menus

function fbk_menus(){
  register_nav_menus( array(
    'header-menu' => 'Menü im Kopfbereich der Seite',
    'footer-menu' => 'Menü im Fußbereich der Seite'
  ));
}

add_action('init','fbk_menus');


// add dropdown to header menu

function add_dropdown_class_to_nav( $classes, $item, $args ) {
  if ( 'header-menu' === $args->theme_location ) {
    if ( in_array( 'menu-item-has-children', $item->classes) ) {
      $classes[] = 'dropdown';
    }
  }
  return $classes;
}

add_filter( 'nav_menu_css_class', 'add_dropdown_class_to_nav', 10, 4 );

function add_dropdown_class_to_submenu_nav( $classes, $args ) {
  if ( 'header-menu' === $args->theme_location ) {
    $classes[] = 'dropdown-menu';
  }
  return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'add_dropdown_class_to_submenu_nav', 10, 4 );

function add_dropdown_atts_to_menu_link( $atts, $item, $args ) {
    if( $args->theme_location == 'header-menu' ) {
   		if ( in_array( 'menu-item-has-children', $item->classes) ){
        $atts['class'] = 'dropdown-toggle disabled';
    	  $atts['data-toggle'] = "dropdown";
    	  $atts['role'] = "button";
    	  $atts['aria-haspopup'] = "true";
    	  $atts['aria-expanded'] = "false";
  		}
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_dropdown_atts_to_menu_link', 10, 4 );

 ?>
