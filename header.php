<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ress.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tab.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mv-menu.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header pc" role="banner">
				<h1 class="pc-logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/pc-logo.png" alt="" >
					</a>
				</h1>
				<nav class="global-nav">
					<ul>
						<li>
							<a href="<?php echo home_url(); ?>/about">
								<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/t1.png" alt="" >
							</a>
						</li>
						<li>
							<a href="<?php echo home_url(); ?>/products">
								<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/t2.png" alt="" >
							</a>
						</li>
						<li>
							<a href="<?php echo home_url(); ?>/teiki">
								<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/t3.png" alt="" >
							</a>
						</li>
						<li>
							<a href="<?php echo home_url(); ?>/voice">
								<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/t4.png" alt="" >
							</a>
						</li>
					</ul>
				</nav>
				<nav class="sub-nav">
					<ul>
						<li>
							<a target="_blank" href="https://alliancepharma.jp/sign_in"/>
								<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/pc-menu-login.png" alt="" >
							</a>
						</li>
						<li>
							<a target="_blank" href="https://alliancepharma.jp/cart">
								<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/pc-menu-cart.png" alt="" >
							</a>
						</li>
						<li>
						<div id="menu-bt">
						   <img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/menu-open.png" id="drower" />
						</div>
						<nav id="menu">
							<ul>
							   <li class="navigation_item"><a href="<?php echo home_url(); ?>/about"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m1.png" alt=""></a></li>
							      <li class="navigation_item"><a href="<?php echo home_url(); ?>/guide"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m2.png" alt=""></a></li>
							      <li class="navigation_item"><a href="<?php echo home_url(); ?>/foam#tab2"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m3.png" alt=""></a></li>
							      <li class="navigation_item"><a href="<?php echo home_url(); ?>/voice"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m4.png" alt=""></a></li>
							      <li class="navigation_item"><a href="<?php echo home_url(); ?>/faq"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m5.png" alt=""></a></li>
							      <li class="navigation_item"><a href="<?php echo home_url(); ?>/login"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m6.png" alt=""></a></li>
							</ul>
						</nav>
						</li>
					
				</nav>
			</header>
			
			
			<!-- header -->
			<header class="header tabsp-header" role="banner">
				<h1 class="pc-logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/pc-logo.png" alt="" >
					</a>
				</h1>
				<nav class="sub-nav">
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/pc-menu-login.png" alt="" ></li>
						<li>
							<a target="_blank" href="https://alliancepharma.jp/cart">
								<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/pc-menu-cart.png" alt="" >
							</a>
						</li>
					</ul>
				</nav>
				<div id="menu-bt-sp">
				   <img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/menu-open.png" id="drower-sp" />
				</div>
				<nav id="menu-sp">
					<ul>
					   <li class="navigation_item"><a href="<?php echo home_url(); ?>/about"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m1.png" alt=""></a></li>
					      <li class="navigation_item"><a href="<?php echo home_url(); ?>/guide"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m2.png" alt=""></a></li>
					      <li class="navigation_item"><a href="<?php echo home_url(); ?>/foam#tab2"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m3.png" alt=""></a></li>
					      <li class="navigation_item"><a href="<?php echo home_url(); ?>/voice"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m4.png" alt=""></a></li>
					      <li class="navigation_item"><a href="<?php echo home_url(); ?>/faq"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m5.png" alt=""></a></li>
					      <li class="navigation_item"><a href="<?php echo home_url(); ?>/login"><img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/menu/m6.png" alt=""></a></li>
					</ul>
				</nav>
			</header>
			<nav class="tabsp-global-nav">
				<ul class="tabsp-container">
					<li>
						<a href="<?php echo home_url(); ?>/about">
							<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/t1.png" alt="" >
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/products">
							<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/t2.png" alt="" >
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/teiki">
							<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/t3.png" alt="" >
						</a>
					</li>
					<li>
						<a href="<?php echo home_url(); ?>/voice">
							<img src="<?php echo get_template_directory_uri(); ?>/img/COMMON/header/t4.png" alt="" >
						</a>
					</li>
				</ul>
			</nav>
			<div class="header-bottom"></div>
			<!-- /header -->
			
			<!-- wrapper -->
			<div class="wrapper">
				<!--main-->
				<main>

<script>
jQuery(document).ready(function($){
$(function(){
   $("#menu").css("display","none");
   $("#menu-bt").on("click", function() {
      $("#menu").slideToggle(300);
      $(this).toggleClass("active");
      if($(this).hasClass("active")){
         $("#drower").attr('src','<?php echo get_template_directory_uri(); ?>/img/COMMON/header/menu-close.png');
      }else{
         $("#drower").attr('src','<?php echo get_template_directory_uri(); ?>/img/COMMON/header/menu-open.png');
      }
   });
});
});
</script>
<script>
jQuery(document).ready(function($){
$(function(){
   $("#menu-sp").css("display","none");
   $("#menu-bt-sp").on("click", function() {
      $("#menu-sp").slideToggle(300);
      $(this).toggleClass("active");
      if($(this).hasClass("active")){
         $("#drower-sp").attr('src','<?php echo get_template_directory_uri(); ?>/img/COMMON/header/menu-close.png');
      }else{
         $("#drower-sp").attr('src','<?php echo get_template_directory_uri(); ?>/img/COMMON/header/menu-open.png');
      }
   });
});
});
</script>