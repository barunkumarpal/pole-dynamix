<?php
class primary_nav_walker extends Walker_Nav_Menu{    

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){    

        

        if (in_array("menu-item-has-children", $item->classes)) {
            $output .= '<li class="nav-item dropdown">';
            $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
            $output .= $args->before;
            $output .= '<a href="'.$item->url.'" class="dropdown-item">';
            $output .= $args->link_before.$item->title.$args->link_after;          
            $output .='</a>';
            $output .= $args->after;
        }else{
            $output .= '<li class="nav-item">';
            $output .= $args->before;
            $output .= '<a href="'.$item->url.'" class="nav-link">';
            $output .= $args->link_before.$item->title.$args->link_after;        
            $output .='</a>';
            $output .= $args->after;
        }

        
        // if (in_array("menu-item-has-children", $item->classes)) {
        //     $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
        //     $output .= $args->before;
        //     $output .= '<a href="'.$item->url.'" class="nav-link">';
        //     $output .= $args->link_before.$item->title.$args->link_after;
    
          
        //     $output .='</a>';
        //     $output .= $args->after;
        // }
    }
    
    public function start_lvl(&$output, $depth = 0, $args = array()){
        // $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
        $output .= '<div class="dropdown-divider"></div>';       

      
        // <a class="dropdown-item" href="#">Pole Basics Tops</a>        
        // <a class="dropdown-item" href="#">Pole Basics Pants</a>
     
        
    }
    public function end_lvl(&$output, $depth = 0, $args = array()){
        // $output .= '</div>';
        // $output .= '</a>';
        $output .= '';
    }

    public function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
        if (in_array("menu-item-has-children", $item->classes)) {
            $output .= '</div>';
            $output .= '</li>';
        }else{
            $output .= '</li>';
        }
        
    }
    
}