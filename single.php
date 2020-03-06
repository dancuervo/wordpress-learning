<?php
/*
 Template Name: Post
 Template Post Type: page
 */

get_header();

if( have_posts(  ) ) : while ( have_posts(  ) ) : the_post(  );
?>



<h3>Hey, I'm a post!</h3>

<?php the_title(); ?>
<?php the_content(); ?>
<?php the_title(); ?>

<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
<!-- second loop -->
<?php
$query = new WP_Query( array( 'category_name' => 'team' ) );
?>




<?php get_footer(); ?>