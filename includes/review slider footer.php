<?php
/**
 * Player
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>


<section class="review-from-clients desktop-view">
            <div class="container">
                <h2>Reviews from Our Clients</h2>
                <div class="row carousel-row">
                <?php echo do_shortcode('[Clientreviews-Shortcode ]'); ?>
                </div>
                 <?php echo do_shortcode('[Clientreviews-Count]'); ?>
               
                <div class="row logsclient">
                    <div class="col-lg-1"></div>
                    <div class="col logos-container">
                    
                    <?php if ( have_rows( 'client_logo', 'option' ) ) : ?>
							<?php while ( have_rows( 'client_logo', 'option' ) ) : the_row(); ?>
                                
                                <?php $selec_logo = get_sub_field( 'selec_logo' ); ?>
                                <?php if ( $selec_logo ) { ?>
                                    <a href="<?php the_sub_field( 'client_logo_link' ); ?>"><img src="<?php echo $selec_logo['url']; ?>" alt="<?php echo $selec_logo['alt']; ?>" /></a>
                                <?php } ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
           
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>

<section class="review-from-clients mobile-view">
            <div class="container">
                <h2>Reviews from Our Clients</h2>
                <div>
                    <div class="dell-hero-container">
                        <div class="row dell-hero-row">
                         <?php
                              $args = array(
                                    'post_type' => 'clientreviews',
                                    'posts_per_page' => '10',
                                    'post_status' => 'publish',
                                    'order'   => 'DESC',
                                    'tax_query' => array(
                                        array(
                                          'taxonomy' => 'category',
                                          'field' => 'id',
                                          'terms' => 10 // Where term_id of Term 1 is "1".
                                        )
                                      )
                                );
                        
                                $string = '';
                                $query = new WP_Query( $args );
                                if( $query->have_posts() ){ ?>
                        
                            <div class="col-12 dell-hero-col">
                                <div class="owl-carousel dell-hero-owl">
                                  <?php 
                                 while( $query->have_posts() ){
				
                                   $query->the_post(); 
								   $featured_img_url = get_the_post_thumbnail_url('full');
								   if (empty($featured_img_url)){
								   
								   $imgeur = get_stylesheet_directory_uri()."/img/avatars/72.png";
								   }else{
								   
								   $imgeur = get_the_post_thumbnail_url('full');
								   }
								    ?> 
                                   
                                    <div class="row dell-hero-owl-row"> <!-- Item -->
                                       <div class="card dell-card">
                                            <div class="card-body">
                                                <img class="card-avatar" src="<?php echo $imgeur;?>" alt="" />
                                                <h5 class="card-title"><?php  echo get_the_title();?></h5>
                                                <h6 class="card-subtitle">Manager</h6>
                                                <p class="card-text"> <?php echo content(20);?></p>
                                               <?php 
											    $string = ""; 
											   $tags = get_the_tags($query->ID); 
		 
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
											
											echo  $string;
											?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                                <div class="dell-hero-owl-nav">
                                    <button class="dell-hero-owl-prev">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icons/owl-back.svg" width="40" alt="navigation" />
                                    </button>
                                    <div class="dell-hero-owl-counter">
                                    </div>
                                    <button class="dell-hero-owl-next">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icons/owl-next.svg" width="40" alt="navigation" />
                                    </button>
                                </div>
                                <div class="ask-more-container">
                                    <a href="#" class="dell-btn dell-btn-primary">
                                        <span>View More</span>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            
                            <div class="col logos-container">
                            <?php if ( have_rows( 'client_logo', 'option' ) ) : ?>
								<?php while ( have_rows( 'client_logo', 'option' ) ) : the_row(); ?>
                                    
                                    <?php $selec_logo = get_sub_field( 'selec_logo' ); ?>
                                    <?php if ( $selec_logo ) { ?>
                                        <a href="<?php the_sub_field( 'client_logo_link' ); ?>" class="mobilelogds"><img src="<?php echo $selec_logo['url']; ?>" alt="<?php echo $selec_logo['alt']; ?>" /></a>
                                    <?php } ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found ?>
                            <?php endif; ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>