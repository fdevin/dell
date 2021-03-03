<?php
/**
 * Request Sectio Desktop
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>
<section class="request-section desktop-view">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col request-container">
                        <?php include(get_template_directory() . '/includes/request.php'); ?>
                    </div>
                    <div class="col">
                        <?php include(get_template_directory() . '/includes/player.php'); ?>
                        <?php include(get_template_directory() . '/includes/help-claimants.php'); ?>
                        <?php include(get_template_directory() . '/includes/about-hiring.php'); ?>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        
        
        <section class="request-section mobile-view">
            <div class="container">
                <div class="row mobile-col-reverse">
                    <div class="request-container">
                        <?php include(get_template_directory() . '/includes/request.php'); ?>
                    </div>
                    <div class="dis-claim-mobile">
                       <?php include(get_template_directory() . '/includes/player.php'); ?>
                        <?php include(get_template_directory() . '/includes/help-claimants.php'); ?>
                        <?php include(get_template_directory() . '/includes/about-hiring.php'); ?>
                    </div>
                </div>
            </div>
        </section>