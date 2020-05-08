<?php 
get_header();
$posts = query_posts('cat=4');
$mainHeader = get_post(70);
$mainFooter = get_post(68);
?>
<div id="fullPageScroll">
    <!-- Header -->
    <div class="fullPageSection section">
        <div class="fullPageSection_container">
            <?php 
            echo($mainHeader->post_content);
            ?>
        </div>
    </div>
    <!-- Start content -->
    <?php
     foreach($posts as $post):
        if($post->post_title !='mainFooter' && $post->post_title != 'mainHeader'):
        ?>
        <div class="fullPageSection section">
        <div class="container fullPageSection_container">
            <?php 
            echo($post->post_content);
            ?>
        </div>
    </div>
    <?php
        endif;
    endforeach; ?>
    <!-- End content -->
    <!-- Footer -->
    <div class="fullPageSection section">
        <div class="fullPageSection_container">
            <?php 
            echo($mainFooter->post_content)
            ?>
        </div>
    </div>
</div>
<?php get_footer() ?>