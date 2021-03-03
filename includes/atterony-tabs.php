<?php
/**
 * atteronytabs
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>



<?php if ( have_rows( 'get_to_know' ) ) : 
$i=1;
?>

<h2 class="dell-title text-center mb-5"><?php the_field( 'get_to_know_title' ); ?></h2>
<div class="accordion dell-accordion" id="accordion-1">
	<?php while ( have_rows( 'get_to_know' ) ) : the_row(); ?>


        <!-- start card -->
        <div class="card">
            <div class="card-header" id="heading-<?php echo $i;?>">
                <h2>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#item-<?php echo $i;?>" aria-expanded="false" aria-controls="item-<?php echo $i;?>">
                 <?php if ( get_sub_field( 'select_icon' ) ) { ?>
                    <img src="<?php the_sub_field( 'select_icon' ); ?>" alt="icon" width="32" class="dell-accordion-icon" />
                  <?php } ?> 
                  <?php  $select_category_ids = get_sub_field( 'select_category' ); ?>
                    <strong><?php the_sub_field( 'add_title' ); ?>(<?php echo do_shortcode('[count_atterony_posts cat="'.$select_category_ids.'" post_type ="attorney"]'); ?>)</strong>
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dropdown-close.svg" alt="icon" class="dell-accordion-arrow" />
                </button>
                </h2>
            </div>
            <div id="item-<?php echo $i;?>" class="collapse" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordion-1">
                <div class="card-body">

                    <div class="card-body-content">
               
                        <?php the_sub_field( 'desperations' ); ?>
                       
                    </div>
                </div>
            </div>
        </div>
                            
   <?php $i++; endwhile; ?>     
        </div>
   <?php endif; ?>