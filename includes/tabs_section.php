<?php
/**
 * tabs
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>
<section class="dell-community-content desktop-view">
    <!-- Section Content -->
    <div class="container dell-community-container">
    <div class="row titleRow"><h2 class="tab-title-over-view"><?php the_field( 'tabs_main_title' ); ?></h2></div>
        <div class="row dell-community-row">
            <div class="col-12 dell-community-col-2">
                <ul class="nav nav-tabs dell-tabs-icon" id="dell-tabs-icon" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-1-content-community" data-toggle="tab"
                            href="#tab-1-community" role="tab" aria-controls="tab-1-community" aria-selected="true">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/answer.svg" alt="icon"
                                width="48" />
                                <?php $my_query = new WP_Query('showposts=4&category_name=qa');
								$count = $my_query->found_posts;
								?>
                            <h3><strong><?php echo $count;?></strong> Answered Questions by Our Lawyers</h3>
                            <p>Read or ask our lawyers</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/tab-arrow.png" alt="arrow"
                                class="nav-arrow" />
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-2-content-community" data-toggle="tab" href="#tab-2-community"
                            role="tab" aria-controls="tab-2-community" aria-selected="false">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/reviews.svg" alt="icon"
                                width="48" />
                                <?php $my_queryes = new WP_Query('showposts=4&category_name=disability-company-reviews');
								$counts = $my_queryes->found_posts;
								?>
                            <h3><strong><?php echo $counts;?></strong> Disability Company Reviews</h3>
                            <p>Read or write review</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/tab-arrow.png" alt="arrow"
                                class="nav-arrow" />
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-3-content-community" data-toggle="tab" href="#tab-3-community"
                            role="tab" aria-controls="tab-3-community" aria-selected="false">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/youtube.svg" alt="icon"
                                width="48" />
                                 <?php $my_queryesi = new WP_Query('showposts=5&category_name=videolib');
								$countsi = $my_queryesi->found_posts;
								?>
                            <h3><strong><?php echo $countsi;?></strong> Videos</h3>
                            <p>View helpful videos added weekly</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/tab-arrow.png" alt="arrow"
                                class="nav-arrow" />
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-4-content-community" data-toggle="tab" href="#tab-4-community"
                            role="tab" aria-controls="tab-4-community" aria-selected="false">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/cases.svg" alt="icon"
                                width="48" />
                               <?php $my_queryesii = new WP_Query('showposts=3&category_name=cases-claim-tips');
								$countsii = $my_queryesii->found_posts;
								?> 
                                
                            <h3><strong><?php echo $countsi;?></strong> Cases & Claim Tips</h3>
                            <p>Learn how your disability company acts</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/tab-arrow.png" alt="arrow"
                                class="nav-arrow" />
                        </a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="tab-content" style="margin-top: 0 !important;" id="dell-tabs-icon-content">

                            <div class="tab-pane fade show active" id="tab-1-community" role="tabpanel"
                                aria-labelledby="tab-1-content-community">
                                <h2 class="tab-content-title">Answered Questions by Our Layers</h2>
                                <?php if (have_posts()) : ?>
                                <ul class="dell-list-img dell-list-answer">
                                    <?php
						global $post;
							$my_query = new WP_Query('showposts=4&category_name=qa');
							while ($my_query->have_posts()) : $my_query->the_post();
								$do_not_duplicate = $post->ID;
								$category = get_the_category();
                                 $answering = get_field( 'answering_person' );
								$author_id = $post->post_author;
								
                                $answering_name = get_field( 'answering_name' );
                                $tag_list = get_the_tag_list( '<ul class="dell-related"><li class="firstLi">Related</p>', '</li><li>', '</li></ul>' );
						?>
                                    <li>
                                     <?php 
										$featured_img_url = get_the_post_thumbnail_url('full');
									if($featured_img_url){
										$url = $featured_img_url;
										}else{
											
											$url = get_template_directory_uri().'/img/avatars/100.png';
											}
																?>
                                        <div class="dell-list-img-col-1">
                                             <img src="<?php echo $url;?>" alt="" width="100" />
                                        </div>
                                        <div class="dell-list-img-col-2">
                                            <h3><?php the_title(); ?></h3>
                                            <small>Answered  <?php
												if ( date('Yz') == get_the_time('Yz') ) {
													if (!$w_d++) echo 'Today<br />';
												} elseif ( date('Yz')-1 == get_the_time('Yz') ) {
													if (!$w_h++) echo 'Yesterday <br />';
												} else {
													echo the_date();
												};?> 
												 by <a href="#"><?php echo get_the_author_meta( 'user_firstname', $author_id );?> <?php echo get_the_author_meta( 'user_lastname', $author_id );?></a></small>
                                            <p><strong>A:</strong><?php echo content(30); ?> <a
                                                    href="<?php the_permalink(); ?>">read more></a></p>
                                            <?php if ( $tag_list && ! is_wp_error( $tag_list ) ) {
    echo $tag_list;
}
?>
                                        </div>
                                    </li>


                                    <?php endwhile;?>
                                </ul>
                                <?php endif;?>




                                <div class="tab-content-actions">
                                    <a href="#" class="dell-btn dell-btn-primary">Ask Our Lawyers a Question</a>
                                    <a href="<?php echo esc_url( get_page_link( 19985 ) ); ?>" class="dell-btn dell-btn-outline-primary">View More</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2-community" role="tabpanel"
                                aria-labelledby="tab-2-content-community">
                                <div class="card-body">
                                    <div class="sel-company">
                                        <form class="dell-search-form" method="get" action="search.php">
                                            <input class="form-control" type="search"
                                                placeholder="Choose Your Disability Insurance Company"
                                                aria-label="Search">
                                            <button class="btn" type="submit">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/search-white.svg"
                                                    alt="search">
                                            </button>
                                        </form>
                                        <p>Showing <strong>1-3</strong> of 50 Disability Companies</p>
                                        <?php if (have_posts()) : ?>
                                        <div class="company-item">
                                            <ul class="dell-list-img">
                                                <?php
						global $post;
							$my_query = new WP_Query('showposts=4&category_name=disability-company-reviews');
							while ($my_query->have_posts()) : $my_query->the_post();
								$do_not_duplicate = $post->ID;
								$category = get_the_category();
                                $tag_list2 = get_the_tag_list( '<ul class="dell-related"><li class="firstLi">Related</p>', '</li><li>', '</li></ul>' );
						?>

                                                <li>
                                                    <div class="dell-list-img-col-2">
                                                        <div class="dell-review">
                                                            <?php
													$rating = get_field( 'rating' );
												
													if ( $rating ) {
														$average_stars = round( $rating * 2 ) / 2;
													
														$drawn = 5;
												
														echo '<div class="star-rating">';
														
														// full chillies.
														for ( $i = 0; $i < floor( $average_stars ); $i++ ) {
															$drawn--;
															echo '<img src="./img/icons/active.svg"
															alt="" />';
														}
												
														// half chillies.
														if ( $rating - floor( $average_stars ) === 0.5 ) {
															$drawn--;
															echo '<img src="//cdn.wpdevdesign.com/path/to/chilli-half.png">';
														}
												
														// empty chillies.
														for ( $i = 0; $i < $drawn; $i++ ) {
															echo '<img src="./img/icons/inactive.svg"
															alt="" />';
														}
												
														echo '</div>';
													}
												?>

                                                        </div>
                                                        <h5>Mutual of Omaha</h5>
                                                        <h3>Never trust anyone from Mutual of Omaha</h3>
                                                        <small>Reviewed by <a
                                                                href="<?php the_permalink();?>"><?php the_title();?></a>
                                                            on <?php the_time('F j, Y');?><img
                                                                src="<?php echo get_template_directory_uri(); ?>/img/icons/verified.svg"
                                                                alt="" /><strong>Verified Policyholder</strong>July 2005
                                                            date of disability</small>
                                                        <p><?php echo content(30); ?> <a
                                                                href="<?php the_permalink();?>">read more></a></p>
                                                        <?php if ( $tag_list2 && ! is_wp_error( $tag_list2 ) ) {
    echo $tag_list;
}
?>
                                                    </div>
                                                </li>
                                                <?php endwhile;?>
                                            </ul>
                                            <?php endif;?>
                                        </div>

                                        <div class="view-more-btn">
                                            <a href="#" class="dell-btn dell-btn-outline-primary">
                                                <span>View More Companies</span>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/dropdown-close.svg"
                                                    width="16" alt="icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3-community" role="tabpanel"
                                aria-labelledby="tab-3-content-community">
                                <div class="card-body">
                                    <!-- <form class="dell-search-form help-full-vidoes" method="get" action="search.php">
                                            <input class="form-control" type="search" placeholder="Search answered questions" aria-label="Search">
                                            <button class="btn" type="submit">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/search-white.svg" alt="search">
                                            </button>
                                        </form> -->

                                    <?php if (have_posts()) : ?>
                                    <div class="row video-content">
                                        <?php
						global $post;
							$my_query = new WP_Query('showposts=5&category_name=videolib');
							while ($my_query->have_posts()) : $my_query->the_post();
								$do_not_duplicate = $post->ID;
								$category = get_the_category();
                                
						?>
                                        <div class="col-lg-7 video-player-col">
                                            <?php the_content();?>
                                        </div>
                                        <div class="col-lg-5 video-list-col">
                                            <div class="video-item">
                                                <?php the_content();?>
                                            </div>
                                            <div class="video-item">
                                                <?php the_content();?>
                                            </div>
                                            <div class="video-item">
                                                <?php the_content();?>
                                            </div>
                                            <div class="video-item">
                                                <?php the_content();?>
                                            </div>
                                        </div>
                                        <?php endwhile;?>
                                    </div>
                                    <?php endif;?>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-4-community" role="tabpanel"
                                aria-labelledby="tab-4-content-community">
                                <div class="card-body">
                                    <form class="dell-search-form" method="get" action="search.php">
                                        <input class="form-control" type="search"
                                            placeholder="Search Cases and Claim Tips About Your Disability Company"
                                            aria-label="Search">
                                        <button class="btn" type="submit">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/search-white.svg"
                                                alt="search">
                                        </button>
                                    </form>
                                    <?php if($countsi > 0){?>
                                    <p>Showing <strong>1-3</strong> of 850 Cases & Claim Tips</p>
                                    <?php }?>
                                    <?php if (have_posts()) : ?>
                                    <div class="row video-content">
                                        <?php
						global $post;
							$my_query = new WP_Query('showposts=3&category_name=cases-claim-tips');
							while ($my_query->have_posts()) : $my_query->the_post();
								$do_not_duplicate = $post->ID;
								$category = get_the_category();
                                
						?>
                                        <div class="answer-item">
                                            <ul class="dell-list-img dell-list-post">
                                                <li>
                                                    <div class="dell-list-img-col-1">
                                                        <?php the_post_thumbnail('medium');?>
                                                    </div>
                                                    <div class="dell-list-img-col-2">
                                                        <h3>Mutual of Omaha pays one million dollars in disability
                                                            benefits to disabled lawyers after reviewing disability
                                                            appeal submitted by Attorneys Dell & Schaefer</h3>
                                                        <strong><?php the_time('F j, Y');?></strong>
                                                        <p><?php echo content(30); ?> <a href="#">read more></a></p>
                                                        <?php if ( $tag_list2 && ! is_wp_error( $tag_list2 ) ) {
    echo $tag_list;
}
?>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php endwhile;?>
                                    </div>
                                    <?php endif;?>
                                    <div class="ask-more-container">
                                        <a href="#" class="dell-btn dell-btn-outline-primary">
                                            <span>View More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>