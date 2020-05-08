<?php 

add_action( 'wp_enqueue_scripts', 'theme_scripts');

function theme_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'fullpage', get_template_directory_uri().'/assets/css/fullpage.css' );
    wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css' );
    wp_enqueue_script( 'fullpage', get_template_directory_uri().'/assets/js/fullpage.js');
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js');
}


function workPosts() {
    $WorkPosts = get_posts('cat=3');
    if(!empty($WorkPosts)){
        foreach ($WorkPosts as $post) {
            $msg .= "<div class='workPostsContentWrapper'>
            <div class='workPostsContent'>
                <a href='".get_permalink($post->ID)."' class='workContentImgWrapper'>
                    <img src='".get_the_post_thumbnail_url($post->ID)."' />
                </a>
                <a href='".get_permalink($post->ID)."' class='workContentTitle'>$post->post_title</a>
                </div>
            </div>";
        }
        return "<div class='workPostsWrapper'>".$msg."</div>";
    }else{
        $msg = "
        <div class='emptyWorkWrapper'>
        <p>Здесь пусто :(  Давайте <a href='/contact' >исправим это &rarr;</a> </p>
        </div>
        ";
        return $msg;
    }
}

function newsPosts() {
    $newsPosts = get_posts('cat=5');
    if(!empty($newsPosts)){
        foreach ($newsPosts as $post) {
            $msg .= "
            <div class='newsPostsContentWrapper'>
            <div class='newsPostsContent'>
                <a href='".get_permalink($post->ID)."' class='newsPostContentImgWrapper'>
                    <img src='".get_the_post_thumbnail_url($post->ID)."' />
                </a>
                <a href='".get_permalink($post->ID)."' class='newsContentTitle'>$post->post_title</a>
                </div>
            </div>";
        }
        return "<div class='newsPostsHeader'>Новости</div><div class='newsPostsWrapper'>".$msg."</div>";
    }else{
        $msg = "
        <div class='emptyWorkWrapper'>
        <p>У нас нет новостей :/ (временно)</p>
        </div>
        ";
        return $msg;
    }
}

function aboutPage() {
    return "
    <div class='singlePageContent'>
        <div class='aboutPageContent'>
        We are stalkers mather fucker!
        </div>
    </div>
    ";
}

add_shortcode( 'workposts', 'workPosts' );
add_shortcode( 'newsposts', 'newsPosts' );
add_shortcode( 'aboutpage', 'aboutPage' );
add_theme_support( 'post-thumbnails' ); 
?>