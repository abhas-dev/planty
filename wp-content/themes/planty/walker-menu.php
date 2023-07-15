<?php

if ( !class_exists('My_Nav_Menu_Walker') ) {
	class WalkerMenu extends Walker_Nav_Menu {
		// Ajoute une classe au niveau de la liste (ul)
		public function start_lvl( &$output, $depth = 0, $args = null ) {
			$output .= '<ul class="header__dropdown">';
		}

		// Ajoute une classe au niveau des éléments de la liste
		public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
			$output .= '<li class="header__dropdown-item">';
			$output .= '<a href="' . $item->url . '" class="header__dropdown-link">';
			$output .= $item->title;
			$output .= '</a>';
		}

		// Sert à ajouter des balises à la fin de chaque élément de la liste
		public function end_el( &$output, $item, $depth = 0, $args = null ) {
			$output .= '</li>';
		}

		// Sert à ajouter des balises de fermeture à la fin de la liste
		public function end_lvl( &$output, $depth = 0, $args = null ) {
			$output .= '</ul>';
		}

	}
}