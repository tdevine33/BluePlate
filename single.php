<?php
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

		<article role="main">
			<h3 class="page-title"><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</article>

	</div>

<?php
	endwhile; endif;
	get_sidebar();
	get_footer();
?>