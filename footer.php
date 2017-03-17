<?php
global $motor_options;
?>


</div><!-- #content -->
<?php $footer_image=get_stylesheet_directory_uri().'/img/footer.jpg';
	if(get_theme_mod('footer_image')){
		$footer_image=get_theme_mod('footer_image')	;
	}
 ?>

<!-- Footer - start -->
<footer class="footer">
	<div class="cont footer-top" style="bakcground-image:url(<?= $footer_image ?>)">

		<!-- Footer Menu -->
		<div class="footer-menu">
			<?php
			// print wp_nav_menu with menu title
			motor_print_nav_menu('rw-footer-menu-1');
			?>
		</div>
		<div class="footer-menu">
			<?php
			// print wp_nav_menu with menu title
			motor_print_nav_menu('rw-footer-menu-2');
			?>
		</div>
		<div class="footer-menu">
			<?php
			// print wp_nav_menu with menu title
			motor_print_nav_menu('rw-footer-menu-3');
			?>
		</div>

		<div class="footer-info">
			<?php if (!empty($motor_options['motor_footer_form_2'])) : ?>
			<p class="footer-msg"><?php echo esc_html__('Our online support is available', 'motor') . ' <a class="callback" href="#">' . esc_html__( 'Send us a message', 'motor' ) . '</a>'; ?></p>
			<?php endif; ?>

			<!-- <div class="footer-social">
				<?php for ($i = 1; $i <= 10; $i++) : ?>
					<?php if (!empty($motor_options['motor_footer_link_'.$i]) && !empty($motor_options['motor_footer_icon_'.$i])) : ?>
					<div class="footer-social-item">
						<a rel="nofollow" target="_blank" href="<?php echo esc_url($motor_options['motor_footer_link_'.$i]); ?>">
							<?php echo wp_kses_post($motor_options['motor_footer_icon_'.$i]); ?>
						</a>
					</div>&nbsp;
					<?php endif; ?>
				<?php endfor; ?>
			</div -->
			<?php if (!empty($motor_options['motor_footer_form_1'])) : ?>
			<div class="footer-info-form">
			<?php echo do_shortcode($motor_options['motor_footer_form_1']); ?>
			</div>
			<?php endif; ?>
		</div>

	</div>
	<?php if (!empty($motor_options['motor_header_topbar']) && $motor_options['motor_header_topbar']) : ?>
<!-- TopBar - start -->
<div class="topbar">
	<?php
	if (
		!empty($motor_options['motor_header_address_ttl']) ||
		!empty($motor_options['motor_header_address']) ||
		!empty($motor_options['motor_header_contacts_ttl']) ||
		!empty($motor_options['motor_header_contacts']) ||
		!empty($motor_options['motor_header_phone_ttl']) ||
		!empty($motor_options['motor_header_phone'])
	) :
	?>
	<ul class="topbar-address">
		<?php if (!empty($motor_options['motor_header_address_ttl']) || !empty($motor_options['motor_header_address'])) : ?>
		<li>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/ico1.png" alt="">
			<p>
			<?php if (!empty($motor_options['motor_header_address_ttl'])) : ?><span><?php echo esc_attr($motor_options['motor_header_address_ttl']); ?></span><?php endif; ?> <?php if (!empty($motor_options['motor_header_address'])) echo esc_attr($motor_options['motor_header_address']); ?>
			</p>
		</li>
		<?php endif; ?>
		<?php if (!empty($motor_options['motor_header_contacts_ttl']) || !empty($motor_options['motor_header_contacts'])) : ?>
		<li>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/ico2.png" alt="">
			<p>
				<?php if (!empty($motor_options['motor_header_contacts_ttl'])) : ?><span><?php echo esc_attr($motor_options['motor_header_contacts_ttl']); ?></span><?php endif; ?> <?php if (!empty($motor_options['motor_header_contacts'])) echo esc_attr($motor_options['motor_header_contacts']); ?>
			</p>
		</li>
		<?php endif; ?>
		<?php if (!empty($motor_options['motor_header_phone_ttl']) || !empty($motor_options['motor_header_phone'])) : ?>
		<li>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/ico3.png" alt="">
			<p>
				<?php if (!empty($motor_options['motor_header_phone_ttl'])) : ?><span><?php echo esc_attr($motor_options['motor_header_phone_ttl']); ?></span><?php endif; ?> <?php if (!empty($motor_options['motor_header_phone'])) echo esc_attr($motor_options['motor_header_phone']); ?>
			</p>
		</li>
		<?php endif; ?>
	</ul>
	<?php endif; ?>
	<ul class="topbar-social">
		<?php for ($i = 1; $i <= 10; $i++) : ?>
			<?php if (!empty($motor_options['motor_footer_link_'.$i]) && !empty($motor_options['motor_footer_icon_'.$i])) : ?>
				<li>
					<a rel="nofollow" target="_blank" href="<?php echo esc_url($motor_options['motor_footer_link_'.$i]); ?>">
						<?php echo wp_kses_post($motor_options['motor_footer_icon_'.$i]); ?>
					</a>
				</li>
			<?php endif; ?>
		<?php endfor; ?>
	</ul>
</div>
<!-- TopBar - end -->
<?php endif; ?>

	<div class="copyright">
		<p class="cont"><?php echo esc_attr($motor_options['motor_footer_copyright']); ?></p>
	</div>
</footer>
<!-- Footer - end -->

<!-- Modal Form -->
<?php if (!empty($motor_options['motor_footer_form_2'])) : ?>
<div id="modal-form" class="modal-form">
	<?php echo do_shortcode($motor_options['motor_footer_form_2']); ?>
</div>
<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
