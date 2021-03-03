<?php
/**
 * @package WordPress
 * @subpackage Dell
*/
/* Template name: About US */
?>
<?php 
get_header();
global $post;
$pid =  $post->ID;
$content = get_the_content();
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
$src = wp_get_attachment_image_src(get_post_thumbnail_id($pid), 'full' );
$url = $src[0]??= 'default value';
?>
     <?php include get_template_directory() . '/includes/menu_for_mobile.php';?>
    <?php include get_template_directory() . '/includes/hero_template.php';?>
     <?php include get_template_directory() . '/includes/menu_after_hero.php';?>

    <!-- start page breadcrumb -->
        <section class="dell-breadcrumb pt-3">
            <div class="container dell-breadcrumb-container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col">
                        <?php include(get_template_directory() .'/includes/breadcrumb.php'); ?>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        
    <section class="dell-about-firm ">
            <div class="container">
                <h2 class="text-center dell-title"><?php echo  get_the_title();?></h2>
                <div class="row">
                    
                    <div class="col-lg-auto col-12 ">
                        <div class="firm-team-img">
                            <img src="<?php echo $url;?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg col-12">
                      <?php echo  $content;?>
                    </div>
                    
                </div>
                          <div class="row firm-more-info acc976">
                    
                    <div class="col"><?php include get_template_directory().'/includes/firm-info.php'; ?></div>
                    
                </div>
                          
            </div>
        </section>
    
    
   <?php if ( have_rows( 'how_can_our_disability' ) ) : ?>
