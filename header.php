<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="IE=9" />

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>
		 <?php
	if (function_exists('is_tag') && is_tag()) {
		single_tag_title("Tag Archive for "); echo '" - '; }
	elseif (is_archive()) {
		  wp_title(''); echo ' Archive - '; }
	elseif (is_search()) {
		   echo 'Search for "'.wp_specialchars($s).'" - '; }
	elseif (!(is_404()) && (is_single()) || (is_page() && !is_front_page())) {
		   wp_title(''); echo ' - '; }
	elseif (is_404()) {
		   echo 'Not Found - '; }
	if (is_home() || is_front_page()) {
		bloginfo('name'); echo ' - '; bloginfo('description'); }
	else {
		   bloginfo('name'); }
	if ($paged>1) {
	echo ' - page '. $paged; }
?>
	</title>

	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/wp-content/themes/yantis/css/slicknav.css" type="text/css" />
	<link rel="stylesheet" href="http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/wp-content/themes/yantis/css/slippry.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>



		<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- Javascript
	================================================== -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body>
<header class="band">
	<div class="container">
		<div class="sixteen columns toparea">
			<div class="three columns alpha">

			<a href="/"><img class="scale-with-grid" src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" alt="Logo Goes Here" width="180px"/></a>
			</div>

			<div class="thirteen columns omega">

				<div class="social">
			<a href="http://www.linkedin.com/company/yantis-company"><span class="linkedin" data-icon="&#xe09d;"></span></a><a href="https://www.facebook.com/yantiscompany"><span class="facebook" data-icon="&#xe093;">&nbsp;</span></a><a href="https://twitter.com/YCOconstruction"><span class="twitter" data-icon="&#xe094;"></span></a><a href="https://www.youtube.com/channel/UCisqyXxJYhyXUncUVMfaGkQ"><span class="youtube" data-icon="&#xe0a3;"></span></a>
				</div>

				<?php
					$defaults = array(
						'theme_location'  => '',
						'menu'            => '',
						'container'       => false,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => 'nav',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="topnav" class="%2$s">%3$s</ul>',
						'depth'           => 2,
						'walker'          => ''
					);?>
			<nav>
				<?php wp_nav_menu( $defaults );?>

			</nav>

			</div>
        </div>
	</div>
</header><!-- end of header -->