<?php get_header(); ?>

<!-- section -->
<section class="MV">
	
	<ul class="main">
		<li class="item2">
			<a href="<?php echo home_url(); ?>/teiki">
				<img src="<?php echo get_template_directory_uri(); ?>/img/TEIKI/TEIKI-MV/mv.png" alt="">
			</a>
		</li>
		<li class="item1">
			<a href="<?php echo home_url(); ?>/about">
				<img src="<?php echo get_template_directory_uri(); ?>/img/TOP/MV/mv.png" alt="">
			</a>
		</li>
		<li class="item3">
			<a href="<?php echo home_url(); ?>/campaign">
				<img src="<?php echo get_template_directory_uri(); ?>/img/CAMPAIGN/CAMPAIGN-MV/mv.png" alt="">
			</a>
		</li>
	</ul>
	<ul class="thumb">
		<li class="thumb2"><img src="<?php echo get_template_directory_uri(); ?>/img/SLIDER/slide2.png" alt="" ></li>
		<li class="thumb1"><img class="center-slide" src="<?php echo get_template_directory_uri(); ?>/img/SLIDER/slide1.png" alt="" ></li>
		<li class="thumb3"><img src="<?php echo get_template_directory_uri(); ?>/img/SLIDER/slide3.png" alt="" ></li>
	</ul>
</section>
<!-- /section -->

<!-- section -->
<section class="LINEUP">
	<div class="section-inner">
		<h2><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/LINEUP/LINEUP-TITLE.png" alt=""></h2>
		<div class="lineup-container">
			<div class="lineup-item">
				<a href="<?php echo home_url(); ?>/foam">
					<img src="<?php echo get_template_directory_uri(); ?>/img/TOP/LINEUP/LINEUP-SOAP.png" alt="">
				</a>
			</div>
			<div class="lineup-item">
				<a href="<?php echo home_url(); ?>/sheet">
					<img src="<?php echo get_template_directory_uri(); ?>/img/TOP/LINEUP/LINEUP-SHEET.png" alt="">
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /section -->

<!-- section -->
<section class="CAMPAIGN">
	<div class="section-inner">
		<h2><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/CAMPAIGN/CAMPAIGN-TITLE.png" alt=""></h2>
		<div class="campaign-container">
			<div class="campaign-item">
				<a href="<?php echo home_url(); ?>/campaign">
					<img src="<?php echo get_template_directory_uri(); ?>/img/TOP/CAMPAIGN/c-campaign.png" alt="">
				</a>
			</div>
			<div class="campaign-item">
				<a href="<?php echo home_url(); ?>/teiki">
					<img src="<?php echo get_template_directory_uri(); ?>/img/TOP/CAMPAIGN/c-teiki.png" alt="">
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /section -->

<!-- section -->
<section class="NEWS">
	<div class="section-inner">
		<h2><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/NEWS/NEWS-TITLE.png" alt=""></h2>
		<div class="article-waku">
			<img class="oshirase" src="<?php echo get_template_directory_uri(); ?>/img/TOP/NEWS/oshirase.png" alt=""/>
			<?php get_template_part('loop'); ?>
		</div>
	</div>
</section>
<!-- /section -->

<!-- section -->
<section class="SNS">
	<div class="section-inner">
		<p><a target="_blank" href="https://www.instagram.com/feminish.official/"><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/SNS/SNS-CONTENT.png" alt=""></a></p>
	</div>
</section>
<!-- /section -->

<style>
footer {
	margin-top: -20%;
}
</style>
<?php get_footer(); ?>
