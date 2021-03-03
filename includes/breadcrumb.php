<?php
/**
 * Breadcrumb
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/icons/home.svg" width="22" alt="Home Page Icon" /></a></li>
    <?php $id       = get_queried_object_id();
	if ($id != "19625"){
	?>
    <li class="breadcrumb-item"><a href="<?php echo get_site_url('about-our-firm');?>">About Us</a></li>
    <?php }?>
    <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title();?></li>
  </ol>
</nav>