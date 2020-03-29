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

        <div class="one-event grid-x">
            <h2 class="large-8 large-offset-2 small-12"><?php the_title(); ?></h2>
            <?php if (has_post_thumbnail()) { ?>
                <img class="large-12 event-featured-image" src=" <?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <?php }
            echo the_content() ?>

        </div>

    </div>

<?php
} else {
?>
    <div class="grid-x grid-container events-container">

        <div class="one-event grid-x grid-margin-x">
            <h2 class="cell large-8 large-offset-2 small-12"><?php the_title(); ?></h2>
            <?php if (has_post_thumbnail()) { ?>
                <img class="cell large-3 large-offset-1 small-12 event-featured-image" src=" <?php echo get_the_post_thumbnail_url(); ?>" alt="">
                <p class="cell large-8 small-12"><?php echo get_the_excerpt() ?></p>
            <?php } else { ?>

                <p class="cell large-12 small-12"><?php echo get_the_excerpt() ?></p>
            <?php } ?>
            <a class="cell large-offset-10 large-2 events-read-more" href=" <?php echo get_permalink() ?>">Read More: </a>
        </div>

    </div>
<?php
}
