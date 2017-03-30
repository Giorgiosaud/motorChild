<?php
global $motor_options;
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if (!empty($motor_options['motor_favicon'])) : ?>
		<link rel="shortcut icon" href="<?php echo esc_attr($motor_options['motor_favicon']); ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo esc_attr($motor_options['motor_favicon']); ?>" type="image/x-icon">
	<?php endif; ?>
	
	<?php wp_head(); ?>
</head>
<body <?php
$sticky_header = '';
if (!empty($motor_options['motor_header_sticky']) && $motor_options['motor_header_sticky']) {
    $sticky_header = 'header-sticky';
}
body_class($sticky_header);
?>>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '614386785429381',
			xfbml      : true,
			version    : 'v2.8'
		});
		FB.AppEvents.logPageView();
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>


<div id="page" class="site">
<header>
	<div class="logo">
		<?php the_custom_logo();?>
	</div>
	<div class="menues">
		<div class="searchFormYCarro">
			<div class="searchForm">
				<?php get_search_form();?>
			</div>
			<div class="carro">
				<a href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>">
					<p class="header-cart-count">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cart.png" alt="">
						<span><?php echo WC()->cart->get_cart_contents_count()?></span>
					</p>
				</a>
			</div>
		</div>
	</div>
</header>
	<!-- Header - start -->
	<div class="header flex-row">
		<div class="logo">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_attr($motor_options['motor_header_logo']); ?>" alt="<?php bloginfo('sitename'); ?>"></a>
		</div>
		<div class="flex-column">
			<div class="menuBuscadorCarrito">
				<div class="buscador">
					<?php get_search_form(); ?>
				</div>
				<div class="carrito">
				<a href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>">
						<p class="header-cart-count">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cart.png" alt="">
							<span><?php echo WC()->cart->get_cart_contents_count()?></span>
						</p>
					</a>
				</div>
			</div>
			<div class="menuPrincipalEIconos">
				<div class="menuPrincipal">

<?php
wp_nav_menu(array(
	'theme_location' => 'rw-top-menu',
	'container' => 'nav',
	'container_class' => '',
	'container_id' => 'top-menu',
	'items_wrap' => '<ul>%3$s</ul>',
));
?>
						<a href="#" class="header-menutoggle" id="header-menutoggle">
							<?php echo esc_html__('Menu', 'motor'); ?>
						</a>
					</div>
					<div class="iconos">
						<div class="header-info">

							<?php if (class_exists('WooCommerce')) : ?>

								<!-- Personal Menu -->
								<div class="header-personal">
									<?php if (is_user_logged_in()) : ?>
										<a class="header-gopersonal" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"></a>
										<ul>
											<?php if (!empty($motor_options['compare']['id'])) : ?>
												<li>
													<a href="<?php echo ($motor_options['compare']['id']) ? get_permalink($motor_options['compare']['id']) : ''; ?>"><?php echo esc_html__('Compare list', 'motor'); ?> <span><?php echo count($motor_options['compare']['list'])?></span></a>
												</li>
											<?php endif; ?>
											<?php if (!empty($motor_options['wishlist']['id'])) : ?>
												<li>
													<a href="<?php echo ($motor_options['wishlist']['id']) ? get_permalink($motor_options['wishlist']['id']) : ''; ?>"><?php echo esc_html__('Wishlist', 'motor'); ?> <span><?php echo esc_attr($motor_options['wishlist']['count']); ?></span></a>
												</li>
											<?php endif; ?>
											<li class="header-personal-cart">
												<a href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>"><?php echo esc_html__('Shopping Cart', 'motor'); ?> <span><?php echo WC()->cart->get_cart_contents_count()?></span></a>
											</li>
											<li class="header-order">
												<a href="<?php echo esc_url(WC()->cart->get_checkout_url()); ?>"><?php echo esc_html__('Checkout', 'motor'); ?></a>
											</li>
											<li>
												<a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"><?php echo esc_html__('My Account', 'motor'); ?></a>
											</li>
											<li>
												<a href="<?php echo esc_url(wc_customer_edit_account_url()); ?>"><?php echo esc_html__('Settings', 'motor'); ?></a>
											</li>
											<li>
												<a href="<?php echo esc_url(wc_get_endpoint_url('customer-logout', '', wc_get_page_permalink('myaccount'))); ?>"><?php echo esc_html__('Log out', 'motor'); ?></a>
											</li>
										</ul>
									<?php else : ?>
										<a class="header-gopersonal" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"></a>
										<ul>
											<li>
												<a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"><?php esc_html_e('Login / Register', 'motor'); ?></a>
											</li>
										</ul>
									<?php endif; ?>
								</div>

								<!-- Small Cart -->
								<a href="<?php echo esc_url(WC()->cart->get_cart_url()); ?>" class="header-cart">
									<div class="header-cart-inner">
										<p class="header-cart-summ"><?php echo WC()->cart->get_cart_total(); ?></p>
									</div>
								</a>

							<?php endif; ?>

							<?php if (!empty($motor_options['compare']['id'])) : ?>
								<a href="<?php echo (!empty($motor_options['compare']['id'])) ? get_permalink($motor_options['compare']['id']) : ''; ?>" class="header-compare"><?php if (count($motor_options['compare']['list'])) : ?><span><?php echo count($motor_options['compare']['list'])?></span><?php endif; ?></a>
							<?php endif; ?>
							<?php if (!empty($motor_options['wishlist']['id'])) : ?>
								<a href="<?php echo (!empty($motor_options['wishlist']['id'])) ? get_permalink($motor_options['wishlist']['id']) : ''; ?>" class="header-favorites"><?php if (!empty($motor_options['wishlist']['count'])) : ?><span><?php echo esc_attr($motor_options['wishlist']['count']); ?></span><?php endif; ?></a>
							<?php endif; ?>

						</div>

					</div>
				</div>
			</div>
		</div>


		<div id="content" class="site-content">
