<?php

/**
 * Lost password reset form.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.5
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_reset_password_form');
?>

<form method="post" class="woocommerce-ResetPassword lost_reset_password text-start mb-3">


	<div class="position-relative">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-12 ">
						<h2 class="mb-3 text-start"><?php echo esc_html__('Form Reset password', 'codeweber') ?></h2>

						<p class="lead mb-6 text-start"><?php echo apply_filters('woocommerce_reset_password_message', esc_html__('Enter a new password below.', 'woocommerce')); ?></p>
					</div>
					<?php // @codingStandardsIgnoreLine 
					?>

					<div class="col-12 col-md-4">
						<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first mb-4 form-floating">
							<input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control mb-4" placeholder="<?php esc_html_e('New password', 'woocommerce'); ?>" name=" password_1" id="password_1" autocomplete="new-password" />
							<label class="form-label" for="password_1"></label>
						</p>
					</div>

					<div class="col-12 col-md-4">
						<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last mb-4 form-floating">
							<input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control mb-4" placeholder="<?php esc_html_e('Re-enter new password', 'woocommerce'); ?>" name="password_2" id="password_2" autocomplete="new-password" />
							<label class="form-label" for="password_2"></label>
						</p>
						<input type="hidden" name="reset_key" value="<?php echo esc_attr($args['key']); ?>" />
						<input type="hidden" name="reset_login" value="<?php echo esc_attr($args['login']); ?>" />
						<div class="clear"></div>
					</div>

					<?php do_action('woocommerce_resetpassword_form'); ?>

					<div class="col-12 col-md-4">
						<p class="woocommerce-form-row form-row">
							<input type="hidden" name="wc_reset_password" value="true" />
							<button type="submit" class="woocommerce-Button button btn btn-primary rounded btn-login w-100 mb-2" value="<?php esc_attr_e('Save', 'woocommerce'); ?>"><?php esc_html_e('Save', 'woocommerce'); ?></button>
						</p>

						<?php wp_nonce_field('reset_password', 'woocommerce-reset-password-nonce'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="position-relative">
		<div class="shape bg-dot blue rellax w-16 h-17" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem; z-index: 0;"></div>
	</div>

</form>
<?php
do_action('woocommerce_after_reset_password_form');
