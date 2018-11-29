</main>
<!--/main-->
</div>
<!--/wrapper-->
<!-- footer -->
<footer class="footer" role="contentinfo">
	<div class="footer-container">
		<div class="footer-item">
			<ul>
				<li class="f-guide"><a href="<?php echo home_url(); ?>/guide">ご利用ガイド</a></li>
				<li class="f-contact"><a target="_blank" href="https://alliancepharma.jp/contacts/new">お問合せ</a></li>
				<li class="f-company"><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
				<li class="f-law"><a href="<?php echo home_url(); ?>/law">特定商取引法</a></li>
			</ul>
		</div>
		<div class="footer-item">
			<ul>
				<li class="f-voice"><a href="<?php echo home_url(); ?>/voice">ユーザーボイス</a></li>
				<li class="f-faq"><a href="<?php echo home_url(); ?>/faq">よくあるご質問</a></li>
				<li class="f-sitemap"><a href="<?php echo home_url(); ?>/sitemap">サイトマップ</a></li>
				<li class="f-privacypolicy"><a href="<?php echo home_url(); ?>/privacypolicy">プライバシーポリシー</a></li>
			</ul>
		</div>
	</div>
	
	<!-- copyright -->
	<p class="copyright" style="display: none">
	</p>
	<!-- /copyright -->
	
</footer>
<!-- /footer -->

</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

<script>
jQuery(document).ready(function($){
	$(function(){
		$('.thumb li').click(function(){
			var class_name = $(this).attr("class"); //クリックしたサムネイルのclass名を取得
			var num = class_name.slice(5); //class名の末尾の数字を取得
			$('.main li').hide(); //メインの画像を全て隠す
			$('.item' + num).fadeIn(); //クリックしたサムネイルに対応するメイン画像を表示
		});
	});
});
</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script>
	var $slider_container = $('.slider-container'),
    $slider = $('.slider'),
    $slider_nav_container = $('.slider-nav-container'),
    $slider_nav = $('.slider-nav');

// ナビゲーション用に複製
$slider_nav.append($slider.contents().clone());

// スライド初期化時にクラスを追加
// はじめはdisplay:noneしておき、.initializedが追加されたらdisplay:block
$slider.on('init', function(){
  $slider_container.addClass('initialized');
});
$slider_nav.on('init', function(){
  $slider_nav_container.addClass('initialized');
});

$slider.slick({
  arrows: false,
  asNavFor: $slider_nav,
  fade: true,
  waitForAnimate: false
});
$slider_nav.slick({
  appendArrows: $slider_nav_container,
  prevArrow: '<div class="slider-prev"><img src="<?php echo get_template_directory_uri(); ?>/img/SLIDER/left.png" alt="左矢印"/></div>',
  nextArrow: '<div class="slider-next"><img src="<?php echo get_template_directory_uri(); ?>/img/SLIDER/right.png" alt="右矢印"/></div>',
  slidesToShow: 3,
  asNavFor: $slider,
  focusOnSelect: true,
  centerMode: true,
  centerPadding: '0px'
});

// スライドの横幅を小数点以下pxまで表示
// 今回はcenterPaddingもあるのでその分も計算しています
$slider_nav.on('setPosition', function(){
  var slider_width = $slider_nav.width(),
      slide_gutter = $slider_nav.find('.slick-slide').eq(0).css('margin-right').split('px')[0],
      slides_num = $slider_nav.slick('slickGetOption', 'slidesToShow'),
      slides_center_padding = $slider_nav.slick('slickGetOption', 'centerPadding').split('px')[0],
      slide_width = (slider_width - slide_gutter * (slides_num - 1) - (slides_center_padding * 2)) / slides_num;
  $slider_nav.find('.slick-slide').css('width', slide_width + 'px');
});
</script>

<?php if ($_SERVER["SERVER_NAME"] === 'feminish.jp' || $_SERVER["SERVER_NAME"] === 'www.feminish.jp'): ?>    
<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1001026861;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b97.yahoo.co.jp/pagead/conversion/1001026861/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>
<?php endif; ?>
</body>
</html>