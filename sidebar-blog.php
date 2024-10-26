<div class="widget">
	<a class="widget-recently" href="<?php echo esc_url(home_url());?>/blog" >最近の投稿</a>
	<h2>投稿一覧</h2>
	<ul><?php wp_get_archives('type=monthly&post_type=blog&show_post_count=1'); ?>
	</ul>
</div>