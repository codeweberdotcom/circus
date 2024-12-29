<?php
$user_id = get_the_author_meta('ID');
global $post; ?>

<section class="wrapper">
	<div class="container text-left pt-9 pb-0">
		<div class="row">
			<div class="col-md-7 col-lg-6 col-xl-6">
				<h1 class="display-3 mb-3">
					<?php echo codeweber_page_title(); // Page Title
					?>
				</h1>
				<?php
				codeweber_meta_blog(); // Blog Meta Data
				?>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>