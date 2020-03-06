<?php /* Template name: about us   */ ?>
<h3>About US Page</h3>

<?php

if( has_post_thumbnail() )
    {
        the_post_thumbnail();
    }


get_template_part( 'partials/team-member' );

?>