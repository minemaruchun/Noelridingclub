<?php
/*
Template Name: archive-blog(記事一覧)
*/
?>
<?php get_header(); ?>
<main>
    <section class="page-section-back archive-page">
        <div class="common-subheader">
            <div class="common-subheader__inner">
                <h3>スタッフブログ<span class="common-pconly"> Staff Blog</span></h3>
            </div>
        </div>
        <div class="page-inner-back archive-inner archive-inner-blog">
            <div class="archive-inner__left">            
                <?php get_sidebar('blog'); ?>
            </div>
            <div class="archive-inner__right">
                <div class="archive-dropdown-card"> 
                    <a class="widget-recently" href="<?php echo esc_url(home_url());?>/blog" >最近の投稿</a>
                    <select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
                        <option value="">指定月を選択</option>
                            <?php
                            wp_get_archives (array(
                                'type' => 'monthly',
                                'format' => 'option',
                                'post_type' => 'blog'
                            )); 
                            ?>
                    </select> 
                </div> 
                <div class="pagination">        
                    <div class="list-box">
                        <ul>
                        <?php
                        $year = get_query_var('year');
                        $monthnum = get_query_var('monthnum');
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $the_query = new WP_Query( array(
                            'year' => $year,
                            'monthnum' => $monthnum,
                            'post_status'    => 'publish',
                            'post_type'      => 'blog', // ページの種類（例、page、post、カスタム投稿タイプ）
                            'paged'          => $paged,
                            'posts_per_page' => 10, // 表示件数
                            'orderby'        => 'date',
                            'order'          => 'DESC'
                        ) );
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                            ?>
                                <article class="archive-news__wrap archive-news__wrap-blog">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="archive-news__wrap-inner archive-news__wrap-inner-blog">
                                            <time datetime="<?php the_time('Y-m-d'); ?>">
                                                <?php the_time('Y.m.d'); ?>
                                            </time>  
                                            <div class="archive-news__wrap-inner-blogdetail">
                                                <h3><?php the_title(); ?></h3>
                                                <div class="single-detail__text single-detail__text-blog">
                                                    <p><?php the_content() ?></p>
                                                </div>
                                            </div>
                                            <div class="single-detail__img single-detail__img-blog">
                                                <p><?php the_post_thumbnail() ?></p>
                                            </div>
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
        </div>
</main>
<?php get_footer(); ?>