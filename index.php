<?php get_header(); ?>
<div id="content">	
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

		<div class="entry">
			<?php the_content(('Read more')); ?>
			<br class="noCss" />
			<hr />
		</div>
		<?php if (is_single() || is_page()) { edit_post_link(('Edit this article'), '<p class="admin">', '</p>'); wp_link_pages('before=<p class="pagelink">' . ('Pages:') .' &after=</p>'); } ?>
	</div>

	<?php comments_template('', true); ?>	
	<?php endwhile; ?>
	
	<div class="left"><?php next_posts_link(('Previous entries')) ?></div>
	<div class="right"><?php previous_posts_link(('Recent entries')) ?></div>
	
	<?php else : ?>

	<?php if (is_search()) { ?>
		<div class="post single">
			<h2>Nothing found!</h2>
			<p>Sorry, but we couldn't find anything related to your query! Please try again using a different search keyword. </p>
			<hr />
			<a href=" <?php echo home_url(); ?>">&lt; Head back blog's main page</a>
		</div>
	<?php } ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>