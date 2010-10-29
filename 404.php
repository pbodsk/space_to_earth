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
				<h1 class="entry-title"><?php _e( 'Aw snap!', 'twentyten' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Not found', 'space_to_earth' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>