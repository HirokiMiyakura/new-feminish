<?php

/*
Template Name: サイトマップ(sitemap-page.php)
*/

get_header(); ?>
	<!-- SITEMAP section -->
	<section class="SITEMAP">
		<div class="sitemap-inner">
			<h2 class="midashi">サイトマップ</h2>
			<?php echo do_shortcode('[wp_sitemap_page]'); ?>
		</div>
	</section>
	<!-- /SITEMAP section -->

<?php get_footer(); ?>