<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="container-fluid no-pad jobs <?php echo get_banner_class(); ?>">
	<div class="row">
		<div class="col-12">
			<div class="overlay-block">
				<div class="banner <?php echo get_banner_class(); ?>">
					<div class="banner-content">
						<h4>
							<?php printf(
							/* translators:*/
							 esc_html__( 'Search Results for: %s', 'understrap' ),
								'<span>' . get_search_query() . '</span>' ); ?>
									
						</h4>
					</div>
					<!-- /.banner-content -->
				</div>
				<!-- /.banner not-home -->

				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="txt-container">
								<div class="ai-con">
									<?php if ( have_posts() ) : ?>
									<?php while ( have_posts() ) : the_post(); ?>

									<?php
										/**
										 * Run the loop for the search to output the results.
										 * If you want to overload this in a child theme then include a file
										 * called content-search.php and that will be used instead.
										 */
										get_template_part( 'loop-templates/content', 'search' );
									?>

									<?php endwhile; ?>

									<?php else : ?>

									<?php get_template_part( 'loop-templates/content', 'none' ); ?>

									<?php endif; ?>
									<?php understrap_pagination(); ?>
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
			<!-- /.overlay-block -->
		</div>
		<!-- /.col-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container-fluid -->

<?php get_footer(); ?>
