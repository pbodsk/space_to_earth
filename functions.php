<?php
if(function_exists('register_sidebar')){
	register_sidebar(array(
	'before_widget' => '',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget-title entry-header">',
	'after_title' => '</h2><div class="small">',
	'name' => 'Sidebar'
	));

	}
?>