<?php get_header(); ?>

<main>
    <section class="page-section-back contavt-page">
        <div class="common-subheader">
            <div class="common-subheader__inner">
                <h3>お問い合わせ<span class="common-pconly"> Contact</span></h3>
            </div>
        </div>
        <div class="page-inner-back contact-inner">
            <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>

                <!-- 本文 -->
                <article class="page-parts__article">
                    <?php the_content(); ?>
                </article>
                <?php
                    endwhile;
                endif;
                ?>  
        </div> 
    </session>
</main>


<?php get_footer() ?>