<ul id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
	<li id="search">
			<h2>Search</h2>
			<?php get_search_form(); ?>
		</li>
		<?php wp_list_pages('title_li=<h2>' .('Pages') . '</h2>'); ?>
		<?php wp_list_categories('title_li=<h2>' .('Categories') . '</h2>'); ?>
		<li id="tag_cloud">
			<h2>Tag Cloud</h2>
			<?php wp_tag_cloud('smallest=11&largest=11&number=10&unit=px'); ?>
		</li>
		<?php wp_list_bookmarks(); ?>
	<?php endif; ?>
</ul>
