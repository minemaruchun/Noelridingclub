<?php get_header(); ?>
<main>
    <section class="page-section-back single-page">
        <div class="common-subheader">
            <div class="common-subheader__inner">
                <h3>新着情報<span class="common-pconly"> News</span></h3>
            </div>
        </div>
        <div class="page-inner-back single-inner">
            <time><?=get_the_date('Y.m.d');?></time>
            <h1><?php the_title() ?></h1>
            <div class="single-detail">
                <div class="single-detail__text">
                    <p><?php the_content() ?></p>
                </div>
                <div class="single-detail__img">
                    <p><?php the_post_thumbnail() ?></p>
                </div>
            </div>  
            <ul class="single-nextlink">
                <li><?php next_post_link( '%link', 'Prev ' ); ?></li>        
                <li><?php previous_post_link( '%link', 'Next' ); ?></li>       
            </ul>  
            <div class="news-list single-news-list">
                <a href="news"><h5>新着情報一覧はこちら</h5></a>
            </div>
        </div> 
    </session>
</main>
<?php get_footer(); ?>