<?php
/*
Template Name: experience(体験乗馬)
*/
?>
<?php get_header(); ?>
<main>
    <section class="page-section-back experience-page">
        <div class="common-subheader">
            <div class="common-subheader__inner">
                <h3>体験乗馬</h3>
            </div>
        </div>
        <div class="page-inner-back experience-inner">
            <div class="experience-detail">
                <div class="experience-detail__img">
                    <p><?php the_post_thumbnail() ?></p>
                </div>
                <div class="experience-detail__text">     
                    <p><?php the_content() ?></p>
                </div>
            </div> 
            <div class="common-btn-Contact">
                <a href="contact"><h3>お問い合わせ<br>Contact</h3></a>
            </div>
        </div> 
    </session>
</main>
<?php get_footer(); ?>