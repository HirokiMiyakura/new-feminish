<?php

/*
Template Name: 定期便(teiki-page.php)
*/

get_header(); ?>

<!-- section -->
<section class="TEIKI-MV">
	<p><img src="<?php echo get_template_directory_uri(); ?>/img/TEIKI/TEIKI-MV/mv.png" alt="定期便メイン画像"></p>
</section>
<!-- /section -->

<!-- section -->
<section class="TEIKI-FEATURES">
	<p><img src="<?php echo get_template_directory_uri(); ?>/img/TEIKI/TEIKI-FEATURES/features.png" alt="定期便の特徴"></p>
</section>
<!-- /section -->

<!-- section -->
<section class="TEIKI-PRODUCT">
	<div class="teiki-product-inner">
		<form action="https://alliancepharma.jp/api/cart_item.html" class="form-inline" method="post"><input type="hidden" name="id" id="id" value="2" /><input type="hidden" name="cart_item_type" id="cart_item_type" value="regular_course" /><div class="form-group">個数<select name="quantity" id="quantity" class="form-control"><option value="1">1</option>
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
			<option value="20">20</option></select></div><div class="form-group"><div class="form-group"><label><input type="radio" name="products[][variant_id]" id="products__variant_id_3" value="3" checked="checked" />フェミニッシュ フォーム 【医薬部外品】 200ml</label></div></div><button name="button" type="submit" class="btn btn-primary">
				<img src="<?php echo get_template_directory_uri(); ?>/img/TEIKI/TEIKI-PRODUCT/teiki-product1.png" alt="薬用フェミニッシュフォーム（泡タイプ洗浄料）">
			</button></form><pre class="html-tag-content"></pre>
		</div>
	</section>
	
	<!-- section -->
	<section class="TEIKI-PRODUCT">		
		<div class="teiki-product-inner">
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
				<option value="20">20</option></select></div><div class="form-group"><div class="form-group"><label><input type="radio" name="products[][variant_id]" id="products__variant_id_8" value="8" checked="checked" />フェミニッシュ シート 12枚</label></div></div><button name="button" type="submit" class="btn btn-primary">
					<img src="<?php echo get_template_directory_uri(); ?>/img/TEIKI/TEIKI-PRODUCT/teiki-product2.png" alt="フェミニッシュシート（シート状洗浄料）">
				</button></form><pre class="html-tag-content"></pre>
			</div>
		</section>
		<!-- /section -->
		
		<?php get_footer(); ?>