<?php
/*
 Template Name: about
 */
?>
<?php
get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'ptbsg' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>