<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>


<link rel="profile" href="http://gmpg.org/xfn/11" />


<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"/>
<link rel="apple-touch-icon" sizes="57x57" href="assets/icons/favicon/apple-icon-57x57.png"/>
<link rel="apple-touch-icon" sizes="60x60" href="assets/icons/favicon/apple-icon-60x60.png"/>
<link rel="apple-touch-icon" sizes="72x72" href="assets/icons/favicon/apple-icon-72x72.png"/>
<link rel="apple-touch-icon" sizes="76x76" href="assets/icons/favicon/apple-icon-76x76.png"/>
<link rel="apple-touch-icon" sizes="114x114" href="assets/icons/favicon/apple-icon-114x114.png"/>
<link rel="apple-touch-icon" sizes="120x120" href="assets/icons/favicon/apple-icon-120x120.png"/>
<link rel="apple-touch-icon" sizes="144x144" href="assets/icons/favicon/apple-icon-144x144.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="assets/icons/favicon/apple-icon-152x152.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="assets/icons/favicon/apple-icon-180x180.png"/>
<link rel="icon" type="image/png" sizes="192x192" href="assets/icons/favicon/android-icon-192x192.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicon/favicon-96x96.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon/favicon-16x16.png"/>
<link rel="manifest" href="assets/icons/favicon/manifest.json"/>
<meta name="msapplication-TileColor" content="#ffffff"/>
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png"/>
<meta name="theme-color" content="#ffffff"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>

</head>

<body 
	<?php body_class(); ?>
>
	<header>
		<div class="main-container">
			<div class="subnav-collapse">
				<div class="img-brand_logo">
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo-mupin.png" alt="">	
					</a>
				</div>
				<div class="menu-nav_search">	
					<?php get_search_form(); ?>
				</div>
			</div>
			
			<div class="menu-nav_collapse">
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
			</div>

			<div class="menu-nav_collapse__mo hide">
				<nav>
					<div class="menu-nav_search">
						<?php get_search_form(); ?>
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
			</div>
		</div>
	</header>
<div class="site-content">
