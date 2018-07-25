<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wprig
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php kasiaikod_post_thumbnail(); ?>
	<header class="entry-header">
		<div class="post-cat">
			<?php kasiaikod_post_categories(); ?>
		</div>
		<?php

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
					kasiaikod_posted_on();
					kasiaikod_posted_by();
					kasiaikod_comments_link();
				?>
			</div><!-- .entry-meta -->
			<?php
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php get_search_form();?>
<article class="new-posts">
		<?php $the_query = new WP_Query( 'posts_per_page=-1' ); ?>

	<?php while ($the_query -> have_posts()) : $the_query -> the_post();?>
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium')?></a>
	<?php
	endwhile;
	wp_reset_postdata();
	?>
</article>
