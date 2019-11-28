<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="container-fluid no-pad common-page <?php echo get_banner_class(); ?>">
	<div class="row">
		<div class="col-12">
			<div class="overlap-block">
				<div class="banner <?php echo get_banner_class(); ?>">
					<div class="banner-content">
						<h4><?php the_title(); ?></h4>
					</div>
					<!-- /.banner-content -->
				</div>
				<!-- /.banner not-home -->

				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="txt-container">
								<div class="ai-con">
									<?php
										while( have_posts() ):
											the_post();
											the_content();
										endwhile;
									?>
								</div>
								<!-- /.ai-con -->
							</div>
							<!-- /.txt-container -->
						</div>
						<!-- /.col-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.overlap-block -->
		</div>
		<!-- /.col-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container-fluid -->

<?php get_footer(); ?>
