<?php
/**
 * Firm-info tabs
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>
<?php if ( have_rows( 'about_our_firm_sub' ) ) : 
$i=1;
?>
<div class="accordion dell-accordion" id="accordion-1">
	<?php while ( have_rows( 'about_our_firm_sub' ) ) : the_row(); ?>


        <!-- start card -->
        <div class="card">
            <div class="card-header" id="heading-<?php echo $i;?>">
                <h2>
                    <button class="btn" type="button" data-toggle="collapse" data-target="#item-<?php echo $i;?>" aria-expanded="false" aria-controls="item-<?php echo $i;?>">
                 <?php if ( get_sub_field( 'select_icon' ) ) { ?>
                    <img src="<?php the_sub_field( 'select_icon' ); ?>" alt="icon" width="32" class="dell-accordion-icon" />
                  <?php } ?> 
                    <strong><?php the_sub_field( 'add_title' ); ?></strong>
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dropdown-close.svg" alt="icon" class="dell-accordion-arrow" />
                </button>
                </h2>
            </div>
            <div id="item-<?php echo $i;?>" class="collapse" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordion-1">
                <div class="card-body">

                    <div class="card-body-content">
                    <?php $videolink =  get_sub_field( 'video_link' ); 
                    if($videolink){?>
                        <div class="dell-player mb-5">
                         <?php if ( get_sub_field( 'video_thumbnail' ) ) { ?>
                    <img src="<?php the_sub_field( 'video_thumbnail' ); ?>" alt="" />
                    <?php } ?>
                        
                            <button type="button">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                            </button>
                            <iframe src="<?php echo $videolink ;?>" allowfullscreen style="display: none;"></iframe>
                        </div>
                        <?php }?>
                        <?php the_sub_field( 'desperations' ); ?>
                    </div>
                </div>
            </div>
        </div>
                            
   <?php $i++; endwhile; ?>     
        </div>
   <?php endif; ?>