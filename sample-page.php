<?php

/*
Template Name: サンプル(sample-page.php)
*/

get_header(); ?>

<!-- section -->
		<section class="ABOUT-NAYAMI">
			<p class="relative">
			<img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/new-nayami2.png" usemap="#ImageMap" alt="" />
			<map name="ImageMap">
			  <area shape="rect" onclick="showBalloon1()" coords="-62,307,452,363" alt="" />
			  <area shape="rect" onclick="showBalloon2()" coords="-25,377,277,422" alt="" />
			  <area shape="rect" onclick="showBalloon3()" coords="0,440,271,489" alt="" />
			  <area shape="rect" onclick="showBalloon4()" coords="1,504,496,553" alt="" />
			  <area shape="rect" onclick="showBalloon5()" coords="1,572,467,666" alt="" />
			  <span class="balloon1" id="makeImg1"><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi1.png"></span>
			  <span class="balloon2" id="makeImg2"><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi2.png"></span>
			  <span class="balloon3" id="makeImg3"><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi3.png"></span>
			  <span class="balloon4" id="makeImg4"><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi4.png"></span>
			  <span class="balloon5" id="makeImg5"><img src="<?php echo get_template_directory_uri(); ?>/img/ABOUT/ABOUT-NAYAMI/hukidashi5.png"></span>
			</map>
			</p>
			<style type="text/css">
				img[usemap] {
				    max-width: 100%;
				    height: auto;
				}
				.balloonoya {
				  position: relative;             /* 指定した分だけ相対的に移動 */
				  cursor: pointer;                /* カーソルをポインターで表示 */
				}
				.balloon1,
				.balloon2,
				.balloon3,
				.balloon4,
				.balloon5 {
				  display: none!important;                     /* 要素を非表示 */
				}
				
				#makeImg1 {
					position: absolute;
					top: 40%;
				}
				#makeImg2 {
					position: absolute;
					top: 40%;
				}
				#makeImg3 {
					position: absolute;
					top: 40%;
				}
				#makeImg4 {
					position: absolute;
					top: 40%;
				}
				#makeImg5 {
					position: absolute;
					top: 40%;
				}
				
				.balloon1,
				.balloon2,
				.balloon3,
				.balloon4,
				.balloon5 {
				  position: absolute;                   /* 親要素を基準 */
				  display: inline;                      /* 要素をインラインとして表示 */
				  padding: 2px;                         /* テキストの前後の余白 */
				  background-color: rgba(102, 102, 255, 0.50);       /* 背景色（透明度） */
				  width:180px;                          /* 吹き出し全体の幅 */
				  top: 0;                           /* 表示位置 */
				  right: 0;
				  font-size: 80%;                       /* 文字サイズ */
				}
				.balloon1:after,
				.balloon2:after,
				.balloon3:after,
				.balloon4:after,
				.balloon5:after{
				  border-left: 12px solid rgba(102, 102, 255, 0.50);   /* 吹き出し口の幅・色 */
				  border-top: 10px solid transparent;     /* 吹き出し口の高さ１／２ */
				  border-bottom: 10px solid transparent;  /* 吹き出し口の高さ１／２ */
				  right: -12px;                           /* 吹き出し口の位置調整 */
				  top: 5%;                                /* 吹き出し口の縦位置 */
				  content: "";                       /* コンテンツの挿入 */
				  position: absolute;                /* 親要素を基準 */
				}
			</style>
			<script>
				function showBalloon1(){
				var wObjballoon	= document.getElementById("makeImg1");
				if (wObjballoon.className == "balloon1"){
				wObjballoon.className = "balloon";
				}else{
				wObjballoon.className = "balloon1";
				}
				}
			</script>
			<script>
				function showBalloon2(){
				var wObjballoon	= document.getElementById("makeImg2");
				if (wObjballoon.className == "balloon2"){
				wObjballoon.className = "balloon";
				}else{
				wObjballoon.className = "balloon2";
				}
				}
			</script>
			<script>
				function showBalloon3(){
				var wObjballoon	= document.getElementById("makeImg3");
				if (wObjballoon.className == "balloon3"){
				wObjballoon.className = "balloon";
				}else{
				wObjballoon.className = "balloon3";
				}
				}
			</script>
			<script>
				function showBalloon4(){
				var wObjballoon	= document.getElementById("makeImg4");
				if (wObjballoon.className == "balloon4"){
				wObjballoon.className = "balloon";
				}else{
				wObjballoon.className = "balloon4";
				}
				}
			</script>
			<script>
				function showBalloon5(){
				var wObjballoon	= document.getElementById("makeImg5");
				if (wObjballoon.className == "balloon5"){
				wObjballoon.className = "balloon";
				}else{
				wObjballoon.className = "balloon5";
				}
				}
			</script>
		</section>
		<!-- /section -->

<style>
	footer {
		margin-top: 0;
	}
</style>
<?php get_footer(); ?>zw