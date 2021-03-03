<?php
/**
 * List Answer
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>
<?php   $select_category_ids = get_field( 'select_category' );
if(!empty($select_category_ids)){
	
	$selected_category = $select_category_ids;
	
	}else{
		$selected_category = '17';
		}

 ?>
<?php 

$args = array(
            'post_type' => "post",
			'posts_per_page' => 10,
            'post_status' => 'publish',
			'order'   => 'DESC',
			'tax_query' => array(
				array(
				  'taxonomy' => 'category',
				  'field' => 'id',
				  'terms' => $selected_category // Where term_id of Term 1 is "1".
				)
			  )
        );
        
        $query = new WP_Query( $args );
        if( $query->have_posts() ){?>
		<ul class="dell-list-img dell-list-answer">
            <?php while( $query->have_posts() ){
                $query->the_post();
				
				global $post;
                $author_id = $post->post_author;
				?>
    <li>
        <div class="dell-list-img-col-1">
        <?php 
        $featured_img_url = get_the_post_thumbnail_url('full');
	if($featured_img_url){
		$url = $featured_img_url;
		}else{
			
			$url = get_template_directory_uri().'/img/avatars/100.png';
			}
			?>
        
            <img src="<?php echo $url;?>" alt="" width="100" />
        </div>
        <div class="dell-list-img-col-2">
            <h3>Q: <?php echo get_the_title();?></h3>
            <small>Answered  <?php
								if ( date('Yz') == get_the_time('Yz') ) {
									if (!$w_d++) echo 'Today<br />';
								} elseif ( date('Yz')-1 == get_the_time('Yz') ) {
									if (!$w_h++) echo 'Yesterday <br />';
								} else {
									echo the_date();
								};?> 
                                 by <a href="#"><?php echo get_the_author_meta( 'user_firstname', $author_id );?> <?php echo get_the_author_meta( 'user_lastname', $author_id );?></a></small>
            <div class="tit_content"><strong>A:</strong></div><div class="answer"><?php echo content(20);?></div>
            <?php 
			$string= "";
            $tags = get_the_tags($query->ID);
			if(!empty($tags)){
             $string .= '<ul class="dell-related">';
        $string .= '<p>Related:</p>';
 
      foreach($tags as $tag) :
 
      $string .= '<li>';
         $string .= '<a class="" href="' . get_tag_link($tag->term_id) . '">';
                  $string .=  $tag->name;
         $string .= '</a>';   
      $string .= '</li>';
       endforeach;
$string .= '</ul>';

echo $string;
			}
?>
        </div>
    </li>
<?php }?></ul><?php  }?>