<section class="dell-disability">
    <div class="container dell-disability-container">
        <div class="row dell-disability-row">
            <div class="col-12 dell-disability-col-1">
                <h2 class="dell-title">How Can Our Disability Insurance Lawyers Help You?</h2>
            </div>
            <div class="col-lg-4 dell-disability-col-2">
                <div class="nav flex-column nav-pills" id="disability-tabs" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="tab-1-content" data-toggle="pill" href="#tab-1" role="tab"
                        aria-controls="tab-1" aria-selected="true">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/about-us.svg" alt="icon"
                            width="32" class="nav-link-icon" />
                        <strong>About Us</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/next.svg" alt="icon" width="24"
                            class="nav-link-next" />
                    </a>
                    <hr class="dell-hr-1">
                    <h4 class="nav-title">Disability Denial Options</h4>
                    <a class="nav-link" id="tab-2-content" data-toggle="pill" href="#tab-2" role="tab"
                        aria-controls="tab-2" aria-selected="false">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/appeal.svg" alt="icon"
                            width="32" class="nav-link-icon" />
                        <strong>ERISA Disability Appeal</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/next.svg" alt="icon" width="24"
                            class="nav-link-next" />
                    </a>
                    <a class="nav-link" id="tab-3-content" data-toggle="pill" href="#tab-3" role="tab"
                        aria-controls="tab-3" aria-selected="false">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/lawsuit.svg" alt="icon"
                            width="32" class="nav-link-icon" />
                        <strong>ERISA Disability Lawsuit</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/next.svg" alt="icon" width="24"
                            class="nav-link-next" />
                    </a>
                    <a class="nav-link" id="tab-4-content" data-toggle="pill" href="#tab-4" role="tab"
                        aria-controls="tab-4" aria-selected="false">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/denial.svg" alt="icon"
                            width="32" class="nav-link-icon" />
                        <strong>Private Disability Denial</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/next.svg" alt="icon" width="24"
                            class="nav-link-next" />
                    </a>
                    <hr class="dell-hr-1">
                    <h4 class="nav-title">Protect Your Benefits</h4>
                    <a class="nav-link" id="tab-5-content" data-toggle="pill" href="#tab-5" role="tab"
                        aria-controls="tab-5" aria-selected="false">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/pen.svg" alt="icon" width="32"
                            class="nav-link-icon" />
                        <strong>Applying for Benefits</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/next.svg" alt="icon" width="24"
                            class="nav-link-next" />
                    </a>
                    <a class="nav-link" id="tab-6-content" data-toggle="pill" href="#tab-6" role="tab"
                        aria-controls="tab-6" aria-selected="false">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/claim-handling.svg" alt="icon"
                            width="32" class="nav-link-icon" />
                        <strong>Claim Handling</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/next.svg" alt="icon" width="24"
                            class="nav-link-next" />
                    </a>
                    <a class="nav-link" id="tab-7-content" data-toggle="pill" href="#tab-7" role="tab"
                        aria-controls="tab-7" aria-selected="false">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/lump-sum-buyout.svg" alt="icon"
                            width="32" class="nav-link-icon" />
                        <strong>Lump-Sum Buyout</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/next.svg" alt="icon" width="24"
                            class="nav-link-next" />
                    </a>
                    <hr class="dell-hr-1">
                    <h4 class="nav-title">Other Insurance Claims</h4>
                    <a class="nav-link" id="tab-8-content" data-toggle="pill" href="#tab-8" role="tab"
                        aria-controls="tab-8" aria-selected="false">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/long-term-care.svg" alt="icon"
                            width="32" class="nav-link-icon" />
                        <strong>Long Term Care Benefits</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/next.svg" alt="icon" width="24"
                            class="nav-link-next" />
                    </a>
                    <a class="nav-link" id="tab-9-content" data-toggle="pill" href="#tab-9" role="tab"
                        aria-controls="tab-9" aria-selected="false">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/life-insurance.svg" alt="icon"
                            width="32" class="nav-link-icon" />
                        <strong>Life Insurance Benefits</strong>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/next.svg" alt="icon" width="24"
                            class="nav-link-next" />
                    </a>
                </div>
            </div>
            <?php while ( have_rows( 'how_can_our_disability' ) ) : the_row(); ?>
            <div class="col-lg-8 dell-disability-col-3">
                <div class="tab-content" id="disability-tabs-content">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-content">
                    <?php 
					$video_value = get_sub_field('about_us_video_link');
                    if($video_value){?>
                    <div class="dell-player">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                    <button type="button">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                                    </button>
                                    <iframe src="<?php echo $video_value;?>" allowfullscreen style="display: none;"></iframe>
                                </div>
                    <?php }?>
                        <?php the_sub_field( 'about_us_tab' ); ?>

                    </div>
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-content">
                    
                    <?php 
					$video_value = get_sub_field('erisa_disability_appeal_tab_video_link');
                    if($video_value){?>
                    <div class="dell-player">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                    <button type="button">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                                    </button>
                                    <iframe src="<?php echo $video_value;?>" allowfullscreen style="display: none;"></iframe>
                                </div>
                    <?php }?>
                    
                        <?php the_sub_field( 'erisa_disability_appeal_tab' ); ?>

                    </div>
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-content">
                    
                    <?php 
					$video_value = get_sub_field('erisa_disability_lawsuit_tab_video_link');
                    if($video_value){?>
                    <div class="dell-player">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                    <button type="button">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                                    </button>
                                    <iframe src="<?php echo $video_value;?>" allowfullscreen style="display: none;"></iframe>
                                </div>
                    <?php }?>
                    
                        <?php the_sub_field( 'erisa_disability_lawsuit_tab' ); ?>

                    </div>
                    <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4-content">
                    
                    <?php 
					$video_value = get_sub_field('private_disability_denial_tab_video_link');
                    if($video_value){?>
                    <div class="dell-player">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                    <button type="button">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                                    </button>
                                    <iframe src="<?php echo $video_value;?>" allowfullscreen style="display: none;"></iframe>
                                </div>
                    <?php }?>
                        <?php the_sub_field( 'private_disability_denial' ); ?>

                    </div>
                    <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5-content">
                    
                    <?php 
					$video_value = get_sub_field('applying_for_benefits_tab_video_link');
                    if($video_value){?>
                    <div class="dell-player">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                    <button type="button">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                                    </button>
                                    <iframe src="<?php echo $video_value;?>" allowfullscreen style="display: none;"></iframe>
                                </div>
                    <?php }?>
                        <?php the_sub_field( 'applying_for_benefits' ); ?>

                    </div>
                    <div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="tab-6-content">
                    
                     <?php 
					$video_value = get_sub_field('claim_handling_video_link');
                    if($video_value){?>
                    <div class="dell-player">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                    <button type="button">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                                    </button>
                                    <iframe src="<?php echo $video_value;?>" allowfullscreen style="display: none;"></iframe>
                                </div>
                    <?php }?>
                        <?php the_sub_field( 'claim_handling' ); ?>

                    </div>
                    <div class="tab-pane fade" id="tab-7" role="tabpanel" aria-labelledby="tab-7-content">
                    
                    <?php 
					$video_value = get_sub_field('lump-sum_buyout_tab_video_link');
                    if($video_value){?>
                    <div class="dell-player">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                    <button type="button">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                                    </button>
                                    <iframe src="<?php echo $video_value;?>" allowfullscreen style="display: none;"></iframe>
                                </div>
                    <?php }?>
                        <?php the_sub_field( 'lump-sum_buyout' ); ?>

                    </div>
                    <div class="tab-pane fade" id="tab-8" role="tabpanel" aria-labelledby="tab-8-content">
                     <?php 
					$video_value = get_sub_field('long_term_care_benefits_tab_video_link');
                    if($video_value){?>
                    <div class="dell-player">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                    <button type="button">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                                    </button>
                                    <iframe src="<?php echo $video_value;?>" allowfullscreen style="display: none;"></iframe>
                                </div>
                    <?php }?>
                    
                    
                        <?php the_sub_field( 'Long Term Care Benefits' ); ?>
                    </div>
                    <div class="tab-pane fade" id="tab-9" role="tabpanel" aria-labelledby="tab-9-content">
                     <?php 
					$video_value = get_sub_field('life_insurance_tab_video_link');
                    if($video_value){?>
                    <div class="dell-player">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/player/2.jpg" alt="" />
                                    <button type="button">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/play.svg" width="60" alt="play" />
                                    </button>
                                    <iframe src="<?php echo $video_value;?>" allowfullscreen style="display: none;"></iframe>
                                </div>
                    <?php }?>
                    
                    
                        <?php the_sub_field( 'life_insurance_tab' ); ?>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>
    
    <?php include get_template_directory() . '/includes/request-section-desktop.php';?>
<?php 
get_footer();?>