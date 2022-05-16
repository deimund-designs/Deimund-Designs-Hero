<?php
/* Collection of Walker classes */

class DD_Walker_Nav_Menu_Primary extends Walker_Nav_Menu{
	
//	function start_lvl( &$output, $depth = 0, $args = array() ){
//		
//		// Create the indentation for the html markup.
//		$indent = str_repeat("\t", $depth);
//		
//		// Define the submenu class.
//		$submenu = ' sub_menu';
//		
//		// Add our output the the current output of WordPress
//		$output .= "\n$indent<ul class = \"dropdown-menu$submenu depth_$depth\">\n>";
//	}
//	
//	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){
//		
//		// Create the indentation for the html markup.
//		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
//		
//		// create the elements to be used and make sure nothing is undefined.
//		$li_attributes = '';
//		$class_names = '';
//		$value = '';
//		
//		// If there are html classes defined through the admin panel or by the theme, use those.
//		// If not, create an empty array to populate later.
//		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
//		
//		// Create an array that contains all the html classes we want without loosing the 
//		// Wordpress classes
//		$classes[] = ( $args->walker->has_children ) ? 'dropdown' : '';
//		$classes[] = ( $item->current || $item->current_item_ancestor) ? 'active' : '';
//		$classes[] = 'menu-item-'.$item->ID;
//		if( $depth && $args->has_children ){
//			$classes[] = 'dropdown-submenu';
//		}
//		
//		// Join our html classes with the existing classes. The apply_filters is a WordPress function,
//		// and the array_filter is a plain old php funcion.
//		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
//		$class_names = ' class="' . esc_attr($class_names) . '"';
//		
//		// Create the item's ID
//		$id = apply_filter('nav_menu_id', 'menu-item-'.$item->ID, $item, &args);
//		$id = strlen( $id ) ? ' id="'.esc_attr( $id ).'"' : '';
//		
//		//Print some of the output.
//		$output .= $indent.'<li'.$id.$value.$class_names.$li_attributes.'>';
//		$attributes = !empty( $item->attr_title ) ? ' title="'.esc_attr( $item->attr_title ).'"' : '';
//		$attributes .= !empty( $item->target ) ? ' target="'.esc_attr( $item->target ).'"' : '';
//		$attributes .= !empty( $item->xfn ) ? ' rel="'.esc_attr( $item->xfn ).'"' : '';
//		$attributes .= !empty( $item->url ) ? ' href="'.esc_attr( $item->url ).'"' : '';
//		
//		// If the container has_children, add specific output.
//		$attributes .= ( $args->has_children ) ? ' class= "dropdown-toggle" data-toggle= "dropdown"' : '';
//		
//		// Not sure what this is, I just know I need them!
//		$item_output = $args->before;
//		$item_output .= $args->after;
//	}
//	
//	function end_el( ){
//	}
//	
//	function end_lvl(){
//	}
}