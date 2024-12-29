<?php

/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Codeweber
 * @since Codeweber 1.0
 */

/**get_header();*/
?>
<?php $post_id = get_the_ID(); ?>
<li class="product project item col-md-6 col-lg-12 search-result">
	<div class="card p-5">
		<div class="row">
			<div class="col-md-4">
				<figure class="rounded-0 mb-6">
					<img width="300" height="300" src="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_about_4'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_about_4'); ?>" alt="" />
				</figure>
			</div>
			<div class="col-md-8 ps-md-10">

				<h2 class="post-title h1 link-dark woocommerce-loop-product__title"><a href="<?php the_permalink(); ?>" class="link-dark"><?php the_title(); ?></a></h2>
				<p class="mb-3 lead"></p>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" data-quantity="1" class="btn btn-md btn-primary <?php echo get_theme_mod('codeweber_button_form'); ?> mt-4 button">Подробнее</a>
			</div>
		</div>
	</div>
</li>