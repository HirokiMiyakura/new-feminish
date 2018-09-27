<?php get_header(); ?>

<!-- section -->
<section class="MV">

	<div class="slider-container">
	  <div class="slider">
	    
	    <div><a href="<?php echo home_url(); ?>/about"><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/MV/mv.png" alt="フェミニッシュメイン画像"></a></div>
	    <div><a href="<?php echo home_url(); ?>/campaign"><img src="<?php echo get_template_directory_uri(); ?>/img/CAMPAIGN/CAMPAIGN-MV/mv.png" alt="キャンペーンメイン画像"></a></div>
	    <div><a href="<?php echo home_url(); ?>/teiki"><img src="<?php echo get_template_directory_uri(); ?>/img/TEIKI/TEIKI-MV/mv.png" alt="定期便メイン画像"></a></div>
	    <div><a href="<?php echo home_url(); ?>/about"><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/MV/mv.png" alt="フェミニッシュメイン画像"></a></div>
	    <div><a href="<?php echo home_url(); ?>/campaign"><img src="<?php echo get_template_directory_uri(); ?>/img/CAMPAIGN/CAMPAIGN-MV/mv.png" alt="キャンペーンメイン画像"></a></div>
	  	<div><a href="<?php echo home_url(); ?>/teiki"><img src="<?php echo get_template_directory_uri(); ?>/img/TEIKI/TEIKI-MV/mv.png" alt="定期便メイン画像"></a></div>
	  </div>
	</div>
	<div class="slider-nav-container">
	  <div class="slider-nav"></div>
	</div>
</section>

<!-- section -->
<section class="LINEUP">
	<div class="section-inner">
		<h2><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/LINEUP/LINEUP-TITLE.png" alt="LINEUPタイトル"></h2>
		<div class="lineup-container">
			<div class="lineup-item">
				<a href="<?php echo home_url(); ?>/foam">
					<img src="<?php echo get_template_directory_uri(); ?>/img/TOP/LINEUP/LINEUP-SOAP.png" alt="医薬部外品泡タイプ洗浄料">
				</a>
			</div>
			<div class="lineup-item">
				<a href="<?php echo home_url(); ?>/sheet">
					<img src="<?php echo get_template_directory_uri(); ?>/img/TOP/LINEUP/LINEUP-SHEET.png" alt="シート状洗浄料">
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /section -->

<!-- section -->
<section class="CAMPAIGN">
	<div class="section-inner">
		<h2><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/CAMPAIGN/CAMPAIGN-TITLE.png" alt="CAMPAIGNタイトル"></h2>
		<div class="campaign-container">
			<div class="campaign-item">
				<a href="<?php echo home_url(); ?>/campaign">
					<img src="<?php echo get_template_directory_uri(); ?>/img/TOP/CAMPAIGN/c-campaign.png" alt="フェミニッシュシートプレゼント">
				</a>
			</div>
			<div class="campaign-item">
				<a href="<?php echo home_url(); ?>/teiki">
					<img src="<?php echo get_template_directory_uri(); ?>/img/TOP/CAMPAIGN/c-teiki.png" alt="送料無料・毎回10%OFF">
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /section -->

<!-- section -->
<section class="NEWS">
	<div class="section-inner">
		<h2><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/NEWS/NEWS-TITLE.png" alt="NEWSタイトル"></h2>
		<div class="article-waku">
			<img class="oshirase" src="<?php echo get_template_directory_uri(); ?>/img/TOP/NEWS/oshirase.png" alt="お知らせアイコン"/>
			<?php get_template_part('loop'); ?>
		</div>
	</div>
</section>
<!-- /section -->

<!-- section -->
<section class="SNS">
	<div class="section-inner">
		<p><a target="_blank" href="https://www.instagram.com/feminish.official/"><img src="<?php echo get_template_directory_uri(); ?>/img/TOP/SNS/SNS-CONTENT.png" alt="Instagram"></a></p>
	</div>
</section>
<!-- /section -->

<style>
footer {
	margin-top: -20%;
}
</style>

<style>
.slick-img {
            width: 800px;
            margin: auto auto 16px;
        }
        .slick-thumbnail {
            width: 480px;
            margin: auto;
        }
        .slick-thumbnail img {
            margin: auto;
        }
        .slick-thumbnail .slick-current img {
            width: 100%;
            border: 2px solid rgb(255, 0, 0);
        }
</style>


<style>
	.slider-container, .slider-nav-container {
  display: none;
  position: relative;
}
.slider-container.initialized, .slider-nav-container.initialized {
  display: block;
}
.slider-nav-container {
  /*margin-top: 18px;*/
  padding-bottom: 4%;
}
.slider {
  overflow: hidden;
}
.slider-nav {
  margin: 0 26px;
}
.slider-arrow {
  position: absolute;
  top: 50%;
  height: 36px;
  margin-top: -18px;  /* 高さの半分だけネガティブマージン */
  color: #aaa;
  line-height: 36px;
  font-size: 28px;
  cursor: pointer;
  z-index: 10;  /* 重要 */
}
.slider-prev {
  left: 0;
}
.slider-next {
  right: 0;
}
.slick-slide {
  outline: 0;
}
.slider .slick-slide > a > img, .slider-nav .slick-slide > a > img {
  display: block;
  width: 80%;
  margin: 0 auto;
  height: auto;
}

.slick-center {
	margin-top: 2%;
}

.slider-next {
	position: absolute;
	top: 60%;
	right: 0;
	z-index: 100;
	background-size: 30vw;
	width: 25vw;
}

.slider-next > img {
	float: right;
}

.slider-prev {
	position: absolute;
	top: 60%;
	left: 0;
	z-index: 100;
	background-size: 30vw;
	width: 25vw;
}
.slick-slide.slick-current.slick-active.slick-center > a > img {
	width: 100%;
}
</style>

<?php get_footer(); ?>
