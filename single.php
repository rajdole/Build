<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="title"><?php the_title(); ?></h2>
		<?php if (is_attachment()) { ?>
			<p class="attachmentnav">&larr; Back to <a href="<?php echo get_permalink($post->post_parent) ?>" title="<?php echo get_the_title($post->post_parent) ?>" rev="attachment"><?php echo get_the_title($post->post_parent) ?></a></p>
		<?php } else { ?>
			<div class="postmeta">
				<span class="categories">Posted in <?php the_category(', '); ?></span>
				<span class="timestamp"> on <?php the_time(('F jS, Y')) ?></span>
			</div>
		<?php } ?>
		<div class="entry">
			<?php the_content(); ?>
			<br class="noCss" />
			<?php wp_link_pages('before=<p class="page-link">&after=</p>&next_or_number=number&pagelink=page %'); ?>
			<hr />
		</div>
		<div class="post-link">
			<div class="alignleft"><?php previous_post_link('&lt; %link'); ?></div> 
			<div class="alignright"><?php next_post_link('%link &gt;'); ?></div>
		</div>
	</div>
	<?php comments_template('', true); ?>	
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>