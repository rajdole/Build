<?php get_header(); ?>
<div id="content">
	<?php
	if (is_category()) {
   		echo '<h1 class="listhead">';
   		("Category");
   		echo ' <strong>';
   		single_cat_title();
   		echo '</strong></h1>';
   	} if (is_tag()) {
   		echo '<h1 class="listhead">';
   		("Tag");
   		echo ' <strong>';
   		single_tag_title();
   		echo '</strong></h1>';
   	} if (is_search()) {
   		echo '<h1 class="listhead">';
		("Search");
		echo ' <strong>Search Result for ',
		get_search_query(),
		'</strong></h1>';
   	}
	if (is_month()) {
   		echo '<h1 class="listhead">';
   		("Tag");
   		echo ' <strong>';
		the_time('F, Y');
   		echo '</strong></h1>';
   	}
		if (is_year()) {
   		echo '<h1 class="listhead">';
   		("Tag");
   		echo ' <strong>';
		the_time('Y');
   		echo '</strong></h1>';
   	}
   	?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="postmeta">
			<?php if (comments_open()) : ?><span class="comments"><?php comments_popup_link(('0 <span>comments on this article</span>'), ('1 <span>comment on this article</span>'), ('% <span>comments on this article</span>'), '', ''); ?></span><?php endif; ?>
			<span class="author">Posted by <a href="<?php the_author_meta('url'); ?>" title="<?php the_author(); ?>" class="author"><?php the_author(); ?></a></span>
			<span class="categories"> in <?php the_category(', '); ?></span>
			<span class="timestamp"> on <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_time(('F jS, Y')) ?></a></span>
			<span class="tags"><?php the_tags((', tagged with '),', ',''); ?>.</span>
		</div>
		<?php if (is_attachment()) { ?>
			<p class="attachmentnav">&larr; Back to <a href="<?php echo get_permalink($post->post_parent) ?>" title="<?php echo get_the_title($post->post_parent) ?>" rev="attachment"><?php echo get_the_title($post->post_parent) ?></a></p>
		<?php } ?>
		<div class="entry">
			<?php the_excerpt(); ?>
			<br class="noCss" />
			<hr />
		</div>
	</div>
	<?php endwhile; ?>
	<div class="left"><?php next_posts_link(('Previous entries')) ?></div>
	<div class="right"><?php previous_posts_link(('Recent entries')) ?></div>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>