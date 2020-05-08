<?php get_header() ?>
<div class="singlePageContent">
<div class="workPostsWrapper">
<?php while ( have_posts() ): the_post() ?>
<div class="workPostsContentWrapper">
<div class='workPostsContent'>
    <img src='<?php the_post_thumbnail_url()?>' />
    <span class="workContentCompany"></span>
    <h3 class='workPostsTitle'> Title</h3>
        <span><?php the_content();?></span>
    </div>
</div>
<?php endwhile; ?>
</div>
</div>
<?php get_footer() ?>