		<footer role="contentinfo">
			<nav class="footer-nav">
				<?php wp_nav_menu( array(
					'menu' => 'Footer Navigation',
					'container' => false
				) ); ?>
			</nav>
			
			<?php dynamic_sidebar( "Footer - SEO Text" ); ?>
			
			<span class="copy">Copyright &copy; <?php bloginfo('name'); ?> <?php the_time('Y'); ?></span>
			<span class="credit"><a href="http://website.com/" target="_blank">web design</a> by <a href="http://website.com/" target="_blank">Me!</a></span>
			
		</footer>
	
	</div>

	<script defer src="<?php bloginfo('template_url'); ?>/js/scripts-ck.js"></script>
	<script defer src="<?php bloginfo('template_url'); ?>/js/plugins-ck.js"></script>

	<?php wp_footer(); ?>

</body>
</html>