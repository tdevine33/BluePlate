<?php get_header(); ?>

	<section role="main">
		<!-- Search Results for: -->
		<h3><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h3>
		
		<!-- Reults List -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="results">
			<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
			<?php the_excerpt('<span class="read-more">Read more &raquo;</span>'); ?>
		</article>
		
		<!-- Previous & Next -->
		<?php
			endwhile;
			posts_nav_link('--','Previous','Next');
			else:
		?>
		
		<!-- Else -->
		<article id="post-not-found">
    		<h4>Sorry, no results.</h4>
    		<p>Try your search again. Nullam cursus mauris at augue tristique mollis sed sit amet ante. Phasellus at nulla at nulla lobortis volutpat quis vel ipsum. Suspendisse tristique arcu justo.</p>
    	</article>
    	<?php endif; ?>
    	
	</section>

<?php get_footer(); ?>