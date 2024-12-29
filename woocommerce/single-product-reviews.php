<?php

/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.3.0
 */

defined('ABSPATH') || exit;

global $product;

if (!comments_open()) {
	return;
}

?>


<div class="row gx-md-8 gx-xl-12 gy-10">

	<div class="col-lg-8 order-md-2">
		<div id="reviews" class="woocommerce-Reviews">
			<div id="comments">

				<div class="row align-items-center mb-10 position-relative zindex-1">
					<div class="col-md-12 pe-xl-20">
						<h2 class="display-6 mb-0 woocommerce-Reviews-title">

							<?php
							$count = $product->get_review_count();
							if ($count && wc_review_ratings_enabled()) {
								/* translators: 1: reviews count 2: product name */
								$reviews_title = sprintf(esc_html(_n('%1$s review', '%1$s reviews', $count, 'woocommerce')), esc_html($count), get_the_title());
								echo apply_filters('woocommerce_reviews_title', $reviews_title, $count, $product); // WPCS: XSS ok.
							} else {
								esc_html_e('Reviews', 'woocommerce');
							}
							?>
						</h2>
					</div>
					<!--/column -->
				</div>
				<!--/.row -->

				<?php if (have_comments()) : ?>

					<ol id="singlecomments" class="commentlist">
						<?php wp_list_comments(apply_filters('woocommerce_product_review_list_args', array('callback' => 'woocommerce_comments'))); ?>
					</ol>

					<?php
					if (get_comment_pages_count() > 1 && get_option('page_comments')) :
						echo '<nav class="woocommerce-pagination">';
						paginate_comments_links(
							apply_filters(
								'woocommerce_comment_pagination_args',
								array(
									'prev_text' => is_rtl() ? '&rarr;' : '&larr;',
									'next_text' => is_rtl() ? '&larr;' : '&rarr;',
									'type'      => 'list',
								)
							)
						);
						echo '</nav>';
					endif;
					?>
				<?php else : ?>
					<p class="woocommerce-noreviews"><?php esc_html_e('There are no reviews yet.', 'woocommerce'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<aside class="col-lg-4 sidebar">
		<div class="widget mt-1 sticky-top zindex-1">

			<?php if (get_option('woocommerce_review_rating_verification_required') === 'no' || wc_customer_bought_product('', get_current_user_id(), $product->get_id())) : ?>
				<div id="review_form_wrapper">
					<div id="review_form">
						<?php
						$commenter    = wp_get_current_commenter();
						$comment_form = array(
							/* translators: %s is product title */
							'title_reply'         => have_comments() ? esc_html__('Review this product', 'codeweber') : sprintf(esc_html__('Be the first to review &ldquo;%s&rdquo;', 'woocommerce'), get_the_title()),
							/* translators: %s is product title */
							'title_reply_to'      => esc_html__('Leave a Reply to %s', 'woocommerce'),
							'title_reply_before'  => '<h4 id="reply-title" class="widget-title mb-3 comment-reply-title">',
							'title_reply_after'   => '</h4>',
							'comment_notes_after' => '',
							'label_submit'        => esc_html__('Submit', 'woocommerce'),
							'logged_in_as'        => '',
							'comment_field'       => '',
						);

						$name_email_required = (bool) get_option('require_name_email', 1);
						$fields              = array(
							'author' => array(
								'label'    => __('Name', 'woocommerce'),
								'type'     => 'text',
								'value'    => $commenter['comment_author'],
								'required' => $name_email_required,
							),
							'email'  => array(
								'label'    => __('Email', 'woocommerce'),
								'type'     => 'email',
								'value'    => $commenter['comment_author_email'],
								'required' => $name_email_required,
							),
						);

						$comment_form['fields'] = array();

						foreach ($fields as $key => $field) {
							$field_html  = '<p class="comment-form-' . esc_attr($key) . '">';
							$field_html .= '<label for="' . esc_attr($key) . '">' . esc_html($field['label']);

							if ($field['required']) {
								$field_html .= '&nbsp;<span class="required">*</span>';
							}

							$field_html .= '</label><input id="' . esc_attr($key) . '" name="' . esc_attr($key) . '" type="' . esc_attr($field['type']) . '" value="' . esc_attr($field['value']) . '" size="30" ' . ($field['required'] ? 'required' : '') . ' /></p>';

							$comment_form['fields'][$key] = $field_html;
						}

						$account_page_url = wc_get_page_permalink('myaccount');
						if ($account_page_url) {
							/* translators: %s opening and closing link tags respectively */
							$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf(esc_html__('You must be %1$slogged in%2$s to post a review.', 'woocommerce'), '<a href="' . esc_url($account_page_url) . '">', '</a>') . '</p>';
						}

						if (wc_review_ratings_enabled()) {

							$comment_form['comment_field'] = '<div class="comment-form-rating">
							
							<label for="rating">' . esc_html__('Your rating', 'woocommerce') . (wc_review_ratings_required() ? '&nbsp;<span class="required">*</span>' : '') . '</label>
							<select name="rating" id="rating" required>
						<option value="">' . esc_html__('Rate&hellip;', 'woocommerce') . '</option>
						<option value="5">' . esc_html__('Perfect', 'woocommerce') . '</option>
						<option value="4">' . esc_html__('Good', 'woocommerce') . '</option>
						<option value="3">' . esc_html__('Average', 'woocommerce') . '</option>
						<option value="2">' . esc_html__('Not that bad', 'woocommerce') . '</option>
						<option value="1">' . esc_html__('Very poor', 'woocommerce') . '</option>
					</select>
					</div>';
						}

						$comment_form['comment_field'] .= '<p class="form-floating mb-4 comment-form-comment"><textarea id="comment" class="form-control" name="comment" placeholder="' . esc_html__('Your review', 'woocommerce') . '" style="height: 150px" required></textarea><label for="comment">' . esc_html__('Your review', 'woocommerce') . '</label></p><!-- /.form-floating -->';

						$comment_form['class_submit'] = GetThemeButton() . ' btn-primary btn w-100';


						$comment_form['fields']['email'] = '<p class="comment-form-email form-floating mb-4"><input id="email" name="email" placeholder="E-Mail" class="form-control"  type="email"  value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-describedby="email-notes"  required/><label for="email">' . __('Email') . ($req ? ' <span class="required">*</span>' : '') . '</label></p>';

						$comment_form['fields']['author'] = '<p class="comment-form-author form-floating mb-4"><input id="author" placeholder="Имя" name="author" type="text" class="form-control" value="' . esc_attr($commenter['comment_author']) . '" size="30" required/><label for="author">' . __('Name') . '</label></p>';

						$comment_form['fields']['cookies'] =
							'<p class="comment-form-cookies-consent form-check mb-4"><input class="form-check-input" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value=""><label for="wp-comment-cookies-consent">' . __('Save my name, email, and website in this browser for the next time I comment.') . '</label></p>';




						comment_form(apply_filters('woocommerce_product_review_comment_form_args', $comment_form));
						?>
					</div>
				</div>
			<?php else : ?>
				<p class="woocommerce-verification-required"><?php esc_html_e('Only logged in customers who have purchased this product may leave a review.', 'woocommerce'); ?></p>
			<?php endif; ?>

			<div class="clear"></div>
		</div>

</div>
<!-- /.widget -->
</aside>
<!-- /column .sidebar -->






</div>