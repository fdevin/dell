<?php
/**
 * Request Form
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>
						<div class="help-claimants dell-accordion">
                            <h4>How We Help Disability Claimants</h4>
                            
                            <?php if ( have_rows( 'how_we_help_disability_claimants', 'option' ) ) : $i=1; ?>
	<?php while ( have_rows( 'how_we_help_disability_claimants', 'option' ) ) : the_row();  ?>
                            <div class="disability-<?php echo $i;?>">
                                <div class="card-header" id="disability-<?php echo $i;?>">
                                    <h2>
                                        <button class="btn" type="button" data-toggle="collapse" aria-expanded="false" data-target="#disability-<?php echo $i;?>-content" aria-controls="disability-<?php echo $i;?>-content">
                                        <?php if ( get_sub_field( 'select_icon' ) ) { ?>
                                        <img src="<?php the_sub_field( 'select_icon' ); ?>" alt="" />
                                    <?php } ?>
                                            <strong><?php the_sub_field( 'title' ); ?></strong>
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/icons/dropdown-close.svg" alt="icon" class="dell-accordion-arrow" />
                                        </button>
                                    </h2>
                                </div>
                                <div id="disability-<?php echo $i;?>-content" class="collapse" aria-labelledby="disability-<?php echo $i;?>" data-parent="#disability-<?php echo $i;?>">
                                <div class="card-body"><p> <?php the_sub_field( 'add_desperation' ); ?></p></div>
                                </div>
                            </div> 
                            <?php $i++; endwhile; ?>
                            <?php endif; ?>
                            
                            
                   
                        </div>