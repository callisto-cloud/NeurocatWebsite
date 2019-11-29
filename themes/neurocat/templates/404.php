<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="container-fluid no-pad jobs <?php echo get_banner_class(); ?>">
	<div class="row">
		<div class="col-12">
			<div class="overlap-block">
				<div class="banner not-home">
					<div class="banner-content">
						<h4>404 Error!</h4>
					</div>
					<!-- /.banner-content -->
				</div>
				<!-- /.banner not-home -->

				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="txt-container">
								<div class="ai-con">
									<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.',
							'understrap' ); ?></h1>
									<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
							'understrap' ); ?></p>

									<?php get_search_form(); ?>
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
