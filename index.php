<?php
/**
 * @package WordPress
 * @subpackage peterbodskov
 */

get_header(); ?>
	<div id="content-container" class="roundedbox">
	<div id="content" class="narrowcolumn alignleft">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<h2 class="entry-header"><a class="link-no-decoration" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="divPostData">
					
					<p class="Author alignleft small">Posted by <?php the_author_posts_link(); ?> in <?php the_category(', ') ?> on the <?php the_time('jS M Y') ?> </p>
					<p class="Comments alignright small"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></p>
				</div>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?>   </p>
					<?php comments_template(); ?>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
	</div>
	

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
