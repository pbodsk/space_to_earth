<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">


<div id="header">
	<div id="headerimg">
		<h1><a class="linkNoDecoration" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
	
	<div id="divNavigation">
		<ul>
			<li><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></li>
			<?php wp_list_pages('title_li=' ); ?>
			<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
		</ul>
	
	</div>
</div>

