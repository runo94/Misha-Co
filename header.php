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
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<header class="header clear" role="banner">
				<nav class="nav" role="navigation">
					<div class="container">
						<div class="col-md-12 col-sm-12">
							<div class="row">
								<?php html5blank_nav(); ?>
								<button class="hamburger">&#9776;</button>
								<button class="cross">&#735;</button>
							</div>
						</div>
					</div>
				</nav>
				<div class="container">
					<div class="col-md-12 col-sm-12">
						<div class="logo-bg">
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<img src="/wp-content/uploads/2017/02/Make-IT-Work-logo-02.png" alt="Logo" class="logo-img">
								</a>
							</div>
							<div class="title">
								<h2><?php echo get_post_meta($post->ID, 'logo_titile', true); ?></h2>
							</div>
							<div class="list">
								<?php echo get_post_meta($post->ID, 'logo_list', true); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="logo-bg-mobile">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
							</a>
						</div>
						<div class="title">
							<h2><?php echo get_post_meta($post->ID, 'logo_titile', true); ?></h2>
						</div>
						<div class="list">
							<?php echo get_post_meta($post->ID, 'logo_list', true); ?>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</header>
