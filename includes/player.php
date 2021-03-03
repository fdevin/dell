<?php
/**
 * Player
 * @package WordPress
 * @subpackage Dell
 * @version 1.0
*/
?>
<?php if ( get_field( 'video_thumbnail', 'option' ) ) { ?>    
<div class="dell-player">
    <img src="<?php the_field( 'video_thumbnail', 'option' ); ?>" alt="" />
    <button type="button">
        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icons/play.svg" width="60" alt="play" />
    </button>
    <iframe src="<?php the_field( 'video_link', 'option' ); ?>" allowfullscreen style="display: none;"></iframe>
</div>
    <?php }?>