<?php get_header() ?>
<div class="singlePageContent">
<?php
while ( have_posts() ):
    the_post();
    the_content();
endwhile;  
?>
</div>
<?php get_footer('pages') ?>