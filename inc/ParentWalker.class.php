<?php 

class ParentWalker extends Walker_Nav_Menu {
  function display_element ( $element, &$children, $max_depth, $depth = 0, $args, &$output ) {
    $id_field = $this->db_fields['id'];
    if (!empty($children[$element->$id_field])) { 
        $element->classes[] = 'menu-item-parent'; //enter any classname you like here!
    }
    parent::display_element($element, $children, $max_depth, $depth, $args, $output);
  }
}