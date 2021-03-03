<?php
/**
 * about hiring
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>
						<div class="about-hiring dell-accordion">
                            <h4>Questions About Hiring Us</h4>
                            <?php if ( have_rows( 'questions_about_hiring_us', 'option' ) ) :  $i=1;?>
	<?php while ( have_rows( 'questions_about_hiring_us', 'option' ) ) : the_row(); ?>
                            <div class="hiring-<?php echo $i;?>">
                                <div class="card-header" id="hiring-<?php echo $i;?>">
                                    <h2>
                                        <button class="btn" type="button" data-toggle="collapse" aria-expanded="false" data-target="#hiring-<?php echo $i;?>-content" aria-controls="hiring-<?php echo $i;?>-content">
                                            <strong><?php the_sub_field( 'title' ); ?></strong>
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/icons/dropdown-close.svg" alt="icon" class="dell-accordion-arrow" />
                                        </button>
                                    </h2>
                                </div>
                                <div id="hiring-<?php echo $i;?>-content" class="collapse" aria-labelledby="hiring-<?php echo $i;?>" data-parent="#hiring-<?php echo $i;?>">
                                <div class="card-body"><p> <?php the_sub_field( 'add_desperation' ); ?></p></div>
                                </div>
                            </div>
                            
                            <?php $i++; endwhile; ?>
                            <?php endif; ?>
                        </div>