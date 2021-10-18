<?php

get_header();

while(have_posts()) {
the_post(); 
miniHero(array(
   'subtitle' => 'Coderaulia'
));

?>

<?php
}

get_footer();

?>