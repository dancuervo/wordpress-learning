<?php get_header(); ?>

<div class="container-fluid">

<h1>Hey, I'm developing in Wordpress!</h1>
<!-- THE LOOP -->
<?php
    if( have_posts() )
    {
        while( have_posts() )
        {
?>
            <div>
                <?php the_post(); ?>
                <div class="row">
                    <div class="col-md-4"> - </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="img-fluid"><?php the_post_thumbnail(); ?></div>
                            <h2><?php the_title(); ?> </h2>
                            <div class="row"><div> <?php the_content(); ?> 
                        </div>
                    </div>
                        <div class="col-md-4"> - </div>
                    </div>
                </div>
            </div>
<?php            
        }
    }

wp_reset_postdata();

// THE 2nd LOOP 

print "<div class='row'>";

if( have_posts() )
{
    while( have_posts() )
    {
        the_post(); 
        
        if( in_category( 'team' ) )
        {
?>
            <div class='col-md-6'>
                <h3><?php the_title(); ?> </h3>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
<?php
        }
    }
} else { print "sin resultados en la query"; }

?>

</div> <!-- END ROW-->

<?php wp_reset_postdata(); ?>

</div> <!-- END CONTAINER -->
<?php get_footer(); ?>