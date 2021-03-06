<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package parallax-one
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title single-title">', '</h1>' ); ?>
		<div class="colored-line-left"></div>
		<div class="clearfix"></div>
	</header><!-- .entry-header -->

	<div class="entry-content content-page">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'parallax-one' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'parallax-one' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .fentry-footer -->
</article><!-- #post-## -->
