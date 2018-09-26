<?php

/*
Template Name: フェミニッシュにつて(about-page.php)
*/

get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hukidashi.css"/>
<script src="<?php echo get_template_directory_uri(); ?>/js/hukidashi.js"></script>
		<!-- section -->
		<section class="ABOUT-MV">
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-MV/mv.png" alt="フェミニッシュメイン画像"></p>
		</section>
		<!-- /section -->

		<!-- section -->
		<section class="ABOUT-NAYAMI">
			<div class="about-inner">
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami1.png" alt="なかなか人には話しにくいデリケート・ゾーンの悩み、でも多くの女性が同じ悩みを抱えています！"></p>

			<!--チェックボックス系-->
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami2-title.png" alt="デリケート・ゾーンの洗浄に関しても、「洗い方がわからない」、「洗ってもかゆみやニオイを感じる」、「刺激を感じる」、「きれに洗えているか心配」などが多く挙げられ、多くの女性が不安や悩みを感じていることがわかります"></p>
			<p class="l-check">\\\ チェックを入れてみんなの悩みや不安をチェック ///</p>
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
			<img class="absolute hukudashi1" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi1.png" alt="洗い方がわからない">
			<img class="absolute hukudashi2" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi2.png" alt="かゆみ">
			<img class="absolute hukudashi3" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi3.png" alt="におい">
			<img class="absolute hukudashi4" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi4.png" alt="しみる・刺激を感じる">
			<img class="absolute hukudashi5" src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi5.png" alt="きれいに洗えているか心配/きれいにならない">
		</div>
			<!--チェックボックス系-->

			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami3.png" alt="多くの女性が悩みを抱えているのに、専用の洗浄剤を使用している女性は、わずか4%"></p>
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami4.png" alt="デリケート・ゾーンには、雑菌が繁殖する原因がいっぱい！雑菌の繁殖により炎症を起こし、ニオイ・かゆみなどの不快な症状が発生します"></p>
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/nayami5.png" alt="デリケート・ゾーンをすこやかに保つための洗浄剤とは・・・"></p>
			<p>
				<a href="<?php echo home_url(); ?>/foam">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/n-product.png" alt="薬用フェミニッシュフォーム">
				</a>
			</p>
		</div>
		</section>
		<!-- /section -->

<?php get_footer(); ?>
