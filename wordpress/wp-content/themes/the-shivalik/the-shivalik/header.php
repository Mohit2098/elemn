<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
		*
		* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		*
		* @package The_Shivalik
		*/
	?>
	
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
			<link rel="profile" href="https://gmpg.org/xfn/11">
			<?php wp_head();?>
		</head>
		<body <?php body_class(); ?> class="skin-orange">
			<header class="primary">
				<div class="firstbar">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="brand">
									<a href="index.php">
										<?php
										$custom_logo_id = get_theme_mod( 'custom_logo' );
										$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
										?>
										<img src="<?php echo $image[0]; ?>;" alt="Magz logo">
									</a>
								</div>
								
							</div>
							<div class="col-md-6 col-sm-12">
								<form class="search" autocomplete="off">
									<div class="form-group">
										<div class="input-group">
											<input type="text" name="q" class="form-control" placeholder="Type something here">
											<div class="input-group-btn">
												<button class="btn btn-primary"><i class="ion-search"></i></button>
											</div>
										</div>
									</div>
									<div class="help-block">
										<div>Popular:</div>
										<ul>
											<li><a href="#">HTML5</a></li>
											<li><a href="#">CSS3</a></li>
											<li><a href="#">Bootstrap 3</a></li>
											<li><a href="#">jQuery</a></li>
											<li><a href="#">AnguarJS</a></li>
										</ul>
									</div>
								</form>
							</div>
							<div class="col-md-3 col-sm-12 text-right">
								<ul class="nav-icons">
									<li><a href="index.php/register/"><i class="ion-person-add"></i><div>Register</div></a></li>
									<li><a href="index.php/login/"><i class="ion-person"></i><div>Login</div></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Start nav -->
				<nav class="menu">
					<div class="container">
						<div class="brand">
							<a href="index.php">
								<?php
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								?>
								<img src="<?php echo $image[0]; ?>">
								
							</a>
						</div>
						<div class="mobile-toggle">
							<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
						</div>
						<div class="mobile-toggle">
							<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
						</div>
						
						
						<?php
						wp_nav_menu( array (
						'theme_location' => 'my-custom-menu',
						'container_class' => 'custom-menu-class' ) );
						?>
					</div>
					</nav>
					</header>