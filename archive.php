<?php
/*
Template Name: archive(記事一覧)
*/
?>
<?php get_header(); ?>
<main>
    <section class="page-section-back archive-page">
        <div class="common-subheader">
            <div class="common-subheader__inner">
                <h3>新着情報一覧<span class="common-pconly"> News</span></h3>
            </div>
        </div>
        <div class="page-inner-back archive-inner">
            <div class="pagination">
                <div class="list-box">
                    <ul>
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $the_query = new WP_Query( array(
                        'post_status'    => 'publish',
                        'post_type'      => 'post', // ページの種類（例、page、post、カスタム投稿タイプ）
                        'paged'          => $paged,
                        'posts_per_page' => 10, // 表示件数
                        'orderby'        => 'date',
                        'order'          => 'DESC'
                    ) );
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                            <article class="archive-news__wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="archive-news__wrap-inner">
                                        <time datetime="<?php the_time('Y-m-d'); ?>">
                                            <?php the_time('Y.m.d'); ?>
                                        </time>   
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <div>
                                    <i class="fas fa-caret-right  fa-2x"></i>
                                    </div>
                                </a>
                            </article>
                        <?php
                        endwhile;
                    else:
                        echo '<div><p>ありません。</p></div>';
                    endif;
                    ?>
                    </ul>
                </div>
                <?php wp_pagenavi(array('query' => $the_query)); ?>
            </div>
        </div>
</main>
<?php get_footer(); ?>