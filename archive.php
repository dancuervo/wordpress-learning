<?php get_header(); ?>

<h3>Hey, I'm the whole list of posts!</h3>

<?php
while( have_posts() ): the_post();
?>

<?php get_footer(); ?>