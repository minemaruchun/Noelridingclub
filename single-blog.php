<?php get_header(); ?>
<main>
    <section class="page-section-back single-page">
        <div class="common-subheader">
            <div class="common-subheader__inner">
                <h3>スタッフブログ<span class="common-pconly"> Staff Blog</span></h3>
            </div>
        </div>
        <div class="page-inner-back single-inner">
            <time><?=get_the_date('Y.m.d');?></time>
            <h2><?php the_title() ?></h2>
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
            <div class="archive-dropdown-card archive-dropdown-card-single"> 
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
        </div> 
    </session>
</main>
<?php get_footer(); ?>