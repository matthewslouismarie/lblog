<?php
/**
 * @package lblog
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

?>
<div class="entry-container" id="post-<?= get_the_ID() ?>">
	<header class="entry-header">
		<h2 class="entry-title">
			<a class="link" href="<?= get_the_permalink() ?>"><?= get_the_title(); ?></a>
		</h2>
		<div class="date"><?= get_the_date() ?></div>
	</header>
    <?= get_the_excerpt(); ?>
</div>
<?php

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
