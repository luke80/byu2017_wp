<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
		//conditionizr.com
		//configure environment tests
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
		</script>
		<script src="//cdn.byu.edu/2017-core-components/latest/components.js"></script>
	</head>
	<body <?php body_class(); ?>>

	<div role="document" class="page wrapper">
		<byu-header>

			<byu-user-info slot="user">
				<a slot="login" href="/user">Sign In</a>
				<!-- if you are using CAS, use the CAS sign out link instead: -->
				<!--      <a slot="logout" href="/caslogout">Sign Out</a>-->
				<a slot="logout" href="/user/logout">Sign Out</a>
				<?php /* if logged in: ?>
					<span slot="user-name">
					<?php if user identifier {
						print user identifier;
					}
					?>
					</span>
				<?php endif; */ ?>
			</byu-user-info>
			<byu-search slot="search">
			</byu-search>
			<!-- nav -->
			<byu-menu slot="nav" collapsed id="main-menu" class="navigation nav" role="navigation">
				<?php byu2017_wp_nav(); ?>
			</byu-menu>
			<!-- /nav -->
		</byu-header>
		<!-- header -->
		<header class="header clear l-header" role="banner">
			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
				</a>
			</div>
			<!-- /logo -->
		</header>
		<!-- /header -->
