<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wprig
 */

?>
<!-- content from WYSYG editor -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<!-- searchbar for front page -->
<div class="front-search-form "><?php echo ("<h2>Wyszukaj na blogu</h2> ");?>
<?php echo('<div class="cat-list">');
$categories = get_categories();
foreach ( $categories as $category ) {
	echo('<h4><a href="category/'.$category->slug.'"> '.$category->name.'</a></h4>');
}
echo('</div>');?>

	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'wprig' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Szukaj &hellip;', 'placeholder', 'wprig' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'wprig' ); ?></span></button>
</form>
<?php echo ("<h6><a href=#>Nie ma nic dla Ciebie? Napisz do mnie</a></h6>");?>
</div>

<!-- loop for displaying newest posts -->
<article class="new-posts">
		<?php $the_query = new WP_Query( 'posts_per_page=-1' ); ?>
<div class="post-ctn">
	<?php while ($the_query -> have_posts()) : $the_query -> the_post();?>
	<div class="single-post-ctn">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large')?></a>
		</div>
	<?php
	endwhile;
	wp_reset_postdata();
	?>
		</div>

</article>
