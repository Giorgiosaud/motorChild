<?php
global $motor_options;
?>


</div><!-- #content -->


<!-- Footer - start -->
<footer class="footer">
	<div class="cont footer-top">

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

			<div class="footer-social"> 
				<?php for ($i = 1; $i <= 10; $i++) : ?>
					<?php if (!empty($motor_options['motor_footer_link_'.$i]) && !empty($motor_options['motor_footer_icon_'.$i])) : ?>
					<div class="footer-social-item">
						<a rel="nofollow" target="_blank" href="<?php echo esc_url($motor_options['motor_footer_link_'.$i]); ?>">
							<?php echo wp_kses_post($motor_options['motor_footer_icon_'.$i]); ?>
						</a>
					</div>&nbsp;
					<?php endif; ?>
				<?php endfor; ?>
			</div>
			<?php if (!empty($motor_options['motor_footer_form_1'])) : ?>
			<div class="footer-info-form">
			<?php echo do_shortcode($motor_options['motor_footer_form_1']); ?>
			</div>
			<?php endif; ?>
		</div>

	</div>
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