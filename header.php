<!DOCTYPE html>
<html <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<link rel="profile" href="http://gmgp.org/xfn/11" />
		<link rel="pingback" href = "<?php bloginfo('pingback_url'); ?>" />	
		<link rel = "stylesheet" href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.css" />
		<link rel = "stylesheet" href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-theme.css" />
		<link rel = "stylesheet" href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-theme.css.map" />
		<link rel = "stylesheet" href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-theme.min.css" />
		<link rel = "stylesheet" href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" />
		<link rel = "stylesheet" href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css.map" />
		<link rel = "stylesheet" href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" />
		<link rel = "stylesheet" href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/maincss.css" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class()?> >
			<div class = "container">
				<div class = "row">
					<header>
						<div class = "col-xs-12 menu-default">
							<?php 
								setMenu('primary-menu', "nav nav-tabs customMenu");
							?>
						</div>
						<div class = "col-xs-12 slide-container">
							<div class = "col-xs-2">
							</div>
							<div class = "col-xs-8 slidebar">
								<?php 
									if (is_home()) {
											
										if ( function_exists( 'easingslider' ) ) { easingslider( 82 ); }
									}
								?>
							</div>
							<div class = "col-xs-2">
							</div>
						</div>
					</header>
				</div>
					<div class = "divine-top-main" >
					</div>
			