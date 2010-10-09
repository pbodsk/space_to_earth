<?php
/**
 * @package take2
 * @subpackage take2
 */
?>
<div id="spacer"> </div>
<div id="footer">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<p class="firstParagraph">
		<?php bloginfo('name'); ?> is proudly powered by
		<a href="http://wordpress.org/">WordPress</a>
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
	<p><?php
	    $theme_data = get_theme_data(ABSPATH . 'wp-content/themes/take2/style.css');
	    echo "Theme: " . $theme_data['Title'] . " by ";
	    echo $theme_data['Author'];
	?>
	</p>
</div>
</div>

<!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->
<?php /* "Just what do you think you're doing Dave?" */ ?>

		<?php wp_footer(); ?>
</body>
</html>
