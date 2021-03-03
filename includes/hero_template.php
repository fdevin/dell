<?php
/**
 * Hero Slider
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?> 
   
<?php if ( have_rows( 'hero_group' ) ) : ?>  
<section class="dell-hero green-gradient desktop-view">
    <div class="container dell-hero-container">
        <div class="row dell-hero-row">
            <div class="col-1 dell-hero-col"></div>
            <div class="col-10 dell-hero-col">
                <div class="owl-carousel dell-hero-owl">
                    <?php while ( have_rows( 'hero_group' ) ) : the_row(); ?>
                    <?php if ( have_rows( 'hero_slide' ) ) : ?>
                   <?php while( have_rows('hero_slide') ): the_row(); ?>
                    <?php $hero_img = get_sub_field( 'hero_background_image' );  
                    $hero_grad = get_sub_field( 'slide_background_gradient' ); ?>
                    <?php if ($hero_img) {
                    echo '<div class="row dell-hero-owl-row '.$hero_grad.'">';
                    } else {
                        echo '<div class="row dell-hero-owl-row '.$hero_img.'">';
                    }
                        ?>
                    
                       
                        <!-- Item -->
                        
                        
                        <?php if ( get_sub_field( 'disabling_condition' ) == 1 ) {?>
						
						
						<div class="col-lg-6 dell-form-input dell-hero-owl-col-1">
                        <h2 class="text-white"><?php the_sub_field( 'slide_title' ); ?></h2>
                        <label class="sr-only" for="select-1">Select Your Disabling Condition</label>
                        <select class="form-control all-company-list" id="select-1" onchange="location=this.value">
                            <option value ="" >Select Your Disabling Condition</option>
                          
                            
                            <?php if ( have_rows( 'disabling_condition_select_field_value' ) ) : ?>
					<?php while ( have_rows( 'disabling_condition_select_field_value' ) ) : the_row(); ?>
						<option value ="<?php the_sub_field( 'company_page_link' ); ?>" ><?php the_sub_field( 'company_name' ); ?></option>
						
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                        </select>
                    </div>
						
						
						<?php  }else{?>
                        <div class="col-lg-6 dell-hero-owl-col-1">
                            <h2><?php the_sub_field( 'slide_title' ); ?></h2>
                            <?php if ( have_rows( 'action_buttons' ) ) : ?>
                            <?php while ( have_rows( 'action_buttons' ) ) : the_row(); ?>
                           
                            <?php
							$btncolor="";
							 if(get_sub_field( 'button_color_combination' )=="goldbut"){
								$btncolor="dell-btn-primary";
								} ?>
                            <?php $button_action = get_sub_field( 'button_action' ); ?>
                            <?php if ( $button_action ) { ?>
                            <a href="<?php echo $button_action; ?>" class="dell-btn <?php echo $btncolor; ?>"> <?php the_sub_field( 'button_text' ); ?></a>
                            <?php } ?>
                            <?php endwhile; ?>
                            </div>
                            <?php endif; }?>
                        
                        <div class="col-lg-5 dell-hero-owl-col-2">
                            <div class="dell-player">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                <button type="button">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60"
                                        alt="play" />
                                </button>
                                <iframe src="<?php the_sub_field( 'video_on_right' ); ?>" allowfullscreen
                                    style="display: none;"></iframe>
                            </div>
                        </div>
                    </div>

                    <?php //the_sub_field( 'use_background_gradient_or_image' ); ?>
                    <?php //the_sub_field( 'slide_background_gradient' ); ?>
                    <?php $hero_background_image = get_sub_field( 'hero_background_image' ); ?>
                    <?php if ( $hero_background_image ) { ?>
                    <?php echo wp_get_attachment_image( $hero_background_image, 'full' ); ?>
                    <?php } ?>
                    <?php endwhile; ?>

                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                        <div class="dell-hero-owl-nav">
                <button class="dell-hero-owl-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/owl-back.svg" width="40"
                        alt="navigation" />
                </button>
                <div class="dell-hero-owl-counter">
                    <strong id="counter"></strong>
                </div>
                <button class="dell-hero-owl-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/owl-next.svg" width="40"
                        alt="navigation" />
                </button>
            </div>
            </div>
            
            <div class="col-1 dell-hero-col"></div>
        </div>
    </div>
</section>
<?php endif; ?>






<?php if ( have_rows( 'hero_group' ) ) : ?>  
<section class="dell-hero mobile-view" style="padding-bottom: 20px !important;">
    <div class="dell-hero-container">
        <div class="row dell-hero-row">
                <div class="col-12 dell-hero-col">
                    <div class="owl-carousel dell-hero-owl">
                    <?php while ( have_rows( 'hero_group' ) ) : the_row(); ?>
                    <?php if ( have_rows( 'hero_slide' ) ) : ?>
                   <?php while( have_rows('hero_slide') ): the_row(); ?>
                    <?php $hero_img = get_sub_field( 'hero_background_image' );  
                    $hero_grad = get_sub_field( 'slide_background_gradient' ); ?>
                    <?php if ($hero_img) {
                    echo '<div class="row dell-hero-owl-row '.$hero_grad.'">';
                    } else {
                        echo '<div class="row dell-hero-owl-row '.$hero_img.'">';
                    }
                        ?>
                    
                       
                        <!-- Item -->
                        
                        
                        <?php if ( get_sub_field( 'disabling_condition' ) == 1 ) {?>
						
						
						<div class="col-lg-6 dell-form-input dell-hero-owl-col-1">
                        <h2 class="text-white"><?php the_sub_field( 'slide_title' ); ?></h2>
                        <label class="sr-only" for="select-1">Select Your Disabling Condition</label>
                        <select class="form-control all-company-list" id="select-1" onchange="location=this.value">
                            <option value ="" >Select Your Disabling Condition</option>
                          
                            
                            <?php if ( have_rows( 'disabling_condition_select_field_value' ) ) : ?>
					<?php while ( have_rows( 'disabling_condition_select_field_value' ) ) : the_row(); ?>
						<option value ="<?php the_sub_field( 'company_page_link' ); ?>" ><?php the_sub_field( 'company_name' ); ?></option>
						
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                        </select>
                    </div>
						
						
						<?php  }else{?>
                        <div class="col-lg-6 dell-hero-owl-col-1">
                            <h2><?php the_sub_field( 'slide_title' ); ?></h2>
                            <?php if ( have_rows( 'action_buttons' ) ) : ?>
                            <?php while ( have_rows( 'action_buttons' ) ) : the_row(); ?>
                           
                            <?php
							$btncolor="";
							 if(get_sub_field( 'button_color_combination' )=="goldbut"){
								$btncolor="dell-btn-primary";
								} ?>
                            <?php $button_action = get_sub_field( 'button_action' ); ?>
                            <?php if ( $button_action ) { ?>
                            <a href="<?php echo $button_action; ?>" class="dell-btn <?php echo $btncolor; ?>"> <?php the_sub_field( 'button_text' ); ?></a>
                            <?php } ?>
                            <?php endwhile; ?>
                            </div>
                            <?php else : ?>
                            <?php // no rows found ?>
                            
                            <?php endif; }?>
                        
                        <div class="col-lg-5 dell-hero-owl-col-2">
                            <div class="dell-player">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                <button type="button">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60"
                                        alt="play" />
                                </button>
                                <iframe src="<?php the_sub_field( 'video_on_right' ); ?>" allowfullscreen
                                    style="display: none;"></iframe>
                            </div>
                        </div>
                    </div>

                    <?php //the_sub_field( 'use_background_gradient_or_image' ); ?>
                    <?php //the_sub_field( 'slide_background_gradient' ); ?>
                    <?php $hero_background_image = get_sub_field( 'hero_background_image' ); ?>
                    <?php if ( $hero_background_image ) { ?>
                    <?php echo wp_get_attachment_image( $hero_background_image, 'full' ); ?>
                    <?php } ?>
                    <?php endwhile; ?>

                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                        <div class="dell-hero-owl-nav">
                    <button class="dell-hero-owl-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/owl-back.svg" width="40"
                            alt="navigation" />
                    </button>
                    <div class="dell-hero-owl-counter">
                        <strong id="counter"></strong>
                    </div>
                    <button class="dell-hero-owl-next">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/owl-next.svg" width="40"
                            alt="navigation" />
                    </button>
                </div>
                
               </div>
            
            <div class="col-1 dell-hero-col"></div>
        </div>
</section>
<?php endif; ?>




