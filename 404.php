<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage space_to_earth
 * @since 0.1
 */

get_header(); ?>

	<div id="content-container" class="roundedbox">
		<div id="content">

			<div id="post-0" class="post error404 not-found">
				<h2 class="entry-title">Computer says no</h2>
				<div class="entry-content">
					<p>Congratulations!</p>
					<p>You just got yourself a 404, meaning that you tried to request a page that does not exist on this blog.</p>
					<p>Have a look at the address bar, are you sure that was the address you were looking for?</p>
					<a href="<?php echo get_option('home'); ?>/">Take me back to the index page then</a>
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>