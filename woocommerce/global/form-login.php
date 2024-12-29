<?php

/**
 * Login form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (is_user_logged_in()) {
	return;
}

?>
<form class="woocommerce-form woocommerce-form-login login row align-items-center mb-4" method="post" <?php echo ($hidden) ? 'style="display:none;"' : ''; ?>>

	<?php do_action('woocommerce_login_form_start'); ?>
	<div class="col-12">
		<?php echo ($message) ? wpautop(wptexturize($message)) : ''; // @codingStandardsIgnoreLine 
		?>
	</div>

	<div class="col-md-6 col-lg-3">
		<p class="form-row form-row-first form-floating mb-4">
			<input type="text" class="input-text form-control" name="username" id="username" autocomplete="username" placeholder="<?php esc_html_e('Username or email', 'woocommerce'); ?>" />
			<label for="username"><?php esc_html_e('Username or email', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
		</p>
	</div>

	<div class="col-md-6 col-lg-3">
		<p class="form-row form-row-last password-field form-floating mb-4">
			<input class="input-text woocommerce-Input form-control" name="password" id="password" autocomplete="off" placeholder="<?php esc_html_e('Password', 'woocommerce'); ?>" />
			<span class="password-toggle"><i class="uil uil-eye"></i></span>
			<label for="password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span></label>
		</p>
		<div class="clear"></div>
	</div>

	<?php do_action('woocommerce_login_form'); ?>

	<div class="col-md-2">
		<div class="form-check mb-3">
			<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
				<input class="woocommerce-form__input woocommerce-form__input-checkbox form-check-input" name="rememberme" type="checkbox" id="rememberme" value="forever" checked />
				<label class="form-check-label" for="rememberme"><?php esc_html_e('Remember me', 'woocommerce'); ?> </label>
			</label>
		</div>
	</div>

	<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
	<input type="hidden" name="redirect" value="<?php echo esc_url($redirect); ?>" />

	<div class="col-md-4">
		<button type="submit" class="woocommerce-button button woocommerce-form-login__submit alt btn btn-primary rounded w-100 flex-grow-1 mb-3" name="login" value="<?php esc_attr_e('Login', 'woocommerce'); ?>"><?php esc_html_e('Login', 'woocommerce'); ?></button>
	</div>


	<p class="lost_password">
		<a href="<?php echo esc_url(wp_lostpassword_url()); ?>" class="alert-link hover"><?php esc_html_e('Lost your password?', 'woocommerce'); ?></a>
	</p>
	<div class="clear"></div>

	<?php do_action('woocommerce_login_form_end'); ?>
	<hr class="my-4" />
</form>