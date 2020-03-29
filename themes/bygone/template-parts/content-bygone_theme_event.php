<?php

/**
 * Template part for displaying page events in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bygone
 */

?>


<?php

if (is_singular("bygone_theme_event")) {
?>

    <div class="grid-x grid-container event-container">

        <div class="one-event">
            <h2 class="large-10 large-offset-1"><?php the_title(); ?></h2>
            <img src=" <?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <?php echo the_content() ?>
            
        </div>

    </div>

<?php
} else {
?>
    <div class="grid-x grid-container events-container">

        <div class="one-event">
            <h2 class="large-10 large-offset-1"><?php the_title(); ?></h2>
            <img src=" <?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <p><?php echo get_the_excerpt() ?></p>
            <a href=" <?php echo get_permalink() ?>">Read More: </a>
        </div>

    </div>
<?php
}
