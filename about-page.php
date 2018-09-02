<?php

/*
Template Name: フェミニッシュにつて(about-page.php)
*/

get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hukidashi.css"/>
<script src="<?php echo get_template_directory_uri(); ?>/js/hukidashi.js"></script>
		<!-- section -->
		<section class="ABOUT-MV">
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-MV/mv.png" alt=""></p>
		</section>
		<!-- /section -->

		<!-- section -->
		<section class="ABOUT-NAYAMI">
			<div class="about-inner">
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami1.png" alt=""></p>

			<!--チェックボックス系-->
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami2-title.png" alt=""></p>
			<div class="checkbox_outer relative">
			<form>
				<ul class="bg_checkbox">
					<li class="c1"><input type="checkbox" checked><label></label></li>
					<li class="c2"><input type="checkbox" checked><label></label></li>
					<li class="c3"><input type="checkbox" checked><label></label></li>
					<li class="c4"><input type="checkbox" checked><label></label></li>
					<li class="c5"><input type="checkbox" checked><label></label></li>
				</ul>
			</form>
			<img class="absolute hukudashi1" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi1.png" alt="">
			<img class="absolute hukudashi2" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi2.png" alt="">
			<img class="absolute hukudashi3" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi3.png" alt="">
			<img class="absolute hukudashi4" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi4.png" alt="">
			<img class="absolute hukudashi5" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi5.png" alt="">
		</div>
			<!--チェックボックス系-->

			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami3.png" alt=""></p>
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami4.png" alt=""></p>
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami5.png" alt=""></p>
			<p>
				<a href="<?php echo home_url(); ?>/foam">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/n-product.png" alt="">
				</a>
			</p>
		</div>
		</section>
		<!-- /section -->

<?php get_footer(); ?>
