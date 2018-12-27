<?php

/*
Template Name: フェミニッシュシート詳細(sheet-page.php)
*/

get_header(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab.js"></script>

<!-- section -->
<section class="SHEET-MV">
	<p><img src="<?php echo get_template_directory_uri(); ?>/img/SHEET/SHEET-MV/mv.png" alt="フェミニッシュシートメイン画像"></p>
</section>
<!-- /section -->

<!-- section -->
<section class="FOAM-PRODUCT">
	<div class="products-container">
		<div class="products-item" style="margin-top: 0;">
			<form action="https://alliancepharma.jp/api/cart_item.html" class="form-inline" method="post"><input type="hidden" name="id" id="id" value="8" /><input type="hidden" name="cart_item_type" id="cart_item_type" value="single_product" /><div class="form-group">個数<select name="quantity" id="quantity" class="form-control"><option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option></select></div><button name="button" type="submit" class="btn btn-primary">
					<img src="<?php echo get_template_directory_uri(); ?>/img/PRODUCTS/PRODUCTS-SHEET/sheet-normal.png" alt="カートに追加する（通常価格）">
				</button></form><pre class="html-tag-content"></pre>
				<p class="kaiyaku-desc"><a href="<?php echo home_url(); ?>/campaign" class="beginner">フェミニッシュはじめてご購入の方はこちら</a></p>
			</div>
			<div class="products-item">
				<form action="https://alliancepharma.jp/api/cart_item.html" class="form-inline" method="post"><input type="hidden" name="id" id="id" value="3" /><input type="hidden" name="cart_item_type" id="cart_item_type" value="regular_course" /><div class="form-group">個数<select name="quantity" id="quantity" class="form-control"><option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option></select></div><div class="form-group"><div class="form-group"><label><input type="radio" name="products[][variant_id]" id="products__variant_id_18" value="18" checked="checked" />フェミニッシュ シート 12枚 5個セット </label></div></div><button name="button" type="submit" class="btn btn-primary">
						<img src="<?php echo get_template_directory_uri(); ?>/img/PRODUCTS/PRODUCTS-SHEET/p2-teiki2-2.png" alt="定期便特典">
					</button></form><pre class="html-tag-content"></pre>
				</div>
			</div>
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/PRODUCTS/PRODUCTS-SHEET/p-desc.png" alt="定期便説明文"></p>
			<p class="kuwashiku">
				<a href="<?php echo home_url(); ?>/teiki">
					<img src="<?php echo get_template_directory_uri(); ?>/img/PRODUCTS/PRODUCTS-SHEET/p-kuwashiku.png" alt="定期便リンク">
				</a>
			</p>
		</section>
		<!-- /section -->
	</main>
</div>

<!-- TAB section -->
<section class="TAB">
	<div class="ChangeElem_Btn_Content">
		<button class="ChangeElem_Btn">商品説明</button>
		<button class="ChangeElem_Btn">使用方法</button>
		<button class="ChangeElem_Btn">配合成分</button>
	</div>
	<ul class="tab-content">
		<!--商品説明-->
		<li class="ChangeElem_Panel tab1">
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/SHEET/SHEET-TAB/tab1-mv.png" alt="フェミニッシュシート"></p>
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/SHEET/SHEET-TAB/s-point1.png" alt="ユーカリ・ヨモギ葉から抽出した天然清浄エキスとグリチルリチン酸2Kを配合。お肌を清潔ですこやかな状態に保ちます"></p>
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/SHEET/SHEET-TAB/s-point2.png" alt="保湿成分リピジュアR配合。お肌のうるおいを守ります"></p>
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/SHEET/SHEET-TAB/s-point3.png" alt="肌触りのよい素材（不織布）を使用。お肌の敏感な部分にもやさしく使えます"></p>
			<p><img src="<?php echo get_template_directory_uri(); ?>/img/SHEET/SHEET-TAB/s-point4.png" alt="肌へのやさしさにこだわって徹底的に低刺激を追求した無添加。弱酸性処方です"></p>
		</div>
	</li>
	<!--/商品説明-->

	<!--使用方法-->
	<li class="ChangeElem_Panel tab2">
		<p><img src="<?php echo get_template_directory_uri(); ?>/img/SHEET/SHEET-TAB/s-tab2.png" alt="使用方法・使用上の注意"></p>
	</li>
	<!--/使用方法-->

	<!--配合成分-->
	<li class="ChangeElem_Panel tab3">
		<p><img src="<?php echo get_template_directory_uri(); ?>/img/SHEET/SHEET-TAB/s-tab3.png" alt="配合成分"></p>
	</li>
	<!--/配合成分-->

</ul>
</section>
<!--/TAB section-->
<style>
footer {
	margin-top: 0;
}
</style>
<?php get_footer(); ?>
