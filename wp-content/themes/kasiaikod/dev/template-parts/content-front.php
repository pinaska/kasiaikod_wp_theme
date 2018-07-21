<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wprig
 */

?>
<?php get_search_form();?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php wprig_post_thumbnail(); ?>
	<header class="entry-header">
		<div class="post-cat">
			<?php wprig_post_categories(); ?>
		</div>
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
					wprig_posted_on();
					wprig_posted_by();
					wprig_comments_link();
				?>
			</div><!-- .entry-meta -->
			<?php
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php

		wprig_post_tags();
		wprig_edit_post_link();
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<article class="new-posts">
		<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

	<?php while ($the_query -> have_posts()) : $the_query -> the_post();?>
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium')?></a>
	<?php
	endwhile;
	wp_reset_postdata();
	?>
</article>
