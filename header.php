<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if (is_home () ) { bloginfo('name'); } elseif (is_category() || is_tag()) { single_cat_title(); echo ' &bull; ' ; bloginfo('name'); } elseif (is_single() || is_page()) { single_post_title(); } else { wp_title('',true); } ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<div id="header">
			<h1 class="blog-title"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" name="top"><?php bloginfo('name'); ?></a> <br /><span><?php bloginfo('description'); ?></span></h1>
			<?php wp_nav_menu(array('container_class' => 'menu-header', 'menu_id' => 'menu-navigation', 'theme_location' => 'primary')); ?>
			<br class="noCss" />
		</div>