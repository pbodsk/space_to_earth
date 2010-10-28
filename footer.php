<?php
/**
 * @package space_to_earth
 * @subpackage space_to_earth
 */
?>
<div id="spacer"> </div>
<div id="footer">
	<div id="footerWrap">
		<p>
			<?php bloginfo('name'); ?> is proudly powered by
			<a href="http://wordpress.org/">WordPress</a>
			<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
		</p>
		<p><?php
		    $theme_data = get_theme_data(ABSPATH . 'wp-content/themes/space_to_earth/style.css');
		    echo "Theme: " . $theme_data['Title'] . " by ";
		    echo $theme_data['Author'];
		?>
		</p>
	</div>
</div>
</div>
		<?php wp_footer(); ?>
</body>
</html>
