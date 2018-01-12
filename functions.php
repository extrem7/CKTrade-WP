<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
show_admin_bar( false );
function path() {
	echo get_template_directory_uri() . '/';
}

function the_image( $name, $id ) {
	echo 'src="' . get_field( $name, $id )['url'] . '" ';
	echo 'alt="' . get_field( $name, $id )['alt'] . '" ';
}

function repeater_image( $name ) {
	echo 'src="' . get_sub_field( $name )['url'] . '" ';
	echo 'alt="' . get_sub_field( $name )['alt'] . '" ';
}

function pre( $array ) {
	echo "<pre>";
	print_r( $array );
	echo "</pre>";
}

function dropdown( $id ) {
	$menu       = wp_get_nav_menu_object( $id );
	$menu_items = wp_get_nav_menu_items( $menu );
	foreach ( $menu_items as $item ) {
		if ( $item->menu_item_parent == 0 ) {
			$sub_items = [];
			foreach ( $menu_items as $i ) {
				if ( $i->menu_item_parent == $item->ID ) {
					array_push( $sub_items, $i );
				}
			}
			echo '<li><a href="' . $item->url . '"';
			if ( ! empty( $sub_items ) ) {
				echo 'data-toggle="dropdown"';
			}
			echo '>';
			echo $item->title;
			echo '</a>';
			if ( ! empty( $sub_items ) ) {
				echo '<div class="dropdown-menu"><div class="wrap"><ul>';
				foreach ( $sub_items as $sub_item ) {
					$sub_sub_items = [];
					foreach ( $menu_items as $i_sub ) {
						if ( $i_sub->menu_item_parent == $sub_item->ID ) {
							array_push( $sub_sub_items, $i_sub );
						}
					}

					echo '<li class="dropdown-submenu"><a href="' . $sub_item->url . '"';
					if ( ! empty( $sub_sub_items ) ) {
						echo ' class="sub-open"';
					}
					echo '>';
					echo $sub_item->title;
					echo '</a>';

					if ( ! empty( $sub_sub_items ) ) {
						echo '<div class="dropdown-menu"><ul>';
						foreach ( $sub_sub_items as $sub_sub_item ) {
							echo '<li><a href="' . $sub_sub_item->url . '">' . $sub_sub_item->title . '</a></li>';
						}
						echo '</ul></div>';
					}
					echo '</li>';
				}
				echo '</ul></div></div>';
			}
			echo '</li>';
		}
	}
}

if ( function_exists( 'acf_add_options_page' ) ) {
	$main = acf_add_options_page( array(
		'page_title' => 'Настройки темы',
		'menu_title' => 'Настройки темы',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false,
		'position'   => 2,
		'icon_url'   => 'dashicons-admin-customizer',
	) );
}