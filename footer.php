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
				<li class="f-contact"><a href="<?php echo home_url(); ?>/contact">お問合せ</a></li>
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

<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
	(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
	l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');
</script>


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
</body>
</html>