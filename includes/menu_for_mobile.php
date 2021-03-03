<?php
/**
 * @package WordPress
 * @subpackage Dell
*/
?>

<?php $nenuname =  get_field( 'add_menu_name' ); 
    if(!empty($nenuname)){
	
	$menu_name = $nenuname;
	?>
<section class="tab-bar-section mobile-view">
            <div class="card accordion dell-accordion">
                <div class="card-header" id="tabbar-1">
                    <h2>
                        <button id="tab-btn" class="btn dropbtn dropbtn_about" onClick="clickTabbar()">
                            <strong><?php echo $menu_name;?></strong>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dropdown-close-w.svg" alt="icon" width="16" class="dell-accordion-arrow" />
                        </button>
                    </h2>
                </div>
                <div id="myDropdown" class="collapse dropdown-content">
                    <div class="accordion dell-accordion" id="tabbar-sub-1">
                        <?php   

    $menu = wp_get_nav_menu_object( $menu_name);
    if(!empty( $menu)){
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $menu_list = '';
	 $menu_list .= '<ul>';
    $count = 0;
    $submenu = false;$cpi=get_the_id();
    foreach( $menu_items as $current ) {
        if($cpi == $current->object_id ){if ( !$current->menu_item_parent ) {$cpi=$current->ID;}else{$cpi=$current->menu_item_parent;}$cai=$current->ID;break;}
    }
    foreach( $menu_items as $menu_item ) {
        $link = $menu_item->url;
		$title = '';
		 if ( get_field( 'upload_icon', $menu_item->ID ) ) { 
		$title .= '<img src="'.get_field( 'upload_icon' , $menu_item->ID ).'" alt="Denial Options">  ';
		}
        $title .= '<span>'.$menu_item->title.'</span>';
		
        $menu_item->ID ? $ac2=' current_menu' : $ac2='';
        if ( !$menu_item->menu_item_parent ) {
            $parent_id = $menu_item->ID;$parent_id==$cpi ? $ac=' current_item' : $ac='';
            if(!empty($menu_items[$count + 1]) && $menu_items[ $count + 1 ]->menu_item_parent == $parent_id ){//Checking has child
                $menu_list .= '<li class="dropdown has_child'.$ac.'"><a href="'.$link.'" class="dropdown-toggle'.$ac2.'" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="nav-span"></span>'.$title.'<span class="caret"></span></a>';
            }else{
                $menu_list .= '<li class="'.$ac.'">' ."\n";$menu_list .= '<a href="'.$link.'" class="'.$ac2.'">'.$title.'</a>' ."\n";
            }
             
        }
        if ( $parent_id == $menu_item->menu_item_parent ) {
            if ( !$submenu ) {
                $submenu = true;
                $menu_list .= '<ul class="dropdown-menu">' ."\n";
            }
            $menu_list .= '<li class="item">' ."\n";
            $menu_list .= '<a href="'.$link.'" class="'.$ac2.'">'.$title.'</a>' ."\n";
            $menu_list .= '</li>' ."\n";
            if(empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu){
                $menu_list .= '</ul>' ."\n";
                $submenu = false;
            }
        }
        if (empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
            $menu_list .= '</li>' ."\n";      
            $submenu = false;
        }
        $count++;
    }
$menu_list .= '</ul>';
echo $menu_list;


//$menu = wp_get_nav_menu_object("About Us" );
//print_r($menu);

}else{
echo "Invailed Menu Name";
}
?>
                    </div>
                </div>
            </div>
        </section>
        <?php }?>