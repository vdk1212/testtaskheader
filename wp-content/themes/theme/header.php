<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<?php wp_head(); ?>
</head>

<body>
	<!-- HEADER -->
	<header>
		<div class="header-content">
			<?php if ( $logo = get_field( 'logo', 'options' ) ) : ?>
				<a href="<?php echo get_home_url(); ?>" class="logo img">
					<img
						src="<?php echo esc_url( $logo[ 'url' ] ); ?>"
						alt="<?php echo esc_attr( $logo[ 'alt' ] ); ?>"
						width="<?php echo esc_attr( $logo[ 'width' ] ); ?>"
						height="<?php echo esc_attr( $logo[ 'height' ] ); ?>"
						loading="lazy"
					>
				</a>
			<?php endif; ?>

			<form action="/" class="search">
				<input type="text" name="search" placeholder="Search for a product">
			</form>

			<div class="user-btn">
				<div class="img">
					<img
						src="<?php echo get_template_directory_uri(); ?>/img/user-light.svg"
						width="16"
						height="19"
						alt="User icon"
						loading="lazy"
					>
					<img
						src="<?php echo get_template_directory_uri(); ?>/img/user.svg"
						width="16"
						height="19"
						alt="User icon"
						loading="lazy"
					>
				</div>
			</div>

			<div class="shopping-cart-btn">
				<div class="img">
					<img
						src="<?php echo get_template_directory_uri(); ?>/img/trolley-light.svg"
						width="18"
						height="16"
						alt="Trolley icon"
						loading="lazy"
					>
					<img
						src="<?php echo get_template_directory_uri(); ?>/img/trolley.svg"
						width="18"
						height="16"
						alt="Trolley icon"
						loading="lazy"
					>
				</div>
				£0.00
			</div>
		</div>

		<div class="dropdown-menu">
			<div class="header-content">
				<div id="menu-btn" class="header-dropdown-btn">
					<div class="img">
						<img
							src="<?php echo get_template_directory_uri(); ?>/img/list-light.svg"
							alt="List icon"
							width="15"
							height="13"
							loading="lazy"
						>
						<img
							src="<?php echo get_template_directory_uri(); ?>/img/list.svg"
							alt="List icon"
							width="15"
							height="13"
							loading="lazy"
						>
					</div>
					<?php if ( $menu_title = get_field( 'menu_title', 'options' ) ) : ?>
						<span><?php echo esc_html( $menu_title ); ?></span>
					<?php endif; ?>
				</div>
			</div>
			<nav>
				<div class="header-content">
					<?php wp_nav_menu( array(
						'menu'         => 'Main menu',
						'container'    => false,
						'container_id' => false,
						'menu_id'      => false,
						'item_wrap'    => '<ul>%3$s</ul>'
					) ) ?>

					<?php if ( $header_img = get_field( 'header_img', 'options' ) ) : ?>
						<div class="img">
							<img
								src="<?php echo esc_url( $header_img[ 'url' ] ); ?>"
								alt="<?php echo esc_attr( $header_img[ 'alt' ] ); ?>"
								width="<?php echo esc_attr( $header_img[ 'width' ] ); ?>"
								height="<?php echo esc_attr( $header_img[ 'height' ] ); ?>"
								loading="lazy"
							>
						</div>
					<?php endif; ?>
				</div>
			</nav>
		</div>
	</header>
	<!-- HEADER END -->